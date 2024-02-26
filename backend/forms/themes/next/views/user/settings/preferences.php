<?php

use app\components\widgets\ActiveForm;
use app\helpers\IconHelper;
use kartik\helpers\Html;

/**
 * @var yii\web\View $this
 * @var ActiveForm $form
 * @var app\models\User $user
 */

$this->title = Yii::t('app', 'Preferences');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card mb-3">
    <div class="card-header">
        <h3 class="card-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="card-body">
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-sm-12">
                <h3 class="card-title"><?= Yii::t('app', 'Session Settings') ?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p><?= Yii::t('app', 'Set the session security and session expiration timeout for your account.') ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group mb-3">
                    <?= Html::label(Yii::t('app', 'Timeout value'), 'session_timeout_value', ['class' => 'form-label']) ?>
                    <?= Html::dropDownList(
                        'session_timeout_value',
                        Yii::$app->user->preferences->get('App.User.SessionTimeout.value'),
                        [
                            0 => Yii::t('app', 'Disabled'),
                            600000 => Yii::t('app', '10 minutes'),
                            900000 => Yii::t('app', '15 minutes'),
                            1200000 => Yii::t('app', '20 minutes'),
                            1800000 => Yii::t('app', '30 minutes'),
                            2700000 => Yii::t('app', '45 minutes'),
                            3600000 => Yii::t('app', '1 hour'),
                            7200000 => Yii::t('app', '2 hours'),
                            14400000 => Yii::t('app', '4 hours'),
                            21600000 => Yii::t('app', '6 hours'),
                            28800000 => Yii::t('app', '8 hours'),
                            43200000 => Yii::t('app', '12 hours'),
                            57600000 => Yii::t('app', '16 hours'),
                            72000000 => Yii::t('app', '20 hours'),
                            86400000 => Yii::t('app', '24 hours'),
                        ],
                        ['class' => 'form-select']
                    ) ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <?= Html::submitButton(
                        IconHelper::show('check') .
                        Yii::t('app', 'Save'), ['class' => 'btn btn-primary']
                    ) ?>
                </div>
            </div>
        </div>
        <?= Html::hiddenInput('action', 'session'); ?>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="card-footer">
        <?= Yii::t('app', 'You will be prompted before timeout, as specified by the Timeout value.') ?>
    </div>
</div>