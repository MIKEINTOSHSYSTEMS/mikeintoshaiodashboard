<?php

/**
 * @var $this  yii\web\View
 * @var $model Da\User\Model\Rule
 */

use app\components\widgets\ActiveForm;
use app\helpers\IconHelper;
use yii\helpers\Html;

?>


<?php $form = ActiveForm::begin(
    [
        'enableClientValidation' => false,
        'enableAjaxValidation' => true,
    ]
) ?>

<?= $form->field($model, 'name') ?>

<?= $form->field($model, 'className') ?>

<div class="form-action">
    <?= Html::submitButton(
        IconHelper::show('check') .
        Yii::t('app', 'Save'), ['class' => 'btn btn-primary']
    ) ?>
</div>

<?php ActiveForm::end() ?>
