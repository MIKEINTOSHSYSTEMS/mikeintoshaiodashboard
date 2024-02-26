<?php

use app\components\widgets\ActiveForm;
use app\helpers\IconHelper;
use app\helpers\Language;
use Da\User\Helper\TimezoneHelper;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var ActiveForm $form
 * @var app\models\Profile $model
 * @var TimezoneHelper $timezoneHelper
 */

$this->title = Yii::t('app', 'Profile Settings');
$this->params['breadcrumbs'][] = $this->title;
$timezoneHelper = $model->make(TimezoneHelper::class);
$languages = Language::supportedLanguages();
?>
<div class="card mb-3">
    <div class="card-header">
        <h3 class="card-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="card-body">
        <?php $form = ActiveForm::begin(
            [
                'id' => $model->formName(),
                'enableAjaxValidation' => true,
                'enableClientValidation' => false,
                'fieldConfig' => [
                    'horizontalCssClasses' => [
                        'wrapper' => 'col-sm-9',
                    ],
                ],
            ]
        ); ?>

        <div class="row">
            <div class="col-sm-6">
                <?= $form->field($model, 'name') ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'public_email') ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <?= $form->field($model, 'website') ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'location') ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <?= $form
                    ->field($model, 'timezone')
                    ->dropDownList(ArrayHelper::map($timezoneHelper->getAll(), 'timezone', 'name'), ['class' => 'form-select']);
                ?>
            </div>
            <div class="col-sm-6">
                <?= $form
                    ->field($model, 'language')
                    ->dropDownList($languages, ['class' => 'form-select'])->label(Yii::t('app', 'Language')) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <?= $form
                    ->field($model, 'gravatar_email')
                    ->hint(
                        Html::a(
                            Yii::t('app', 'Change your avatar at Gravatar.com'),
                            'https://gravatar.com',
                            ['target' => '_blank']
                        )
                    ) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <?= $form->field($model, 'bio')->textarea() ?>
            </div>
        </div>

        <div class="form-action">
            <?= Html::submitButton(
                IconHelper::show('check') .
                Yii::t('app', 'Save'), ['class' => 'btn btn-primary']
            ) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
