<?php

use app\components\widgets\ActiveForm;
use app\helpers\IconHelper;
use yii\helpers\Html;

/* @var yii\web\View $this */
/* @var app\models\User $user */

?>

<?php $this->beginContent('@Da/User/resources/views/admin/update.php', [
    'user' => $user,
    'title' => Yii::t('app', 'Account details')]) ?>

<?php $form = ActiveForm::begin(
    [
        'enableAjaxValidation' => true,
        'enableClientValidation' => false,
        'fieldConfig' => [
            'horizontalCssClasses' => [
                'wrapper' => 'col-sm-9',
            ],
        ],
    ]
); ?>

<?= $this->render('/admin/_user', ['form' => $form, 'user' => $user]) ?>

<div class="form-action">
    <?= Html::submitButton(
        IconHelper::show('check') .
        Yii::t('app', 'Save'), ['class' => 'btn btn-primary']
    ) ?>
</div>

<?php ActiveForm::end(); ?>

<?php $this->endContent() ?>
