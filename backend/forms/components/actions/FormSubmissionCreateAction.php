<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 2.0
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */
namespace app\components\actions;

use app\events\SubmissionEvent;
use app\models\FormSubmission;
use app\models\FormSubmissionFile;
use Yii;
use yii\helpers\Url;
use yii\rest\CreateAction;
use yii\web\ServerErrorHttpException;

/**
 * Class FormSubmissionCreateAction
 * @package app\components\actions
 */
class FormSubmissionCreateAction extends CreateAction
{

    /**
     * Create new model
     *
     * @return \yii\db\ActiveRecord
     * @throws ServerErrorHttpException
     * @throws \yii\base\InvalidConfigException
     */
    public function run(): \yii\db\ActiveRecord
    {
        if ($this->checkAccess) {
            call_user_func($this->checkAccess, $this->id);
        }

        $model = new FormSubmission([
            'scenario' => $this->scenario,
        ]);

        $bodyParams = Yii::$app->getRequest()->getBodyParams();
        $model->load($bodyParams, '');
        if ($model->save()) {
            if (!empty($bodyParams['temp_id'])) {
                FormSubmissionFile::updateAll([
                    'submission_id' => $model->id,
                ], [
                    'submission_id' => $bodyParams['temp_id'],
                ]);
            }
            Yii::$app->trigger(FormSubmission::EVENT_SUBMISSION_CREATED, new SubmissionEvent([
                'sender' => $model,
                'form' => $model->form,
                'submission' => $model,
            ]));
            $response = Yii::$app->getResponse();
            $response->setStatusCode(201);
            $id = implode(',', $model->getPrimaryKey(true));
            $response->getHeaders()->set('Location', Url::toRoute([$this->viewAction, 'id' => $id], true));
        } elseif (!$model->hasErrors()) {
            throw new ServerErrorHttpException('Failed to create the object for unknown reason.');
        }

        return $model;
    }
}