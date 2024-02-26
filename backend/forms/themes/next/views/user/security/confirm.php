<?php

use app\components\widgets\ActiveForm;
use yii\helpers\Html;

/**
 * @var yii\web\View            $this
 * @var Da\User\Form\LoginForm $model
 * @var Da\User\Module         $module
 */

$this->title = Yii::t('app', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('/shared/_alert', ['module' => Yii::$app->getModule('user')]) ?>

<div class="card card-md">
    <div class="card-body">
        <h2 class="card-title text-center mb-4">
            <?= Yii::t('app', 'Confirm') ?>
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
        ); ?>
        <div class="mb-3">
            <?= $form->field($model, 'twoFactorAuthenticationCode', [
                'labelOptions' => [
                    'class' => 'form-label',
                ],
                'inputOptions' => [
                    'autofocus' => 'autofocus',
                    'class' => 'form-control',
                    'tabindex' => '1'
                ]]) ?>
        </div>
        <div class="form-footer">
            <?= Html::submitButton(Yii::t('app', 'Confirm'),
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