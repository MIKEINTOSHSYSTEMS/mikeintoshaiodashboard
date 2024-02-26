<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.8
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\components\widgets;

use kartik\dialog\Dialog;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Class DetailView
 * @package app\components\widgets
 */
class DetailView extends \kartik\detail\DetailView
{
    public function init()
    {
        parent::init();
        $this->krajeeDialogSettings = array_replace_recursive([
            'dialogDefaults' => [
                Dialog::DIALOG_CONFIRM => [
                    'btnOKClass' => 'btn-danger',
                    'btnOKLabel' =>  '<span class="far fa-check"></span> ' . Yii::t('app', 'Ok'),
                    'btnCancelClass' =>  'btn-default',
                    'btnCancelLabel' =>  '<span class="far fa-ban"></span> ' . Yii::t('app', 'Cancel'),
                ],
            ],
        ], $this->krajeeDialogSettings);
    }
}