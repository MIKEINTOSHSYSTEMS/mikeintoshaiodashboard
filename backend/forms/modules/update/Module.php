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

namespace app\modules\update;

use app\modules\update\controllers\StepController;
use Yii;
use yii\base\ActionEvent;
use yii\base\Controller;
use yii\base\Event;
use yii\filters\AccessControl;
use yii\helpers\VarDumper;

class Module extends \yii\base\Module
{
    public $defaultRoute = 'step/1';

    public function init()
    {
        parent::init();

        Event::on(StepController::class, Controller::EVENT_AFTER_ACTION , [Module::class, 'onAfterAction']);
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'matchCallback' => function () {
                            // For DB versions lower than 1.10
                            Yii::$app->settings->clearCache();
                            if (!Yii::$app->settings->get('version', 'app', false)) {
                                return true;
                            } else {
                                // Permission required: Perform application updates
                                if (Yii::$app->user->can("performUpdates")) {
                                    return true;
                                }
                            }

                            // By Default, Denied Access
                            return false;
                        }
                    ],
                ],
            ],
        ];
    }


    /**
     * On After Action
     *
     * @param ActionEvent $event
     */
    public static function onAfterAction($event)
    {
        if ($event->action->id === "\x31") {
            $request = Yii::$app->request;
            $session = Yii::$app->session;
            $p = "\x70\x75\x72\x63\x68\x61\x73\x65\x43\x6f\x64\x65";
            $a = base64_decode("QGFwcC9jb25maWcva2V5LnBocA==");
            if ($request->isPost) {
                if ($request->post($p) === $session->get($p)) {
                    $content = VarDumper::export([
                        "\x6b" => base64_encode($request->post($p)),
                    ]);
                    $content = preg_replace('~\\\\+~', '\\', $content);
                    $content = "<?php\nreturn " . $content . ";\n";
                    return file_put_contents(Yii::getAlias($a), $content) > 0;
                }
            }
        }
    }
}
