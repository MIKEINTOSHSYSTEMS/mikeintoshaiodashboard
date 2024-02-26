<?php

use app\components\widgets\ActiveForm;
use app\helpers\ArrayHelper;
use app\helpers\IconHelper;
use app\helpers\Language;
use app\themes\next\bundles\WysiwygBundle;
use Da\User\Helper\TimezoneHelper;
use kartik\file\FileInput;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;
use yii\helpers\Html;

/**
 * @var TimezoneHelper         $timezoneHelper
 */

WysiwygBundle::register($this);

$logo = Yii::$app->settings->get('app.logo');
$roles = ArrayHelper::map(Yii::$app->authManager->getRoles(), 'name', 'description');
$languages = Language::supportedLanguages();
$timezones = TimezoneHelper::getAll();

$this->title = Yii::t('app', 'Site Settings');
$this->params['breadcrumbs'][] = ['label' => $this->title];

?>
<div class="account-management">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <?= Html::encode($this->title) ?>
            </h3>
        </div>
        <div class="card-body">
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
            <div class="card mb-3">
                <div class="card-body">
                    <div class='row'>
                        <div class='col-sm-6'>
                            <div class="form-group mb-3">
                                <?= Html::label(Yii::t('app', 'Name'), 'app.name', ['class' => 'form-label']) ?>
                                <?= Html::textInput('app_name', Yii::$app->settings->get('app.name'), ['class' => 'form-control']) ?>
                            </div>
                        </div>
                        <div class='col-sm-6'>
                            <div class="form-group mb-3">
                                <div class="form-group mb-3">
                                    <?= Html::label(Yii::t('app', 'Logo'), 'app.name', ['class' => 'form-label']) ?>
                                    <?php $removeLink = !empty($logo) ? '<a href="#" class="file-caption-remove link-danger float-end"><i class="far fa-times"></i></a>' : ''; ?>
                                    <?= FileInput::widget([
                                        'name' => 'logo',
                                        'options' => ['accept' => 'image/*'],
                                        'pluginOptions' => [
                                            'showPreview' => false,
                                            'showCaption' => true,
                                            'showRemove' => true,
                                            'showUpload' => false,
                                            'showCancel' => true,
                                            'initialCaption' => !empty($logo) ? basename($logo) : '',
                                            'layoutTemplates' => [
                                                'caption' => "<div class='file-caption form-control {class}' style='height: 40px; padding: 0 10px; line-height: 40px;' tabindex='500'>
                                                        <input class='file-caption-name' style='width: 65%; border-color: transparent'>
                                                        {$removeLink}
                                                      </div>",
                                            ],
                                        ]
                                    ]); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-sm-12'>
                            <div class="form-group mb-3">
                                <?= Html::label(Yii::t('app', 'Description'), 'app_description', ['class' => 'form-label']) ?>
                                <?= Html::textarea('app_description', Yii::$app->settings->get('app.description'), ['class' => 'form-control', 'id' => 'app_description']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
               <div class="card-body">
                   <?= Html::tag('h3', Yii::t('app', 'Date / Time Formats'), [
                       'class' => 'card-title'
                   ]); ?>
                   <div class="row">
                       <div class='col-sm-4'>
                           <div class="form-group mb-3">
                               <?= Html::label(Yii::t('app', 'Time Format'), 'app_timeFormat', ['class' => 'form-label']) ?>
                               <?= Html::textInput('app_timeFormat', Yii::$app->settings->get('app.timeFormat'), [
                                   'placeholder' => 'php:h:i:s A',
                                   'class' => 'form-control',
                               ]) ?>
                               <?php if (!empty(Yii::$app->settings->get('app.timeFormat'))): ?>
                                   <span class="form-hint">
                                       <?= Yii::$app->formatter->asTime(time(), Yii::$app->settings->get('app.timeFormat')) ?>
                                   </span>
                               <?php endif; ?>
                           </div>
                       </div>
                       <div class='col-sm-4'>
                           <div class="form-group mb-3">
                               <?= Html::label(Yii::t('app', 'Date Format'), 'app_dateFormat', ['class' => 'form-label']) ?>
                               <?= Html::textInput('app_dateFormat', Yii::$app->settings->get('app.dateFormat'), [
                                   'placeholder' => 'php:Y-m-d',
                                   'class' => 'form-control',
                               ]) ?>
                               <?php if (!empty(Yii::$app->settings->get('app.dateFormat'))): ?>
                                   <span class="form-hint">
                                       <?= Yii::$app->formatter->asDate(time(), Yii::$app->settings->get('app.dateFormat')) ?>
                                   </span>
                               <?php endif; ?>
                           </div>
                       </div>
                       <div class='col-sm-4'>
                           <div class="form-group mb-3">
                               <?= Html::label(Yii::t('app', 'Date / Time Format'), 'app_dateTimeFormat', ['class' => 'form-label']) ?>
                               <?= Html::textInput('app_dateTimeFormat', Yii::$app->settings->get('app.dateTimeFormat'), [
                                   'placeholder' => 'php:Y-m-d h:i:s A',
                                   'class' => 'form-control',
                               ]) ?>
                               <?php if (!empty(Yii::$app->settings->get('app.dateTimeFormat'))): ?>
                                   <span class="form-hint">
                                       <?= Yii::$app->formatter->asDatetime(time(), Yii::$app->settings->get('app.dateTimeFormat')) ?>
                                   </span>
                               <?php endif; ?>
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-sm-4">
                           <div class="form-group mb-3">
                               <?php
                               $humanTimeDiff = Yii::$app->settings->get('humanTimeDiff', 'app', null);;
                               $humanTimeDiff = is_null($humanTimeDiff) || $humanTimeDiff === 1;
                               ?>
                               <?= Html::label(Yii::t('app', 'Diff For Humans'), 'app_humanTimeDiff', ['class' => 'form-label']) ?>
                               <?= SwitchInput::widget([
                                   'name'=>'app_humanTimeDiff',
                                   'value' => $humanTimeDiff,
                                   'containerOptions' => ['class' => ''],
                                   'pluginOptions' => [
                                       'onColor' => 'primary',
                                   ],
                               ]) ?>
                               <span class="form-hint"><?= Yii::t('app', 'Diff time in human readable format.') ?></span>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="card-title">
                        <?= Yii::t('app', 'Membership') ?>
                    </h3>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group highlight-addon mb-3">
                                <?= Html::label(Yii::t('app', 'Anyone can register'), 'app_anyoneCanRegister', ['class' => 'form-label']) ?>
                                <?= SwitchInput::widget([
                                    'name'=>'app_anyoneCanRegister',
                                    'value' => (boolean) Yii::$app->settings->get('app.anyoneCanRegister'),
                                    'pluginOptions' => [
                                        'onColor' => 'primary',
                                    ],
                                ]) ?>
                                <span class="form-hint"><?= Yii::t(
                                        'app',
                                        'Enable user registration.'
                                    ) ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group highlight-addon mb-3">
                                <?= Html::label(Yii::t('app', 'Use captcha'), 'app_useCaptcha', ['class' => 'form-label']) ?>
                                <?= SwitchInput::widget(['name'=>'app_useCaptcha', 'value' => (boolean) Yii::$app->settings->get('app.useCaptcha')]) ?>
                                <span class="form-hint"><?= Yii::t(
                                        'app',
                                        'Show captcha in registration form.'
                                    ) ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <?= Html::label(Yii::t('app', 'Default user role'), 'app_defaultUserRole', ['class' => 'form-label']) ?>
                                <?= Select2::widget([
                                    'name' => 'app_defaultUserRole',
                                    'data' => $roles, // Show user role by default,
                                    'value' => Yii::$app->settings->get('app.defaultUserRole'),
                                    'options' => ['placeholder' => Yii::t('app', 'Select a role')],
                                    'pluginOptions' => [
                                        'allowClear' => true
                                    ],
                                ]); ?>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <?= Html::label(Yii::t('app', 'Default User Timezone'), 'app_defaultUserTimezone', ['class' => 'form-label']) ?>
                            <?= Select2::widget([
                                'name' => 'app_defaultUserTimezone',
                                'data' => ArrayHelper::map($timezones, 'timezone', 'name'), // Show user timezones by default,
                                'value' => Yii::$app->settings->get('app.defaultUserTimezone'),
                                'options' => ['placeholder' => Yii::t('app', 'Select a timezone')],
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ]); ?>
                        </div>
                        <div class="col-sm-4">
                            <?= Html::label(Yii::t('app', 'Default User Language'), 'app_defaultUserLanguage', ['class' => 'form-label']) ?>
                            <?= Select2::widget([
                                'name' => 'app_defaultUserLanguage',
                                'data' => $languages, // Show user timezones by default,
                                'value' => Yii::$app->settings->get('app.defaultUserLanguage'),
                                'options' => ['placeholder' => Yii::t('app', 'Select a language')],
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ]); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="card-title">
                        <?= Yii::t('app', 'Log In') ?>
                    </h3>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group highlight-addon mb-3">
                                <?= Html::label(Yii::t('app', 'Unconfirmed Email'), 'app_unconfirmedEmailLogin', ['class' => 'form-label']) ?>
                                <?= SwitchInput::widget([
                                    'name'=>'app_unconfirmedEmailLogin',
                                    'value' => (boolean) Yii::$app->settings->get('app.unconfirmedEmailLogin'),
                                    'pluginOptions' => [
                                        'onColor' => 'primary',
                                    ],
                                ]) ?>
                                <span class="form-hint"><?= Yii::t(
                                        'app',
                                        'Allow users to login with unconfirmed emails.'
                                    ) ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group highlight-addon mb-3">
                                <?= Html::label(Yii::t('app', 'Two Factor Authentication'), 'app_twoFactorAuthentication', ['class' => 'form-label']) ?>
                                <?= SwitchInput::widget([
                                    'name'=>'app_twoFactorAuthentication',
                                    'value' => (boolean) Yii::$app->settings->get('app.twoFactorAuthentication'),
                                    'pluginOptions' => [
                                        'onColor' => 'primary',
                                    ],
                                ]) ?>
                                <span class="form-hint"><?= Yii::t(
                                        'app',
                                        'Allow users to configure their login process with 2FA.'
                                    ) ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <?= Html::label(Yii::t('app', 'Max Password Age'), 'app_maxPasswordAge', ['class' => 'form-label']) ?>
                                <?= Html::input('number', 'app_maxPasswordAge', Yii::$app->settings->get('app.maxPasswordAge'), [
                                    'class' => 'form-control',
                                    'min' => '0',
                                    'step' => '1'
                                ]) ?>
                                <span class="form-hint"><?= Yii::t(
                                        'app',
                                        'Days since last password change. User will be forced to change it.'
                                    ) ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">
                        <?= Yii::t('app', 'API') ?>
                    </h3>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group highlight-addon mb-3">
                                <?= Html::label(Yii::t('app', 'REST API'), 'app_restApi', ['class' => 'form-label']) ?>
                                <?= SwitchInput::widget([
                                    'name'=>'app_restApi',
                                    'value' => (boolean) Yii::$app->settings->get('app.restApi'),
                                    'pluginOptions' => [
                                        'onColor' => 'primary',
                                    ],
                                ]) ?>
                                <span class="form-hint"><?= Yii::t(
                                        'app',
                                        'Access to REST API.'
                                    ) ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group highlight-addon mb-3">
                                <?= Html::label(Yii::t('app', 'API Key'), 'app_restApiKey', ['class' => 'form-label']) ?>
                                <?= SwitchInput::widget([
                                    'name'=>'app_restApiKey',
                                    'value' => (boolean) Yii::$app->settings->get('app.restApiKey'),
                                    'pluginOptions' => [
                                        'onColor' => 'primary',
                                    ],
                                ]) ?>
                                <span class="form-hint"><?= Yii::t(
                                        'app',
                                        'Allow users to generate an API Key.'
                                    ) ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group mb-3" style="margin-top: 20px">
                        <?= Html::submitButton(
                            IconHelper::show('check')
                            . ' '
                            . Yii::t('app', 'Save'), ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
ActiveForm::end();

$url = \yii\helpers\Url::to(['/settings/logo-delete'], true);

$script = <<< JS

$( document ).ready(function(){
    // Handlers
    $('body').on('click', '.file-caption-remove', function(e){
        e.preventDefault();
        $.ajax({
            url: "{$url}",
            type: "POST",
            dataType: "json",
            contentType: "multipart/form-data",
            processData: false,
            contentType: false,
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                "Accept": "application/json"
            }
        }).done(function(response) {
            window.location.replace(window.location.href);
        });
    });
    /**
     * Show Wysiwyg editor
     */
    if (typeof tinymce !== 'undefined') {
        let options = {
            selector: '#app_description',
            height: 120,
            valid_elements : '*[*]',
            entity_encoding : "raw",
            menubar: false,
            plugins: 'wordcount code paste',
            toolbar: 'styleselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | ltr rtl |  preview code',
            convert_urls: false,
            content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }'
        }
        if ($('body').attr('data-bs-theme') === 'dark') {
            options.skin = 'oxide-dark';
            options.content_css = 'dark';
        }
        tinymce.init(options);
    }
});

JS;

$this->registerJs($script, $this::POS_END);
?>