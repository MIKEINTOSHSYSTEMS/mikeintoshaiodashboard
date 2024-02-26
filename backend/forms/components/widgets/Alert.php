<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.9.1
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 *
 * Based on Yii2 Alert (MIT license)
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @author Alexander Makarov <sam@rmcreative.ru>
 * @see https://github.com/mickgeek/yii2-actionbar
 */

namespace app\components\widgets;

use yii\base\Widget;

/**
 * Class Alert
 *
 * Alert widget renders a message from session flash. All flash messages are displayed
 * in the sequence they were assigned using setFlash. You can set message as following:
 *
 * ```php
 * \Yii::$app->getSession()->setFlash('error', 'This is the message');
 * \Yii::$app->getSession()->setFlash('success', 'This is the message');
 * \Yii::$app->getSession()->setFlash('info', 'This is the message');
 * ```
 *
 * Multiple messages could be set as follows:
 *
 * ```php
 * \Yii::$app->getSession()->setFlash('error', ['Error 1', 'Error 2']);
 * ```
 * @package app\components\widgets
 */
class Alert extends Widget
{
    /**
     * @var array the alert types configuration for the flash messages.
     * This array is set up as $key => $value, where:
     * - $key is the name of the session flash variable
     * - $value is the bootstrap alert type (i.e. danger, success, info, warning)
     */
    public $alertTypes = [
        'error'   => 'alert-danger',
        'danger'  => 'alert-danger',
        'success' => 'alert-success',
        'info'    => 'alert-info',
        'warning' => 'alert-warning'
    ];

    public $iconTypes = [
        'error'   => 'far fa-minus-circle',
        'danger'  => 'far fa-exclamation',
        'success' => 'far fa-check',
        'info'    => 'far fa-info',
        'warning' => 'far fa-exclamation'
    ];

    /**
     * @var array the options for rendering the close button tag.
     */
    public $closeButton = [
        'tag' => 'button',
        'label' => '',
    ];

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $session = \Yii::$app->getSession();
        $flashes = $session->getAllFlashes();

        return $this->render('alert', [
            'flashes' => $flashes,
            'alertTypes' => $this->alertTypes,
            'iconTypes' => $this->iconTypes,
            'closeButton' => $this->closeButton,
        ]);
    }
}
