<?php

use app\components\widgets\ActiveForm;
use app\helpers\IconHelper;
use baluart\tomselect\TomSelectDropDownList;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * @var $this yii\web\View
 * @var $model Da\User\Model\Permission
 * @var $unassignedItems string[]
 */

?>

<?php $form = ActiveForm::begin(
    [
        'enableClientValidation' => false,
        'enableAjaxValidation' => true,
    ]
) ?>

<?= $form->field($model, 'name') ?>

<?= $form->field($model, 'description') ?>

<?= $form->field($model, 'rule')->widget(TomSelectDropDownList::class, [
    'items' => ArrayHelper::map(Yii::$app->getAuthManager()->getRules(), 'name', 'name'),
    'options' => [
        'prompt' => Yii::t('app', 'Select rule...'),
    ]
]) ?>


<?= $form->field($model, 'children')->widget(
    TomSelectDropDownList::class,
    [
        'items' => $unassignedItems,
        'options' => [
            'id' => 'children',
            'multiple' => true,
        ],
    ]
) ?>

<div class="form-action">
    <?= Html::submitButton(
        IconHelper::show('check') .
        Yii::t('app', 'Save'), ['class' => 'btn btn-primary']
    ) ?>
</div>

<?php ActiveForm::end() ?>
