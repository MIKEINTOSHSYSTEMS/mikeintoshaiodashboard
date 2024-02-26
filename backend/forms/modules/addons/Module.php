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

namespace app\modules\addons;

use app\helpers\FileHelper;
use app\modules\addons\models\Addon;
use Yii;
use yii\base\Application;
use yii\base\BootstrapInterface;
use yii\base\Event;
use yii\filters\AccessControl;

class Module extends \yii\base\Module implements BootstrapInterface
{

    public $defaultRoute = 'admin/index';
    public $controllerLayout = '@app/views/layouts/main';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'matchCallback' => function () {
                            // CheckController & HandleController are public controllers inside each add-on
                            if (Yii::$app->controller->id == "check" || Yii::$app->controller->id == "handle") {
                                return true;
                            }

                            if (Yii::$app->user->can("viewAddons", ['listing' => true])) {
                                return true;
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
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        Yii::setAlias('@addons', '@app/modules/addons/modules');

        // Disable add-ons to update application
        if (!Yii::$app->getModule('update')) {
            $this->setModules($this->getActiveAddOns());
        }
    }

    /**
     * Bootstrap method to be called during application bootstrap stage.
     *
     * @param \yii\base\Application $app the application currently running
     */
    public function bootstrap($app)
    {
        foreach ($this->getModules() as $moduleID => $config) {

            $module = $this->getModule($moduleID);

            if ($module instanceof BootstrapInterface) {
                $module->bootstrap($app);
            }

            /** @var EventManagerInterface $module */
            if ($module instanceof EventManagerInterface) {
                $this->attachEvents($app, $module);
            }
        }
    }

    /**
     * Configure Addon's Event Handlers in application
     *
     * @param Application $app
     * @param EventManagerInterface $module
     * @return void
     */
    public function attachEvents(Application $app, EventManagerInterface $module)
    {
        // Attach global events
        $globalEvents = $module->attachGlobalEvents();
        if (is_array($globalEvents)) {
            foreach ($globalEvents as $eventName => $handler) {
                $app->on($eventName, $handler);
            }
        }

        // Attach class events
        $classEvents = $module->attachClassEvents();
        if (is_array($classEvents)) {
            foreach ($classEvents as $className => $events) {
                if (class_exists($className) && is_array($events)) {
                    foreach ($events as $eventName => $handlers) {
                        if (is_array($handlers)) {
                            foreach ($handlers as $handler) {
                                if (is_array($handler) && is_callable($handler[0])) {
                                    $data = isset($handler[1]) ? array_pop($handler) : null;
                                    $append = isset($handler[2]) ? array_pop($handler) : null;
                                    Event::on($className, $eventName, $handler[0], $data, $append);
                                } elseif (is_callable($handler)) {
                                    Event::on($className, $eventName, $handler);
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    protected function getActiveAddOns(): array
    {
        // Disable Add-On if it's not found
        // Absolute path to addOns directory
        $addOnsDirectory = Yii::getAlias('@addons');

        // Each subdirectory name is an addOn id
        $addOns = FileHelper::scandir($addOnsDirectory);
        $installedAddOns = Addon::find()->all();
        foreach ($installedAddOns as $installedAddOn) {
            // Disable removed add-on
            if (!in_array($installedAddOn->id, $addOns)) {
                $installedAddOn->status = false;
                $installedAddOn->save(false);
            }
        }

        $activeAddOns = [];

        foreach ($installedAddOns as $installedAddOn) {
            if ($installedAddOn->status) {
                $activeAddOns[$installedAddOn->id]['class'] = $installedAddOn->class;
            }
        }

        return $activeAddOns;
    }
}
