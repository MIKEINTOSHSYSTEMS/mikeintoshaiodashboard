<?php

use yii\helpers\Html;
use app\components\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;

/* @var $this yii\web\View */
/* @var $model app\modules\addons\modules\webhooks\models\Webhook */
/* @var $form yii\widgets\ActiveForm */
/* @var $forms array [id => name] of Form models */
?>

<div class="webhook-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-6">
            <?php echo $form->field($model, 'form_id')->widget(Select2::classname(), [
                'data' => $forms,
                'options' => [
                    'placeholder' => Yii::t('app', 'Select a form...'),
                    'multiple' => $model->isNewRecord
                ],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ])->label(Yii::t('app', 'Form')); ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'url')->textInput([
                'maxlength' => true,
                'placeholder' => Yii::t('app', 'Your web hook url'),
            ]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'handshake_key')->textInput([
                'maxlength' => true,
                'placeholder' => Yii::t('app', 'Your handshake key'),
            ]) ?>
        </div>
        <div class="col-sm-2">
            <?= $form->field($model, 'status')->widget(SwitchInput::class) ?>
        </div>
        <div class="col-sm-2">
            <?= $form->field($model, 'json')->widget(SwitchInput::class) ?>
        </div>
        <div class="col-sm-2">
            <?= $form->field($model, 'alias')->widget(SwitchInput::class) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ?
            Yii::t('app', 'Create') :
            Yii::t('app', 'Update'), [
            'class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>