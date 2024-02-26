<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.1
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\modules\addons\modules\webhooks;

use app\controllers\AjaxController;
use app\helpers\ArrayHelper;
use app\helpers\SlugHelper;
use app\models\Form;
use app\models\FormData;
use app\modules\addons\EventManagerInterface;
use app\modules\addons\FormManagerInterface;
use app\modules\addons\modules\webhooks\models\Webhook;
use Exception;
use Yii;
use yii\httpclient\Client;

class Module extends \yii\base\Module implements EventManagerInterface, FormManagerInterface
{

    public $id = "webhooks";
    public $defaultRoute = 'admin/index';
    public $controllerLayout = '@app/views/layouts/main';

    /**
     * @inheritdoc
     */
    public function getDefaultModelClasses()
    {
        return [
            'Webhook' => Webhook::class,
        ];
    }

    /**
     * @inheritdoc
     */
    public function attachGlobalEvents()
    {
        return [
            'app.form.submission.accepted' => function ($event) {
                $this->sendSubmissionData($event);
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
        return [];
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
            $oModels = Webhook::findAll(['form_id' => $event->oldForm->id]);
            foreach ($oModels as $oModel) {
                $model = new Webhook;
                $model->attributes = $oModel->attributes;
                $model->id = null;
                $model->form_id = $event->form->id;
                $model->isNewRecord = true;
                $model->save();
            }
        }
    }

    /**
     * Send the form submission data through an HTTP POST request
     * either as URL encoded form data or as a JSON string
     * depending on the format selected in the Webhook configuration
     *
     * @param $event
     */
    public function sendSubmissionData($event)
    {

        if (isset($event, $event->form, $event->form->id, $event->submission, $event->filePaths)) {

            try {
                /** @var Form $formModel */
                $formModel = $event->form;
                /** @var FormData $formDataModel */
                $formDataModel = $formModel->formData;

                $webhooks = Webhook::findAll(['form_id' => $formModel->id, 'status' => 1]);

                $client = new Client([
                    'transport' => 'yii\httpclient\CurlTransport'
                ]);
                $body = $event->submission->getSubmissionData();

                foreach ($webhooks as $webhook) {
                    // Replace field ID by field alias
                    if ($webhook->alias === 1) {
                        $aliases = $formDataModel->getAlias();
                        foreach ($aliases as $key => $alias) {
                            if (!empty($alias)) {
                                ArrayHelper::replaceKey($body, $key, SlugHelper::slug($alias, [
                                    'delimiter' => '_',
                                ]));
                            }
                        }
                    }

                    // Add Handshake Key
                    if (!empty($webhook->handshake_key)) {
                        $body = $body + ['handshake_key' => $webhook->handshake_key];
                    }

                    // Header
                    $headers = ['User-Agent' => Yii::$app->name];
                    // Format
                    $format = Client::FORMAT_URLENCODED;

                    // Add Json Format
                    if ($webhook->json === 1) {
                        $headers['content-type'] = 'application/json';
                        $format = Client::FORMAT_JSON;
                    }

                    // Send HTTP POST request
                    $client->createRequest()
                        ->setMethod('POST')
                        ->setFormat($format)
                        ->setUrl($webhook->url)
                        ->addHeaders($headers)
                        ->setData($body)
                        ->setOptions([
                            CURLOPT_SSL_VERIFYHOST => 0,
                            CURLOPT_SSL_VERIFYPEER => 0
                        ])
                        ->send();
                }

            } catch (Exception $e) {
                // Log error
                Yii::error($e);
            }
        }
    }
}
