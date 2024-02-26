<?php

use app\helpers\IconHelper;
use app\components\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;
use yii\helpers\Html;

$this->title = Yii::t('app', 'Form Tools');

$this->params['breadcrumbs'][] = ['label' => $this->title];

?>
<div class="form-settings">
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="card-title">
                <?= Html::encode($this->title) ?>
            </h3>
        </div>
        <div class="card-body">
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="card-title"><?= Yii::t('app', 'Google reCAPTCHA') ?></h3>
                </div>
                <div class="card-body">
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <?= Html::label(Yii::t('app', 'ReCaptcha Version'), 'app_reCaptchaVersion', ['class' => 'form-label']) ?>
                                <?= Select2::widget([
                                    'name' => 'app_reCaptchaVersion',
                                    'data' => [2 => 'reCAPTCHA v2 - Checkbox', 3 => 'reCAPTCHA v3 - Invisible'],
                                    'value' => Yii::$app->settings->get('app.reCaptchaVersion'),
                                ]); ?>
                                <small class="form-hint mt-2">
                                    <a href='https://www.google.com/recaptcha' target='_blank'>
                                        <?= Yii::t('app', 'Get your reCAPTCHA API keys.') ?>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <?= Html::label(Yii::t('app', 'ReCaptcha Site Key'), 'app_reCaptchaSiteKey', ['class' => 'form-label']) ?>
                                <?= Html::textInput('app_reCaptchaSiteKey', Yii::$app->settings->get('app.reCaptchaSiteKey'), ['class' => 'form-control']) ?>
                                <small class="form-hint"><?= Yii::t('app', 'Used in the HTML code that displays your forms to your users.') ?></small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <?= Html::label(Yii::t('app', 'ReCaptcha Secret Key'), 'app_reCaptchaSecret', ['class' => 'form-label']) ?>
                                <?= Html::textInput('app_reCaptchaSecret', Yii::$app->settings->get('app.reCaptchaSecret'), ['class' => 'form-control']) ?>
                                <small class="form-hint"><?= Yii::t(
                                        'app',
                                        'Used for communications between your site and Google.'
                                    ) ?>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <?= Html::submitButton(
                                    IconHelper::show('check')
                                    . ' '
                                    . Yii::t('app', 'Save'), ['class' => 'btn btn-primary']) ?>
                            </div>
                        </div>
                    </div>
                    <?= Html::hiddenInput('action', 'recaptcha'); ?>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="card-footer">
                    <p class="form-hint">
                        <?= Yii::t('app', 'To start using Google reCAPTCHA in your forms, you need to enter an API key pair for your site.') ?>
                    </p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="card-title"><?= Yii::t('app', 'Browser Geolocation') ?></h3>
                </div>
                <div class="card-body">
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <?= Html::label(Yii::t('app', 'Browser Geolocation'), 'app_browserGeolocation', ['class' => 'form-label']) ?>
                                <?= SwitchInput::widget([
                                    'name'=>'app_browserGeolocation',
                                    'value' => (boolean) Yii::$app->settings->get('app.browserGeolocation'),
                                ]) ?>
                                <small class="form-hint">
                                    <?= Yii::t(
                                        'app',
                                        'Capture geographic coordinates with consent.'
                                    ) ?>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <?= Html::label(Yii::t('app', 'Geocoding Provider'), 'app_geocodingProvider', ['class' => 'form-label']) ?>
                                <?= Select2::widget([
                                    'name' => 'app_geocodingProvider',
                                    'data' => ['google_geocoding' => 'Google Geocoding API'],
                                    'options' => ['placeholder' => 'Select a provider and enter its API Key...'],
                                    'value' => Yii::$app->settings->get('app.geocodingProvider'),
                                    'pluginOptions' => [
                                        'allowClear' => true
                                    ],
                                ]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <?= Html::label(Yii::t('app', 'Google Geocoding API Key'), 'app_googleGeocodingApiKey', ['class' => 'form-label']) ?>
                                <?= Html::textInput('app_googleGeocodingApiKey', Yii::$app->settings->get('app.googleGeocodingApiKey'), ['class' => 'form-control']) ?>
                                <small class="form-hint">
                                    <a href='https://developers.google.com/maps/documentation/geocoding/start' target='_blank'>
                                        <?= Yii::t('app', 'Get your Google Geocoding API key.') ?>
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <?= Html::submitButton(
                                    IconHelper::show('check')
                                    . ' '
                                    . Yii::t('app', 'Save'), ['class' => 'btn btn-primary']) ?>
                            </div>
                        </div>
                    </div>
                    <?= Html::hiddenInput('action', 'browser-geolocation'); ?>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="card-footer">
                    <div class="form-hint">
                        <?= Yii::t('app', 'We use a Geocoding Provider to convert geographic coordinates into a human-readable address.') ?>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="card-title"><?= Yii::t('app', 'Image Compression') ?></h3>
                </div>
                <div class="card-body">
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <?= Html::label(Yii::t('app', 'Image Compression'), 'app_imageCompression', ['class' => 'form-label']) ?>
                                <?= SwitchInput::widget([
                                    'name'=>'app_imageCompression',
                                    'value' => (boolean) Yii::$app->settings->get('app.imageCompression'),
                                ]) ?>
                                <small class="form-hint">
                                    <?= Yii::t('app', 'Compress uploaded images reducing its quality.') ?>
                                </small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <?= Html::label(Yii::t('app', 'Image Quality'), 'app_imageQuality', ['class' => 'form-label']) ?>
                                <?= Html::textInput('app_imageQuality',
                                        Yii::$app->settings->get('app.imageQuality'),
                                        ['type' => 'number', 'class' => 'form-control', 'step' => 1, 'min' => 0, 'max' => 100, 'pattern' => '\d*']) ?>
                                <small class="form-hint">
                                    <?= Yii::t('app', 'From 0 (worst quality, smaller file) to 100 (best quality, biggest file).') ?>
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <?= Html::submitButton(
                                    IconHelper::show('check')
                                    . ' '
                                    . Yii::t('app', 'Save'), ['class' => 'btn btn-primary']) ?>
                            </div>
                        </div>
                    </div>
                    <?= Html::hiddenInput('action', 'image-compression'); ?>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="card-footer">
                    <div class="form-hint">
                        <?= Yii::t('app', 'Use this tool to reduce file server disk space.') ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?= Yii::t('app', 'Form Builder') ?></h3>
                </div>
                <div class="card-body">
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="col-sm-12" style="padding: 0;">
                        <ul>
                            <li><small><?= Yii::t('app', 'Adds "Alias" feature to added fields before v1.6.6') ?></small></li>
                            <li><small><?= Yii::t('app', 'Adds "Minlength" and "Maxlength" settings to added Text fields before v1.11') ?></small></li>
                            <li><small><?= Yii::t('app', 'Adds "Unique" setting to added Hidden fields before v1.11') ?></small></li>
                            <li><small><?= Yii::t('app', 'Adds "Help Text Placement" setting to added fields before v1.11') ?></small></li>
                            <li><small><?= Yii::t('app', 'Adds "Multiple" option to added File fields before v1.11') ?></small></li>
                            <li><small><?= Yii::t('app', 'Adds "Custom Attributes" option to Form fields before v1.14') ?></small></li>
                        </ul>
                        <div class="form-group mb-3" style="margin-top: 10px; margin-bottom: 0">
                            <?= Html::submitButton(
                                IconHelper::show('refresh')
                                . ' '
                                . Yii::t('app', 'Update Fields'), ['class' => 'btn btn-primary']) ?>
                        </div>
                    </div>
                    <?= Html::hiddenInput('action', 'update-form-fields'); ?>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="card-footer">
                    <div class="form-hint">
                        <?= Yii::t('app', 'Update existing form fields to the get advantages of new features in the Form Builder.') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

