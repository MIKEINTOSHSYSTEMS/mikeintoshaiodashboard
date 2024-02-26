<?php

use app\components\widgets\ActiveForm;
use app\helpers\IconHelper;
use baluart\tomselect\TomSelectDropDownList;
use yii\bootstrap5\Alert;
use yii\helpers\Html;

/**
 * @var $this yii\web\View
 * @var $model Da\User\Model\Assignment
 * @var $availableItems string[]
 */

?>

<?php if ($model->updated): ?>

    <?= Alert::widget(
        [
            'options' => [
                'class' => 'alert-success',
            ],
            'body' => Yii::t('app', 'Assignments have been updated'),
        ]
    ) ?>

<?php endif ?>

<?php $form = ActiveForm::begin(
    [
        'enableClientValidation' => false,
        'enableAjaxValidation' => false,
    ]
) ?>

<?= Html::activeHiddenInput($model, 'user_id') ?>

<?= $form->field($model, 'items')->widget(
    TomSelectDropDownList::class,
    [
        'items' => $availableItems,
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
