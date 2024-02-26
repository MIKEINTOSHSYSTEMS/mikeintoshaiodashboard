<?php

use app\components\widgets\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var Da\User\Form\RegistrationForm $model
 * @var app\models\User $user
 * @var Da\User\Module $module
 */

$this->title = Yii::t('app', 'Sign up');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card card-md">
    <div class="card-body">
        <h2 class="card-title text-center mb-4">
            <?= Yii::t('app', 'Create new account') ?>
        </h2>
        <?php $form = ActiveForm::begin(
            [
                'id' => $model->formName(),
                'enableAjaxValidation' => false,
                'enableClientValidation' => false,
            ]
        ); ?>
        <div class="mb-3">
            <?= $form->field($model, 'email', [
                'labelOptions' => [
                    'class' => 'form-label',
                ],
            ])->textInput(['autofocus' => true]) ?>
        </div>
        <div class="mb-3">
            <?= $form->field($model, 'username', [
                'labelOptions' => [
                    'class' => 'form-label',
                ],
            ]) ?>
        </div>
        <?php if ($module->generatePasswords === false): ?>
            <div class="mb-3">
                <?= $form->field($model, 'password', [
                    'labelOptions' => [
                        'class' => 'form-label',
                    ],
                ])->passwordInput() ?>
            </div>
        <?php endif ?>
        <?php if (Yii::$app->settings->get('app.useCaptcha')): ?>
            <div class="mb-3">
                <?= $form->field($model, 'captcha', [
                    'labelOptions' => [
                        'class' => 'form-label',
                    ],
                ])
                    ->widget(Captcha::class, ['captchaAction' => ['/user/registration/captcha']]) ?>
            </div>
        <?php endif; ?>
        <?php if ($module->enableGdprCompliance): ?>
            <div class="mb-3">
                <?= $form->field($model, 'gdpr_consent')->checkbox(['custom' => true, 'value' => 1]) ?>
            </div>
        <?php endif ?>
        <div class="form-footer">
            <?= Html::submitButton(Yii::t('app', 'Sign up'), ['class' => 'btn btn-primary w-100', 'tabindex' => '3']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<div class="text-center text-muted mt-3">
    <?= Yii::t('app', 'Already have an account?') ?>
    <?= Html::a(Yii::t('app', 'Sign In'), ["/user/login"]) ?>
</div>
