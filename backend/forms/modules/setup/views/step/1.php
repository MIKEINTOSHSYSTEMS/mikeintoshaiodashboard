<?php

use yii\helpers\Html;
use app\helpers\Language;

$this->title = Yii::t('app', 'Activate License');

// Languages array
$languages = Language::supportedLanguages();

?>

<div class="row">
    <div class="col-sm-4">
        <ul class="steps steps-counter steps-vertical mt-5">
            <li class="step-item active"><?= Yii::t('app', 'Activate License') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Verify Requirements') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Set Up Database') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Install App') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Create Admin Account') ?></li>
            <li class="step-item"><?= Yii::t('app', 'Finished') ?></li>
        </ul>
    </div>
    <div class="col-sm-8 form-wrapper">
        <?= Html::tag('h2', Yii::t('app', 'Activate License'), ['class' => 'step-title']) ?>
        <?= Html::beginForm('', 'post', ['class' => 'form-vertical']) ?>
        <div class="form-group mb-3 required-control">
            <?= Html::tag('label', Yii::t('app', 'Purchase Code'), ['class' => 'form-label']) ?>
            <?= Html::textInput('purchaseCode', null, ['class'=>'form-control']) ?>
            <span class="form-hint">
                <a href="https://help.market.envato.com/hc/en-us/articles/202822600" target="_blank">
                    <?= Yii::t('app', 'Where Is My Purchase Code?') ?>
                </a>
            </span>
        </div>
        <div class="form-group mb-3">
            <?= Html::label(Yii::t('app', 'Choose language'), 'language', ['class' => 'form-label']) ?>
            <?= Html::dropDownList('language', Yii::$app->language, $languages, ['class'=>'form-select']) ?>
        </div>
        <div class="form-action mb-3">
            <?= Html::submitButton(Yii::t('app', 'Save and continue'), ['class'=>'btn btn-primary']) ?>
        </div>
        <?= Html::endForm() ?>
    </div>
</div>