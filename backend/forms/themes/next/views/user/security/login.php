<?php

use app\components\widgets\ActiveForm;
use app\helpers\Html;

/**
 * @var yii\web\View            $this
 * @var Da\User\Form\LoginForm $model
 * @var Da\User\Module         $module
 */

$this->title = Yii::t('app', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;

$passwordLabel = Yii::t('app', 'Password');
$passwordLabel .= '<span class="form-label-description">';
$passwordLabel .= Html::a(Yii::t('app', 'I forgot password'), ['/user/recovery/request']);
$passwordLabel .= '</span>';
?>
<div class="card card-md">
    <div class="card-body">
        <h2 class="h2 text-center mb-4">
            <?= Yii::t('app', 'Login to your account') ?>
        </h2>
        <?php $form = ActiveForm::begin(
            [
                'id' => $model->formName(),
                'enableAjaxValidation' => true,
                'enableClientValidation' => false,
                'validateOnBlur' => false,
                'validateOnType' => false,
                'validateOnChange' => false,
            ]
        ) ?>
            <div class="mb-3">
                <?= $form->field($model, 'login', [
                    'labelOptions' => [
                        'class' => 'form-label',
                    ],
                    'inputOptions' => [
                        'autofocus' => 'autofocus',
                        'class' => 'form-control',
                        'tabindex' => '1',
                        'placeholder' => 'your@email.com',
                    ]]
                ) ?>
            </div>
            <div class="mb-2">
                <?= $form->field($model, 'password', [
                    'labelOptions' => [
                        'class' => 'form-label',
                    ],
                    'inputOptions' => [
                        'class' => 'form-control',
                        'tabindex' => '2',
                        'placeholder' => Yii::t('app', 'Your password')
                    ]])
                    ->passwordInput()
                    ->label($passwordLabel) ?>
            </div>
            <div class="mb-2">
                <?= $form->field($model, 'rememberMe')
                    ->checkbox(['custom' => true]) ?>
            </div>
            <div class="form-footer">
                <?= Html::submitButton(
                    Yii::t('app', 'Sign in'),
                    ['class' => 'btn btn-primary w-100', 'tabindex' => '3']
                ) ?>
            </div>
        <?php ActiveForm::end(); ?>
        <?php if ($module->enableEmailConfirmation): ?>
            <div class="text-center text-muted mt-3">
                <?= Html::a(
                    Yii::t('app', 'Didn\'t receive confirmation email?'),
                    ['/user/registration/resend']
                ) ?>
            </div>
        <?php endif ?>
    </div>
</div>
<?php if ($module->enableRegistration && Yii::$app->settings->get('app.anyoneCanRegister')): ?>
    <div class="text-center text-muted mt-3">
        <?= Yii::t('app', 'Don\'t have account yet?') ?>
        <?= Html::a(Yii::t('app', 'Sign up'), ['/user/registration/register']) ?>
    </div>
<?php endif ?>