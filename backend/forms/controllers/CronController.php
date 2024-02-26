<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.3.3
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\components\cron\CronExpression;
use app\components\analytics\Analytics;

/**
 * Class CronController
 *
 * @package app\controllers
 */
class CronController extends Controller
{

    /**
     * @var string the default controller action.
     */
    public $defaultAction = 'run';

    /**
     * @param \yii\base\Action $action
     * @return bool
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action)
    {
        // your custom code here, if you want the code to run before action filters,
        // which are triggered on the [[EVENT_BEFORE_ACTION]] event, e.g. PageCache or AccessControl

        @ini_set('memory_limit', '1024M');
        @set_time_limit(0);

        if (!parent::beforeAction($action)) {
            return false;
        }

        // other custom code here

        return true; // or false to not run the action
    }

    /**
     * Run cron commands
     *
     * @param $cron_key
     * @return string
     */
    public function actionRun($cron_key)
    {
        if (isset(Yii::$app, Yii::$app->params, Yii::$app->params['App.Cron.cronKey']) &&
            Yii::$app->params['App.Cron.cronKey'] === $cron_key) {

            // NOTE: Linux Cron must be configured to every minute, no less

            // By default, update analytics every day
            $cron = CronExpression::factory(Yii::$app->params['App.Analytics.cronExpression']);

            // Update analytics
            if ($cron->isDue()) {
                Analytics::aggregate();
                Yii::info("Analytics has successfully updated the stats tables.");
            }

            // By default, process mail queue every minute
            $cron = CronExpression::factory(Yii::$app->params['App.Mailer.cronExpression']);
            // Process queue
            if ($cron->isDue()) {
                /** @var \app\components\queue\MailQueue $mailer */
                $mailer = Yii::$app->mailer;
                // TODO Sendinblue doesn't have a process method because it's not needed
                if (method_exists($mailer, 'process')) {
                    $success = $mailer->process();
                    if ($success) {
                        // if all messages are successfully sent out
                        Yii::info('All e-mails are successfully sent out.');
                    } else {
                        Yii::error('Error sending e-mails.');
                    }
                }
            }
        }
        Yii::$app->response->setStatusCode(200);
        return '';
    }

}