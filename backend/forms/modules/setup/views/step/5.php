<?php

use app\components\widgets\Icon;
use yii\helpers\Html;
use app\components\widgets\ActiveForm;
use app\helpers\Timezone;

/** @var yii\web\View $this */
/** @var app\modules\setup\models\forms\UserForm $model */

$this->title = Yii::t('app', 'Create administrator account');

// Timezone array
$timezones = Timezone::all();

?>

<div class="row">
    <div class="col-sm-4">
        <ul class="steps steps-counter steps-vertical mt-5">
            <li class="step-item"><?= Yii::t('app', 'Activate License') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Verify Requirements') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Set Up Database') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Install App') ?></li>
            <li class="step-item active"><?= Yii::t('app', 'Create Admin Account') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Finished') ?></li>
        </ul>
    </div>
    <div class="col-sm-8 form-wrapper mb-4">
        <?= Html::tag('h2', Yii::t('app', 'Create administrator account'), ['class' => 'step-title']) ?>
        <?php $form = ActiveForm::begin([
            'type' => ActiveForm::TYPE_VERTICAL,
        ]); ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'timezone')->dropDownList($timezones, ['prompt'=>Yii::t('app', '-Select-')]) ?>
        <div class="form-action">
        <?= Html::submitButton(
            Yii::t('app', 'Create & continue'),
            [
                'class' => 'btn btn-primary',
                'name' => 'create-account',
            ]
        ) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>