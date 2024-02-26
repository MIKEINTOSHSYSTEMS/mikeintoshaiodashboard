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

namespace app\modules\setup;

use app\modules\setup\controllers\StepController;
use app\modules\setup\helpers\Setup;
use Yii;
use yii\base\ActionEvent;
use yii\base\BootstrapInterface;
use yii\base\Controller;
use yii\base\Event;
use yii\helpers\VarDumper;

class Module extends \yii\base\Module implements BootstrapInterface
{

    /**
     * Bootstrap method to be called during application bootstrap stage.
     *
     * @param \yii\base\Application $app the application currently running
     */
    public function bootstrap($app)
    {
        Event::on(StepController::class, Controller::EVENT_AFTER_ACTION , [Module::class, 'onAfterAction']);
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
