<?php

use yii\helpers\Html;
use app\components\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model app\modules\addons\modules\google_analytics\models\Account */
/* @var $forms array [id => name] of Form models */

?>

<div class="google-analytics-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'form_id')
        ->widget(Select2::class, [
            'data' => $forms,
            'options' => ['placeholder' => Yii::t('app', 'Select a form...')],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ])
        ->label(Yii::t('app', 'Form')); ?>

    <div class="row">
        <div class="col-sm-3">
            <?= $form->field($model, 'tracking_id')->textInput([
                'maxlength' => true,
                'placeholder' => 'UA-000000-01'
            ]) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'tracking_domain')->textInput([
                'maxlength' => true,
                'placeholder' => 'example.com'
            ]) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'status')->widget(SwitchInput::class) ?>
        </div>
        <div class="col-sm-3">
            <?= $form->field($model, 'anonymize_ip')->widget(SwitchInput::class) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ?
            Yii::t('app', 'Create') :
            Yii::t('app', 'Update'), ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>