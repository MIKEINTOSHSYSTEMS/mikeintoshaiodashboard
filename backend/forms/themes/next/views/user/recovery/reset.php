<?php

use app\components\widgets\ActiveForm;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\components\widgets\ActiveForm $form
 * @var Da\User\Form\RecoveryForm $model
 */

$this->title = Yii::t('app', 'Reset your password');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card card-md">
    <div class="card-body">
        <h2 class="card-title text-center mb-4">
            <?= Yii::t('app', 'Reset your password') ?>
        </h2>
        <?php $form = ActiveForm::begin(
            [
                'id' => $model->formName(),
                'enableAjaxValidation' => true,
                'enableClientValidation' => false,
            ]
        ); ?>
        <div class="mb-3">
            <?= $form->field($model, 'password', [
                'labelOptions' => [
                    'class' => 'form-label',
                ],
            ])->passwordInput() ?>
        </div>
        <div class="form-footer">
            <?= Html::submitButton(Yii::t('app', 'Finish'),
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