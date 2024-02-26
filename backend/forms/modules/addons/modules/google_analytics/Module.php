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

namespace app\modules\addons\modules\google_analytics;

use app\controllers\AjaxController;
use app\models\Form;
use app\modules\addons\EventManagerInterface;
use app\modules\addons\FormManagerInterface;
use app\modules\addons\modules\google_analytics\models\Account;
use app\modules\addons\modules\webhooks\models\Webhook;

class Module extends \yii\base\Module implements EventManagerInterface, FormManagerInterface
{
    public $id = "google_analytics";
    public $defaultRoute = 'admin/index';
    public $controllerLayout = '@app/views/layouts/main';

    /**
     * @inheritdoc
     */
    public function getDefaultModelClasses()
    {
        return [
            'Account' => Account::class,
        ];
    }

    /**
     * @inheritdoc
     */
    public function attachGlobalEvents()
    {
        return [
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
            'yii\base\View' => [
                'afterRender' => [
                    ['app\modules\addons\modules\google_analytics\Module', 'addTrackingCode']
                ],
            ],
            'app\models\Form' => [
                'beforeDelete' => [
                    ['app\modules\addons\modules\google_analytics\Module', 'onFormDeleted']
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
            $oModels = Account::findAll(['form_id' => $event->oldForm->id]);
            foreach ($oModels as $oModel) {
                $model = new Account;
                $model->attributes = $oModel->attributes;
                $model->id = null;
                $model->form_id = $event->form->id;
                $model->isNewRecord = true;
                $model->save();
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
            Account::deleteAll(['form_id' => $event->sender->id]);
        }
    }

    /**
     * Event Handler
     * After a view is rendered
     *
     * @param $event
     */
    public static function addTrackingCode($event)
    {

        if (isset($event, $event->sender, $event->sender->context) &&
            isset($event->sender->context->module, $event->sender->context->module->requestedRoute) &&
            $event->sender->context->module->requestedRoute === "app/embed" ) {

            // Add tracking code only to app/embed view

            $formModel = $event->sender->context->getFormModel();
            $accounts = Account::findAll(['form_id' => $formModel->id, 'status' => 1]);

            if (count($accounts) > 0) {
                $firstAccount = $accounts[0];
                // Detect if this is a GA4 Account
                $isGA4 = false;

                $parts = explode('-', $firstAccount->tracking_id);

                if (isset($parts[0]) && $parts[0] === 'G') {
                    $isGA4 = true;
                }

                $gaCode = <<<EOT
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={$firstAccount->tracking_id}"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

EOT;
                foreach ($accounts as $account) {
                    $gaCode .= <<<EOT
gtag('config', '{$account->tracking_id}');
EOT;

                    if ($isGA4) {

                        $gaCode .= <<<EOT

jQuery(document).ready(function(){

    $(options.name).on('fill', function(event){
        // Track fill
        gtag('event', 'fill', {
          'form': 'Form #$account->form_id',
          'status': 'Start'
        });
    });
    $(options.name).on('error', function(event){
        // Track submits with validation error
        gtag('event', 'submit', {
          'form': 'Form #$account->form_id',
          'status': 'Error'
        });
    });
    $(options.name).on('success', function(event){
        // Track submits with success
        gtag('event', 'submit', {
          'form': 'Form #$account->form_id',
          'status': 'Success'
        });
    });

});
EOT;

                    } else {

                        $gaCode .= <<<EOT

jQuery(document).ready(function(){

    $(options.name).on('fill', function(event){
        // Track fill
        gtag('event', 'Fill', {
          'event_category': 'Form #$account->form_id',
          'event_label': 'Start',
          'value': null
        });
    });
    $(options.name).on('error', function(event){
        // Track submits with validation error
        gtag('event', 'Submit', {
          'event_category': 'Form #$account->form_id',
          'event_label': 'Error',
          'value': null
        });
    });
    $(options.name).on('success', function(event){
        // Track submits with success
        gtag('event', 'Submit', {
          'event_category': 'Form #$account->form_id',
          'event_label': 'Success',
          'value': null
        });
    });

});
EOT;

                    }
                }

                $gaCode .= <<<EOT

</script>

</body>
EOT;

                $content = $event->output;
                $event->output =  str_replace("</body>", $gaCode, $content);
            }
        }
    }
}
