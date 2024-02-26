<?php

$this->title = Yii::t('app', 'Import / Export');

$this->params['breadcrumbs'][] = ['label' => $this->title];

use app\components\widgets\ActiveForm;
use app\helpers\IconHelper;
use kartik\select2\Select2;
use yii\helpers\Html;
use kartik\file\FileInput;

/* @var $forms array [id => name] of Form models */

?>
<div class="settings-performance">
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="card-title">
                <?= Html::encode($this->title) ?>
            </h3>
        </div>
        <div class="card-body">
            <p><?= Yii::t('app', 'This tool allows you moving a form from one location to another, or even to backup your data, with just a few clicks.') ?></p>
            <p><strong><?= Yii::t('app', "Use this feature to migrate a Form from one site to another.")?></strong></p>
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="card-title"><?= Yii::t('app', 'Import Forms') ?></h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <p><?= Yii::t('app', "Select the Easy Forms migration file you would like to import. When you click the upload button below, Easy Forms will import the forms.") ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <?= FileInput::widget([
                                    'name' => 'file',
                                    'options' => ['accept' => 'application/json'],
                                    'pluginOptions' => [
                                        'showPreview' => false,
                                        'showCaption' => true,
                                        'showRemove' => true,
                                        'showUpload' => false,
                                        'showCancel' => true,
                                        'layoutTemplates' => [
                                            'caption' => "<div class='file-caption form-control {class}' tabindex='500'>
                                                <span class='file-caption-icon'></span>
                                                <input class='file-caption-name' style='width: 85%; border-color: transparent'>
                                            </div>",
                                        ],
                                    ]
                                ]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3" style="margin-bottom: 0">
                                <?= Html::submitButton(
                                    IconHelper::show('upload')
                                    . ' '
                                    . Yii::t('app', 'Upload Migration File'), ['class' => 'btn btn-primary']) ?>
                            </div>
                            <?= Html::hiddenInput('action', 'import'); ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="form-hint">
                        <?= Yii::t('app', "The migration file has the .json extension.") ?>
                    </p>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
            <?php $form = ActiveForm::begin(); ?>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?= Yii::t('app', 'Export Forms') ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <p><?= Yii::t('app', "Select the forms you would like to migrate. When you click the download button below, Easy Forms will create a JSON file for you to save to your computer. Once you've saved the migration file, you can use the import tool to import the forms.") ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <?= Select2::widget([
                                        'name' => 'forms',
                                        'data' => $forms,
                                        'options' => [
                                            'placeholder' => Yii::t('app', 'Select a form...'),
                                            'multiple' => true,
                                            'allowClear' => true,
                                        ],
                                    ]); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group mb-3" style="margin-bottom: 0">
                                    <?= Html::submitButton(
                                        IconHelper::show('download')
                                        . ' '
                                        . Yii::t('app', 'Download Migration File'), ['class' => 'btn btn-primary']) ?>
                                </div>
                                <?= Html::hiddenInput('action', 'export'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="form-hint">
                            <?= Yii::t('app', "The migration file doesn't include any submission data.") ?>
                        </p>
                    </div>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
