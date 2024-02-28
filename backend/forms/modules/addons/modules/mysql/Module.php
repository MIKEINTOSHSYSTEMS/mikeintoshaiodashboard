<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.0
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\modules\addons\modules\mysql;

use app\components\rules\RuleEngine;
use app\controllers\AjaxController;
use app\helpers\SubmissionHelper;
use app\models\Form;
use app\models\FormSubmission;
use app\modules\addons\EventManagerInterface;
use app\modules\addons\FormManagerInterface;
use app\modules\addons\modules\mysql\models\MySQL;
use app\modules\addons\modules\mysql\models\MySQLField;
use app\modules\addons\modules\mysql\services\MySQLService;
use Exception;
use Yii;

/**
 * Class Module
 * @package app\modules\addons\modules\mysql
 */
class Module extends \yii\base\Module implements EventManagerInterface, FormManagerInterface
{

    public $id = "mysql";
    public $defaultRoute = 'admin/index';
    public $controllerLayout = '@app/views/layouts/main';

    /**
     * @inheritdoc
     */
    public function getDefaultModelClasses()
    {
        return [
            'MySQL' => MySQL::class,
        ];
    }

    /**
     * @inheritdoc
     */
    public function attachGlobalEvents()
    {
        return [
            'app.form.submission.accepted' => function ($event) {
                $this->onSubmissionAccepted($event);
            },
            'app.form.submission.verified' => function ($event) {
                $this->onSubmissionVerified($event);
            },
            AjaxController::EVENT_FORM_COPIED => function ($event) {
                $this->onFormCopied($event);
            },
        ];
    }

    /**
     * @inheritdoc
     */
    public function attachClassEvents()
    {
        return [
            Form::class => [
                'beforeDelete' => [
                    [Module::class, 'onFormDeleted']
                ]
            ],
        ];
    }

    /**
     * Event Handler
     * When a Form is Copied
     *
     * @param $event
     */
    public function onFormCopied($event)
    {
        if (isset($event, $event->form, $event->form->id, $event->oldForm, $event->oldForm->id)) {
            $oModels = MySQL::findAll(['form_id' => $event->oldForm->id]);
            foreach ($oModels as $oModel) {
                $model = new MySQL();
                $model->attributes = $oModel->attributes;
                $model->id = null;
                $model->form_id = $event->form->id;
                $model->isNewRecord = true;
                $model->save();

                foreach ($oModel->items as $oItem) {
                    $item = new MySQLField();
                    $item->attributes = $oItem->attributes;
                    $item->id = null;
                    $item->mysql_id = $model->id;
                    $item->form_id = $event->form->id;
                    $item->isNewRecord = true;
                    $item->save();
                }
            }
        }
    }

    /**
     * Event Handler
     * Before a form model is deleted
     *
     * @param $event
     */
    public static function onFormDeleted($event)
    {
        if (isset($event) && isset($event->sender) && $event->sender instanceof Form && isset($event->sender->id)) {
            $models = MySQL::find()->where(['form_id' => $event->sender->id])->all();
            foreach ($models as $model) {
                $model->delete();
            }
        }
    }

    /**
     * Event Handler
     * When a form submission has been accepted
     *
     * @param $event
     */
    public function onSubmissionAccepted($event)
    {
        /** @var FormSubmission $submissionModel */
        $submissionModel = $event->submission;
        /** @var Form $formModel */
        $formModel = empty($event->form) ? $submissionModel->form : $event->form;
        /** @var array $filePaths */
        $filePaths = empty($event->filePaths) ? [] : $event->filePaths;

        // If file paths are empty, find them by model relation
        if (empty($filePaths)) {
            $fileModels = $submissionModel->files;
            foreach ($fileModels as $fileModel) {
                $filePaths[] = $fileModel->getLink();
            }
        }

        /*******************************
        /* Make API Request
        /*******************************/
        $this->makeRequest($formModel, $submissionModel, $filePaths, FormSubmission::STATUS_ACCEPTED);
    }

    /**
     * Event Handler
     * When a form submission has been verified
     *
     * @param $event
     */
    public function onSubmissionVerified($event)
    {
        /** @var FormSubmission $submissionModel */
        $submissionModel = $event->submission;
        /** @var Form $formModel */
        $formModel = empty($event->form) ? $submissionModel->form : $event->form;
        /** @var array $filePaths */
        $filePaths = empty($event->filePaths) ? [] : $event->filePaths;

        // If file paths are empty, find them by model relation
        if (empty($filePaths)) {
            $fileModels = $submissionModel->files;
            foreach ($fileModels as $fileModel) {
                $filePaths[] = $fileModel->getLink();
            }
        }

        /*******************************
        /* Make API Request
        /*******************************/
        $this->makeRequest($formModel, $submissionModel, $filePaths, FormSubmission::STATUS_VERIFIED);
    }

    /**
     * Make Request to API
     *
     * @param $formModel
     * @param $submissionModel
     * @param array $filePaths
     * @param int $event Event Type
     * @return bool
     */
    public function makeRequest($formModel, $submissionModel, $filePaths, $event)
    {

        $result = false;

        $models = MySQL::findAll(['form_id' => $formModel->id, 'status' => 1]);
        /** @var \app\models\FormData $dataModel */
        $dataModel = $formModel->formData;
        /** @var array $submissionData */
        $submissionData = $submissionModel->getSubmissionData();
        // Form fields
        $fieldsForEmail = $dataModel->getFieldsForEmail();
        // Submission data in an associative array
        $fieldValues = SubmissionHelper::prepareDataForReplacementToken($submissionData, $fieldsForEmail);
        // Submission data in a multidimensional array: [0 => ['label' => '', 'value' => '']]
        $fieldData = SubmissionHelper::prepareDataForSubmissionTable($submissionData, $fieldsForEmail);
        // Submission data for rule engine
        $data = SubmissionHelper::prepareDataForRuleEngine($submissionModel->data, $dataModel->getFields());

        /*******************************
        /* Process
        /*******************************/
        foreach ($models as $model) {

            // Only when the required event occurs
            if ($model->event !== $event) {
                continue;
            }

            // By default
            $isValid = true;

            // Conditional Logic
            if (!empty($model->conditions)) {
                $engine = new RuleEngine([
                    'conditions' => $model->conditions,
                    'actions' => [],
                ]);
                $isValid = $engine->matches($data);
            }

            // If the conditions have been met
            if ($isValid) {

                try {

                    $record = [];

                    foreach ($model->items as $item) {
                        $value = isset($item->form_field, $submissionData[$item->form_field]) ?
                            $submissionData[$item->form_field] : '';
                        $record["{$item->table_column}"] = is_array($value) ? implode(',', $value) : $value;
                    }

                    /**
                     * Insert new record to MySQL database
                     */
                    $service = new MySQLService(
                        $model->db_host,
                        $model->db_port,
                        $model->db_name,
                        $model->db_user,
                        $model->db_pass,
                        $model->db_charset
                    );

                    $service->insert($model->db_table, $record);

                } catch (Exception $e) {

                    // Log exception
                    Yii::error($e);

                }
            }
        }

        return $result;
    }

}