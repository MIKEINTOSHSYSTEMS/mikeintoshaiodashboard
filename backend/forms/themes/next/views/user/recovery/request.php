<?php

use app\components\widgets\ActiveForm;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\components\widgets\ActiveForm $form
 * @var Da\User\Form\RecoveryForm $model
 */

$this->title = Yii::t('app', 'Recover your password');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card card-md">
    <div class="card-body">
        <h2 class="card-title text-center mb-4">
            <?= Yii::t('app', 'Forgot password') ?>
        </h2>
        <p class="text-muted mb-4">
            <?= Yii::t('app', 'Enter your email address and we will send you an email with the steps to reset your password.') ?>
        </p>
        <?php $form = ActiveForm::begin(
            [
                'id' => $model->formName(),
                'enableAjaxValidation' => true,
                'enableClientValidation' => false,
            ]
        ); ?>
        <div class="mb-3">
            <?= $form->field($model, 'email', [
                'labelOptions' => [
                    'class' => 'form-label',
                ],
            ])
                ->textInput([
                    'autofocus' => true,
                    'placeholder' => Yii::t('app', 'Enter email'),
                ])
                ->label(Yii::t('app', 'Email address')) ?>
        </div>
        <div class="form-footer">
            <?= Html::submitButton(\app\helpers\IconHelper::show('mail') . ' ' .  Yii::t('app', 'Send me new password'),
                ['class' => 'btn btn-primary w-100']) ?><br>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<div class="text-center text-muted mt-3">
    <?= Yii::t('app', 'Forget it, {backLink} to the sign in screen.', [
        'backLink' => Html::a(Yii::t('app', 'send me back'), ['/user/login'])
    ]) ?>
</div>