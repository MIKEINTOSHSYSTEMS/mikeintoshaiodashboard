<?php

use app\components\widgets\ActiveForm;
use app\components\widgets\ConditionsBuilder;
use app\helpers\ArrayHelper;
use app\helpers\EventHelper;
use app\helpers\Html;
use app\helpers\IconHelper;
use app\helpers\Language;
use app\helpers\SubmissionHelper;
use app\themes\next\bundles\WysiwygBundle;
use baluart\tomselect\TomSelectDropDownList;
use Carbon\Carbon;
use Da\User\Helper\TimezoneHelper;
use kartik\builder\Form;
use kartik\builder\FormGrid;
use yii\helpers\Url;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $form ActiveForm */
/* @var $formModel app\models\Form */
/* @var $formDataModel app\models\FormData */
/* @var $formConfirmationModel app\models\FormConfirmation */
/* @var $formEmailModel app\models\FormEmail */
/* @var $formUIModel app\models\FormUI */
/* @var $formConfirmationRuleModel app\models\FormConfirmationRule */
/* @var $rules app\models\FormConfirmationRule[] */
/* @var $themes array [id => name] of theme models */
/* @var $users array [id => name] of user models */
/* @var $formUsers array [id => name] of user models with access to form model */

WysiwygBundle::register($this);

$this->title = $formModel->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Forms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['view', 'id' => $formModel->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Settings');

/*
 * Data For From
 * If email fields, add to emails data for fill from field (of Form Email)
 */

// Emails of the application
$adminEmail = Yii::$app->settings->get("app.adminEmail");
$supportEmail = Yii::$app->settings->get("app.supportEmail");
$noreplyEmail = Yii::$app->settings->get("app.noreplyEmail");

// Emails to show in the form
$emails = array(
    '' => '', // Allow empty value to display placeholder
    Yii::t('app', 'Emails') => [
        $adminEmail => $adminEmail,
        $supportEmail => $supportEmail,
        $noreplyEmail => $noreplyEmail,
    ]
);

// Email fields of the form
$emailLabels = $formDataModel->getEmailLabels();

$emailFields = array(
    Yii::t('app', 'Email Fields') => $emailLabels,
);

// If the form has email fields, add to config form
if (sizeof($emailLabels) > 0) {
    $emails = array_merge($emails, $emailFields);
}

// Default user limit type
if (empty($formModel->user_limit_type)) {
    $formModel->user_limit_type = $formModel::USER_LIMIT_BY_IP;
}

// Submission editable is OFF by default
if (empty($formModel->submission_editable)) {
    $formModel->submission_editable = $formModel::OFF;
}

// Add saved value to list
if (!$formEmailModel->isNewRecord) {
    // Reply To
    if (!empty($formEmailModel->from)) {
        if (!in_array($formEmailModel->from, array_keys($emailLabels))
            && isset($emails[Yii::t('app', 'Emails')])) {
            $emails[Yii::t('app', 'Emails')][$formEmailModel->from] = $formEmailModel->from;
        }
    }
    // CC
    if (!empty($formEmailModel->cc) && isset($emails[Yii::t('app', 'Emails')])) {
        foreach ($formEmailModel->cc as $cc) {
            if (!in_array($cc, array_keys($emailLabels))) {
               $emails[Yii::t('app', 'Emails')][$cc] = $cc;
            }
        }
    }
    // BCC
    if (!empty($formEmailModel->bcc) && isset($emails[Yii::t('app', 'Emails')])) {
        foreach ($formEmailModel->bcc as $bcc) {
            if (!in_array($bcc, array_keys($emailLabels))) {
                $emails[Yii::t('app', 'Emails')][$bcc] = $bcc;
            }
        }
    }
}

/*
 * Name or Company
 */
$names = ['' => '']; // Allow empty value to display placeholder

if (isset($formModel->formData)) {
    $nameLabels = $formModel->formData->getLabelsWithoutFilesAndButtons();

    $nameFields = array(
        Yii::t('app', 'Fields') => $nameLabels,
    );

    // If form has fields, add to config form
    if (sizeof($nameLabels) > 0) {
        $names = array_merge($names, $nameFields);
    }

    // Add saved value to list
    if (!$formEmailModel->isNewRecord) {
        if (!empty($formEmailModel->from_name)) {
            if (!in_array($formEmailModel->from_name, array_keys($nameLabels))) {
                $names = array_merge($names, array(
                    Yii::t('app', 'Name or Company') => [$formEmailModel->from_name => $formEmailModel->from_name],
                ));
            }
        }
    }
}
/**
 * Form Fields
 */
$fields = $formDataModel->getFieldsForEmail(false, true);

// Default email messages
$isNewEmailNotification = empty($formEmailModel->to) && empty($formEmailModel->message);
$isNewEmailConfirmation = empty($formEmailModel->to) && empty($formEmailModel->message);
if ($isNewEmailConfirmation || $isNewEmailNotification) {
    $placeholders = [];
    foreach ($fields as $value => $label) {
        $parts = explode("_", $value);
        if (isset($parts[1]) && $parts[1] === "signature") {
            $value = $value . " | signature";
        }
        $placeholders[] = [
            'value' => "{{ $value }}",
            'label' => $label,
        ];
    }
    $message = SubmissionHelper::getSubmissionTable($placeholders);
    // Default email confirmation message
    if ($isNewEmailConfirmation) {
        $formConfirmationModel->mail_message = $message;
    }
    // Default email notification message
    if ($isNewEmailNotification) {
        $formEmailModel->message = $message;
    }
}

// Data for Autocomplete
$fieldsForFieldMapping = SubmissionHelper::getFieldsForFieldMapping($fields, true);
$fieldList = [];
foreach ($fieldsForFieldMapping as $name => $label) {
    $fieldList[] = [
        "text" => $label,
        "value" => $name
    ];
}

// UI Widgets
$uiWidgets = Html::uiWidgets();
if (!empty($formModel->ui->js_file)) {
    $jsFiles = array_diff($formModel->ui->js_file, array_keys($uiWidgets));
    foreach ($jsFiles as $jsFile) {
        $uiWidgets[$jsFile] = $jsFile;
    }
}

/**
 * Double Opt-In
 */
if (empty($formConfirmationModel->opt_in)) {
    $formConfirmationModel->opt_in = $formConfirmationModel::OFF;
}

$userListUrl = Url::to(['/ajax/user-list']);

// PHP options required by form.settings.js
$options = [
    "ruleBuilderURL" => Url::to(['/form/rule-builder', 'id' => $formModel->id]),
    "previewURL" => Url::to(['app/preview']),
    "fieldListUrl" => Url::to(['ajax/field-list']),
    'userListUrl' => Url::to(['/ajax/user-list']),
    'hasPrettyUrls' => Yii::$app->urlManager->enablePrettyUrl,
    "formID" => $formModel->id,
    "iframe" => "formI",
    "iHeight" => 250,
    "fieldList" => $fieldList,
    "language" => Carbon::setLocale(substr(Yii::$app->language, 0, 2)), // eg. en-US to en
];

// Pass php options to javascript, and load before form.settings.js
$this->registerJs("var FormSettings = ".json_encode($options).";", $this::POS_BEGIN, 'editor-options');

// Load autocomplete library
$this->registerJsFile('@web/static_files/js/libs/jquery.textcomplete.min.js', ['depends' => WysiwygBundle::class]);

// Load form.settings.js after WysiwygBundle
$this->registerJsFile('@web/themes/next/assets/js/form.settings.min.js', ['depends' => WysiwygBundle::class]);

?>
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <?= $this->render('@app/themes/next/views/partials/_breadcrumbs') ?>
            </div>
        </div>
    </div>
</div>
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    <?= Yii::t('app', 'Form Settings') ?>
                </h2>
                <p class="text-muted">
                    <?= Yii::t('app', 'Manage your form and email notifications here') ?>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <?php $form = ActiveForm::begin(['id' => 'form-settings', 'type' => ActiveForm::TYPE_VERTICAL]); ?>

        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs">
                    <li class="nav-item">
                        <a href="#form_settings" class="nav-link active" data-bs-toggle="tab">
                            <?= Yii::t('app', 'Form Settings') ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#form_confirmation_settings" class="nav-link" data-bs-toggle="tab">
                            <?= Yii::t('app', 'Confirmation Settings') ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#form_notification_settings" class="nav-link" data-bs-toggle="tab">
                            <?= Yii::t('app', 'Notification Settings') ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#form_theme_settings" class="nav-link" data-bs-toggle="tab">
                            <?= Yii::t('app', 'UI Settings') ?>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body mt-3">
                <div class="tab-content">
                    <div class="tab-pane active show" id="form_settings">
                        <?php echo FormGrid::widget([
                            'model' => $formModel,
                            'form' => $form,
                            'autoGenerateColumns' => true,
                            'columnSize' => Form::SIZE_SMALL,
                            'rows' => [
                                [
                                    'attributes' => [
                                        'name' => [
                                            'type'=>Form::INPUT_TEXT,
                                            'options'=>['placeholder'=>Yii::t('app', 'Enter name...'),]],
                                        'slug' => [
                                            'type'=>Form::INPUT_TEXT,
                                            'options'=>['placeholder'=>Yii::t('app', 'Enter slug...'),]],
                                    ],
                                ],
                                [
                                    'columns'=>12,
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'attributes' => [
                                        'language' => [
                                            'type' => Form::INPUT_DROPDOWN_LIST,
                                            'hint' => Yii::t('app', 'Used to display validation messages.'),
                                            'items' => Language::supportedLanguages(),
                                            'options' => [
                                                'class' => 'form-select',
                                            ],
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'text_direction'=>[
                                            'type' => Form::INPUT_DROPDOWN_LIST,
                                            'items' => Language::textDirections(),
                                            'options' => [
                                                'class' => 'form-select',
                                            ],
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'status' => [
                                            'type'=>Form::INPUT_WIDGET,
                                            'widgetClass'=>'\kartik\switchinput\SwitchInput',
                                            'hint'=> Yii::t('app', 'Disable it at any time.'),
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                    ]
                                ],
                                [
                                    'columns' => 12,
                                    'autoGenerateColumns' => false, // override columns setting
                                    'attributes' => [
                                        'is_private' => [
                                            'type'=>Form::INPUT_WIDGET,
                                            'widgetClass'=>'\kartik\switchinput\SwitchInput',
                                            'hint'=> Yii::t('app', 'Will require sign in to access the form.'),
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'created_by'=> Yii::$app->user->can('changeFormsOwner', ['model' => $formModel]) ? [
                                            'type' => Form::INPUT_WIDGET,
                                            'widgetClass' => TomSelectDropDownList::class,
                                            'options' => [
                                                'items' => $users,
                                                'options' => [
                                                    'create' => false,
                                                    'prompt' => Yii::t('app', "Search user..."),
                                                ],
                                                'clientOptions' => [
                                                    'openOnFocus' => false,
                                                    'create' => false,
                                                    'multiple' => false,
                                                    'selectOnTab' => true,
                                                    'onType' => new JsExpression("
                                                        function(str) {
                                                            if (str.length < 3) {
                                                                $(this.dropdown).hide()
                                                            } else {
                                                                $(this.dropdown).show()
                                                            }
                                                        }"),
                                                    'valueField' => 'id',
                                                    'labelField' => 'username',
                                                    'searchField' => 'username',
                                                    'load' => new JsExpression("
                                                        function(query, callback) {
                                                            var url = options.hasPrettyUrls
                                                                ? options.userListUrl + '?q=' + encodeURIComponent(query)
                                                                : options.userListUrl + '&q=' + encodeURIComponent(query);
                                                            fetch(url)
                                                                .then(function (response) {
                                                                    return response.json();
                                                                })
                                                                .then(function (json) {
                                                                    callback(json.items);
                                                                })
                                                                .catch(()=>{
                                                                    callback();
                                                                });
                                                        }"),
                                                ],
                                            ],
                                            'columnOptions' => ['colspan'=>3]
                                        ] : ['type'=>Form::INPUT_RAW,'columnOptions'=>['colspan'=>3]],
                                    ],
                                ],
                                [
                                    'attributes' => [
                                        'message' => [
                                            'type'=>Form::INPUT_TEXTAREA,
                                            'hint'=> Yii::t(
                                                'app',
                                                'Message displayed when form has been disabled.'
                                            ),
                                            'options'=>['placeholder'=> Yii::t('app', 'Enter message...')]],
                                    ],
                                ],
                                [
                                    'attributes' => [
                                        'shared' => Yii::$app->user->can('shareForms', ['model' => $formModel]) ? [
                                            'type'  => Form::INPUT_RAW,
                                            'value' => $form->field($formModel, 'shared')->radioButtonGroup(
                                                \app\models\Form::sharedOptions(),
                                                [
                                                    'itemOptions' => [
                                                        'labelOptions' => ['class' => 'btn btn-primary'],
                                                    ],
                                                ]
                                            ),
                                        ] : ['type'=>Form::INPUT_RAW],
                                    ],
                                ],
                                [
                                    'attributes' => [
                                        'users' => Yii::$app->user->can('shareForms', ['model' => $formModel]) ? [
                                            'type' => Form::INPUT_WIDGET,
                                            'widgetClass' => TomSelectDropDownList::class,
                                            'label' => Yii::t('app', 'Users'),
                                            'hint'=> Yii::t('app', 'These users will have access to this form.'),
                                            'options' => [
                                                'items' => array_diff_key($users, [$formModel->created_by => $formModel->created_by]),
                                                'options' => [
                                                    'multiple' => true,
                                                    'prompt' => Yii::t('app', "Search user..."),
                                                ],
                                                'clientOptions' => [
                                                    'openOnFocus' => false,
                                                    'create' => false,
                                                    'selectOnTab' => true,
                                                    'onType' => new JsExpression("
                                                        function(str) {
                                                            if (str.length < 3) {
                                                                $(this.dropdown).hide()
                                                            } else {
                                                                $(this.dropdown).show()
                                                            }
                                                        }"),
                                                ],
                                            ],
                                            'columnOptions' => ['colspan'=>3]
                                        ] : ['type'=>Form::INPUT_RAW],
                                    ],
                                ],
                                [
                                    'contentBefore'=> Html::tag('legend', Yii::t('app', 'Submission Settings'),
                                        ['class' => 'text-dark-50 fs-2 border-bottom mt-3 mb-3']
                                    ),
                                    'columns'=>12,
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'attributes' => [
                                        'submission_number' => [
                                            'type'=>Form::INPUT_TEXT,
                                            'hint'=> Yii::t(
                                                'app',
                                                'The start number.'
                                            ),
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'submission_number_width' => [
                                            'type'=>Form::INPUT_TEXT,
                                            'hint'=> Yii::t(
                                                'app',
                                                'Adds leading zeros until filling it.'
                                            ),
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'submission_number_prefix' => [
                                            'type'=>Form::INPUT_TEXT,
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'submission_number_suffix' => [
                                            'type'=>Form::INPUT_TEXT,
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                    ]
                                ],
                                [
                                    'columns'=>12,
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'attributes' => [
                                        'save' => [
                                            'type'=>Form::INPUT_WIDGET,
                                            'widgetClass'=>'\kartik\switchinput\SwitchInput',
                                            'hint'=> Yii::t('app', 'Store submitted form data.'),
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'submission_scope' => [
                                            'type'=>Form::INPUT_WIDGET,
                                            'widgetClass'=>'\kartik\switchinput\SwitchInput',
                                            'hint'=> Yii::t('app', 'Manage own submissions only.'),
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'protected_files' => [
                                            'type'=>Form::INPUT_WIDGET,
                                            'widgetClass'=>'\kartik\switchinput\SwitchInput',
                                            'hint'=> Yii::t('app', 'Disable anonymous user access.'),
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                    ],
                                ],
                                [
                                    'columns'=>12,
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'attributes' => [
                                        'submission_timezone' => [
                                            'type' => Form::INPUT_DROPDOWN_LIST,
                                            'items' => ArrayHelper::map(TimezoneHelper::getAll(), 'timezone', 'name'),
                                            'hint'=> Yii::t('app', 'To be displayed in your submissions.'),
                                            'options' => [
                                                'class' => 'form-select',
                                                'prompt' => Yii::t('app', 'Select...'),
                                            ],
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'submission_dateformat' => [
                                            'type'=>Form::INPUT_TEXT,
                                            'options'=>[
                                                'placeholder'=> 'yyyy-MM-dd HH:mm:ss',
                                            ],
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                    ],
                                ],
                                [
                                    'columns' => 12,
                                    'autoGenerateColumns' => false, // override columns setting
                                    'attributes' => [
                                        'submission_editable' => [
                                            'type'  => Form::INPUT_RAW,
                                            'value' => $form->field($formModel, 'submission_editable')->radioButtonGroup(
                                                [
                                                    $formModel::ON => Yii::t('app', 'Yes'),
                                                    $formModel::OFF => Yii::t('app', 'No'),
                                                ],
                                                [
                                                    'itemOptions' => ['labelOptions' => ['class' => 'btn btn-primary']],
                                                ]
                                            )->hint(Yii::t('app', 'Respondents can edit after submit.')),
                                        ],
                                    ],
                                ],
                                [
                                    'columns' => 12,
                                    'autoGenerateColumns' => false, // override columns setting
                                    'rowOptions' => [
                                        'class' => 'submission-editable-settings'
                                    ],
                                    'attributes' => [
                                        'submission_editable_time_length' => [
                                            'type'=>Form::INPUT_TEXT,
                                            'options'=>[
                                                'type' => 'number',
                                                'min' => '1',
                                                'step' => '1',
                                                'placeholder'=>Yii::t('app', 'Enter time length...'),
                                            ],
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'submission_editable_time_unit' => [
                                            'type' => Form::INPUT_DROPDOWN_LIST,
                                            'items' => $formModel->getTimePeriods(['all' => false]),
                                            'options' => [
                                                'class' => 'form-select',
                                                'prompt' => Yii::t('app', 'Select...'),
                                            ],
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                    ],
                                ],
                                [
                                    'columns'=>12,
                                    'attributes' => [
                                        'submission_editable_conditions' => [
                                            'type'  => Form::INPUT_RAW,
                                            'value' =>
                                                '<div class="submission-editable-settings">' .
                                                ConditionsBuilder::widget([
                                                    'id' => 'submission-editable-conditions-builder',
                                                    'label' => Yii::t('app', 'If the Submission meets'),
                                                ]) .
                                                $form
                                                    ->field($formModel, "submission_editable_conditions", ['options' => ['class' => 'd-none']])
                                                    ->hiddenInput() .
                                                '</div>',
                                        ],
                                    ],
                                ],
                                [
                                    'contentBefore'=> Html::tag('legend', Yii::t('app', 'Form Activity & Limits'),
                                        ['class' => 'text-dark-50 fs-2 border-bottom mt-3 mb-3']
                                    ),
                                    'columns'=>12,
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'attributes' => [
                                        'total_limit' => [
                                            'type'  => Form::INPUT_RAW,
                                            'value' => $form->field($formModel, 'total_limit')->radioButtonGroup(
                                                [
                                                    $formModel::ON => Yii::t('app', 'Yes'),
                                                    $formModel::OFF => Yii::t('app', 'No'),
                                                ],
                                                [
                                                    'itemOptions' => ['labelOptions' => ['class' => 'btn btn-primary']],
                                                ]
                                            ),
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'total_limit_action' => [
                                            'type' => Form::INPUT_DROPDOWN_LIST,
                                            'items' => $formModel::totalLimitActions(),
                                            'options' => [
                                                'class' => 'form-select',
                                                'prompt' => Yii::t('app', 'Select...'),
                                            ],
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'user_limit' => [
                                            'type'  => Form::INPUT_RAW,
                                            'value' => $form->field($formModel, 'user_limit')->radioButtonGroup(
                                                [
                                                    $formModel::ON => Yii::t('app', 'Yes'),
                                                    $formModel::OFF => Yii::t('app', 'No'),
                                                ],
                                                [
                                                    'itemOptions' => ['labelOptions' => ['class' => 'btn btn-primary']],
                                                ]
                                            ),
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'user_limit_type' => [
                                            'type' => Form::INPUT_DROPDOWN_LIST,
                                            'items' => $formModel::userLimitOptions(),
                                            'options' => [
                                                'class' => 'form-select',
                                                'prompt' => Yii::t('app', 'Select...'),
                                            ],
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                    ]
                                ],
                                [
                                    'columns'=>12,
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'attributes' => [
                                        'total_limit_number' => ['type'=>Form::INPUT_TEXT,
                                            'options'=>[
                                                'placeholder'=>Yii::t('app', 'Enter the total number...'),
                                            ],
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'total_limit_time_unit' => [
                                            'type' => Form::INPUT_DROPDOWN_LIST,
                                            'items' => $formModel->getTimePeriods(),
                                            'options' => [
                                                'class' => 'form-select',
                                                'prompt' => Yii::t('app', 'Select...'),
                                            ],
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'user_limit_number' => [
                                            'type'=>Form::INPUT_TEXT,
                                            'options'=>[
                                                'placeholder'=>Yii::t('app', 'Enter the max number...'),
                                            ],
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'user_limit_time_unit' => [
                                            'type' => Form::INPUT_DROPDOWN_LIST,
                                            'items' => $formModel->getTimePeriods(),
                                            'options' => [
                                                'class' => 'form-select',
                                                'prompt' => Yii::t('app', 'Select...'),
                                            ],
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                    ],
                                ],
                                [
                                    'attributes' => [
                                        'schedule' => [
                                            'type'  => Form::INPUT_RAW,
                                            'value' => $form->field($formModel, 'schedule')->radioButtonGroup(
                                                [
                                                    $formModel::ON => Yii::t('app', 'Yes'),
                                                    $formModel::OFF => Yii::t('app', 'No'),
                                                ],
                                                [
                                                    'itemOptions' => ['labelOptions' => ['class' => 'btn btn-primary']],
                                                ]
                                            ),
                                        ],
                                    ]
                                ],
                                [
                                    'columns'=>12,
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'attributes' => [
                                        'schedule_start_date' => [
                                            'type' => Form::INPUT_WIDGET,
                                            'widgetClass' => \kartik\datecontrol\DateControl::class,
                                            'options' => [
                                                'type'=>\kartik\datecontrol\DateControl::FORMAT_DATETIME,
                                                'ajaxConversion' => true,
                                                'autoWidget' => true,
                                                'displayTimezone'=> Yii::$app->timeZone,
                                                'options' => [
                                                    'options' => [
                                                        'placeholder' => Yii::t('app','Select start date...'),
                                                    ],
                                                ],
                                            ],
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'schedule_end_date' => [
                                            'type' => Form::INPUT_WIDGET,
                                            'widgetClass' => \kartik\datecontrol\DateControl::class,
                                            'options' => [
                                                'type'=>\kartik\datecontrol\DateControl::FORMAT_DATETIME,
                                                'ajaxConversion' => true,
                                                'autoWidget' => true,
                                                'displayTimezone'=> Yii::$app->timeZone,
                                                'options' => [
                                                    'options' => [
                                                        'placeholder' => Yii::t('app', 'Select end date...'),
                                                    ],
                                                ],
                                            ],
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                    ]
                                ],
                                [
                                    'contentBefore'=> Html::tag('legend', Yii::t('app', 'Form Security'),
                                        ['class' => 'text-dark-50 fs-2 border-bottom mt-3 mb-3']
                                    ),
                                    'columns'=>12,
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'attributes' => [
                                        'use_password' => [
                                            'type'=>Form::INPUT_WIDGET,
                                            'widgetClass'=>'\kartik\switchinput\SwitchInput',
                                            'hint'=> Yii::t('app', 'Enable password protection.'),
                                            'options' => [
                                                'pluginEvents' => [
                                                    "switchChange.bootstrapSwitch" => "function(event, state) {
                                                        if (state) {
                                                            $('.field-form-password').show()
                                                        } else {
                                                            $('.field-form-password').hide()
                                                        }
                                                    }",
                                                ],
                                            ],
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'honeypot' => [
                                            'type'=>Form::INPUT_WIDGET,
                                            'widgetClass'=>'\kartik\switchinput\SwitchInput',
                                            'hint'=> Yii::t('app', 'Adds honeypot field to filter spam.'),
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'authorized_urls' => [
                                            'type'=>Form::INPUT_WIDGET,
                                            'widgetClass'=>'\kartik\switchinput\SwitchInput',
                                            'hint'=> Yii::t('app', 'Restrict access to authorized websites.'),
                                            'options' => [
                                                'pluginEvents' => [
                                                    "switchChange.bootstrapSwitch" => "function(event, state) {
                                                        if (state) {
                                                            $('.field-form-urls').show()
                                                        } else {
                                                            $('.field-form-urls').hide()
                                                        }
                                                    }",
                                                ],
                                            ],
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                        'novalidate' => [
                                            'type'=>Form::INPUT_WIDGET,
                                            'widgetClass'=>'\kartik\switchinput\SwitchInput',
                                            'hint'=> Yii::t('app', 'Disable client side validation.'),
                                            'columnOptions'=>['colspan'=>3],
                                        ],
                                    ],
                                ],
                                [
                                    'columns'=>12,
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'attributes' => [
                                        'password' => [
                                            'type'=>Form::INPUT_TEXT,
                                            'options'=>['placeholder'=>Yii::t('app', 'Enter password...')],
                                            'columnOptions'=>['colspan'=>6],
                                            'hint'=> Yii::t('app', 'Only those who know the password can see your form.'),
                                        ],
                                        'urls' => [
                                            'type'=>Form::INPUT_TEXT,
                                            'options'=>['placeholder'=>Yii::t('app', 'example.com, example.net')],
                                            'columnOptions'=>['colspan'=>6],
                                            'hint'=> Yii::t('app', 'Please, enter a comma separated list of valid domain names.'),
                                        ],
                                    ],
                                ],
                                [
                                    'contentBefore'=> Html::tag('legend', Yii::t('app', 'Other Options'),
                                        ['class' => 'text-dark-50 fs-2 border-bottom mt-3 mb-3']
                                    ),
                                    'attributes' => [
                                        'ip_tracking' => [
                                            'type'=>Form::INPUT_WIDGET,
                                            'widgetClass'=>'\kartik\switchinput\SwitchInput',
                                            'hint'=> Yii::t('app', 'Collect IP addresses.'),
                                        ],
                                        'analytics' => [
                                            'type'=>Form::INPUT_WIDGET,
                                            'widgetClass'=>'\kartik\switchinput\SwitchInput',
                                            'hint'=> Yii::t('app', 'Enable Form Tracking.'),
                                        ],
                                        'autocomplete' => [
                                            'type'=>Form::INPUT_WIDGET,
                                            'widgetClass'=>'\kartik\switchinput\SwitchInput',
                                            'hint'=> Yii::t('app', 'Enable the browser\'s autocomplete.'),
                                        ],
                                        'resume' => [
                                            'type'=>Form::INPUT_WIDGET,
                                            'widgetClass'=>'\kartik\switchinput\SwitchInput',
                                            'hint'=> Yii::t('app', 'Autosave and continue filling later.'),
                                        ],
                                    ],
                                ],
                            ]]);
                        ?>
                    </div>
                    <div class="tab-pane" id="form_confirmation_settings">
                        <?php echo FormGrid::widget([
                            'model' => $formConfirmationModel,
                            'form' => $form,
                            'autoGenerateColumns' => true,
                            'rows' => [
                                [
                                    'attributes' => [
                                        'type' => [
                                            'type'  => Form::INPUT_RAW,
                                            'value' => $form->field($formConfirmationModel, 'type')->radioButtonGroup(
                                                $formConfirmationModel->getTypes(),
                                                [
                                                    'itemOptions' => ['labelOptions' => ['class' => 'btn btn-primary']],
                                                ]
                                            ),
                                        ],
                                    ],
                                ],
                                [
                                    'attributes' => [
                                        'message' => [
                                            'type' => Form::INPUT_TEXTAREA,
                                            'hint'=> Yii::t('app', 'Enter a curly bracket "{" to merge fields.'),
                                            'options' => [
                                                'class' => 'placeholder-autocomplete',
                                                'placeholder'=> Yii::t('app', 'Your Confirmation Message...'),
                                            ]
                                        ],
                                    ],
                                ],
                                [
                                    'attributes' => [
                                        'url' => [
                                            'type'=>Form::INPUT_TEXT,
                                            'options' => [
                                                'class' => 'placeholder-autocomplete',
                                                'placeholder'=> Yii::t('app', 'Enter URL...')
                                            ]
                                        ],
                                        'seconds' => [
                                            'type'  => Form::INPUT_RAW,
                                            'value' => $form
                                                ->field($formConfirmationModel, "seconds", ['addon' => ['append' => ['content'=> Yii::t('app', 'seconds')]]])
                                                ->textInput(['maxlength' => true, 'placeholder' => '3']),
                                        ],
                                    ],
                                ],
                                [
                                    'attributes' => [
                                        'append' => [
                                            'type' => Form::INPUT_CHECKBOX,
                                            'options' => [
                                                'custom' => true,
                                            ],
                                        ],
                                    ],
                                ],
                                [
                                    'attributes' => [
                                        'alias' => [
                                            'type' => Form::INPUT_CHECKBOX,
                                            'options' => [
                                                'custom' => true,
                                            ],
                                        ],
                                    ],
                                ],
                            ]]);
                        ?>

                        <div class="row mt-2 mb-3">
                            <div class="col-sm-12">
                                <label class="form-label">
                                    <?= Yii::t('app', 'Show different messages with conditional logic') ?>
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <div id="formconfirmation-rules" class="card">
                                    <div class="card-header card-header-light">
                                        <span class="me-2">
                                            <?= IconHelper::show('switch-3') ?>
                                        </span>
                                        <?= Yii::t('app', 'Conditional Logic') ?>
                                    </div>
                                    <div class="card-body">
                                        <div class="container-items">
                                            <?php foreach ($rules as $i => $rule): ?>
                                                <fieldset class="item">
                                                    <div class="card mb-3">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="float-end" style="margin-top: 5px">
                                                                        <button type="button" class="copy-item btn btn-icon btn-primary" title="<?= Yii::t('app', 'Copy') ?>">
                                                                            <?= IconHelper::show('copy')?>
                                                                        </button>
                                                                        <button type="button" class="remove-item btn btn-icon btn-danger" title="<?= Yii::t('app', 'Delete') ?>">
                                                                            <?= IconHelper::show('trash')?>
                                                                        </button>
                                                                    </div>
                                                                    <?= $form->field($rule, "[{$i}]action")->radioButtonGroup(
                                                                        $formConfirmationModel->getTypes(),
                                                                        [
                                                                            'itemOptions' => ['labelOptions' => ['class' => 'btn btn-primary']],
                                                                        ]
                                                                    ) ?>
                                                                </div>
                                                            </div>
                                                            <div class="row message">
                                                                <div class="col-sm-12">
                                                                    <?= $form->field($rule, "[{$i}]message")->textarea([
                                                                        'maxlength' => true,
                                                                        'class' => 'placeholder-autocomplete',
                                                                        'placeholder' => Yii::t('app', 'Your Confirmation Message...'),

                                                                    ])->hint(Yii::t('app', 'Enter a curly bracket "{" to merge fields.')) ?>
                                                                </div>
                                                            </div>
                                                            <div class="row url">
                                                                <div class="col-sm-6">
                                                                    <?= $form->field($rule, "[{$i}]url")->textInput([
                                                                        'maxlength' => true,
                                                                        'class' => 'placeholder-autocomplete',
                                                                        'placeholder' => Yii::t('app', 'Enter URL...'),
                                                                    ]) ?>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <?= $form->field($rule, "[{$i}]seconds", [
                                                                        'addon' => ['append' => ['content'=> Yii::t('app', 'seconds')]],
                                                                    ])->textInput([
                                                                        'maxlength' => true,
                                                                        'placeholder' => '3',
                                                                    ]); ?>
                                                                </div>
                                                            </div>
                                                            <div class="row url">
                                                                <div class="col-sm-12">
                                                                    <?= $form->field($rule, "[{$i}]append")->checkbox(['uncheck' => null, 'custom' => true]) ?>
                                                                    <?= $form->field($rule, "[{$i}]alias")->checkbox(['uncheck' => null, 'custom' => true]); ?>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <?= ConditionsBuilder::widget([
                                                                        'label' => Yii::t('app', 'If the Form meets'),
                                                                    ]) ?>
                                                                    <?= $form->field($rule, "[{$i}]conditions", ['options' => ['class' => 'd-none']])->hiddenInput() ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            <?php endforeach; ?>
                                            <fieldset id="itemTemplate" class="d-none">
                                                <div class="card mb-3">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="float-end" style="margin-top: 5px">
                                                                    <button type="button" class="copy-item btn btn-icon btn-primary" title="<?= Yii::t('app', 'Copy') ?>">
                                                                        <?= IconHelper::show('copy')?>
                                                                    </button>
                                                                    <button type="button" class="remove-item btn btn-icon btn-danger" title="<?= Yii::t('app', 'Delete') ?>">
                                                                        <?= IconHelper::show('trash')?>
                                                                    </button>
                                                                </div>
                                                                <?php // $formConfirmationRuleModel->action = FormConfirmationRule::CONFIRM_WITH_MESSAGE; ?>
                                                                <?= $form->field($formConfirmationRuleModel, "action")->radioButtonGroup(
                                                                    $formConfirmationModel->getTypes(),
                                                                    [
                                                                        'unselect' => null,
                                                                        'itemOptions' => [
                                                                            'disabled' => true,
                                                                            'labelOptions' => ['class' => 'btn btn-primary'],
                                                                        ],
                                                                    ]
                                                                ) ?>
                                                            </div>
                                                        </div>
                                                        <div class="row message">
                                                            <div class="col-sm-12">
                                                                <?= $form->field($formConfirmationRuleModel, "message")->textarea([
                                                                    'maxlength' => true,
                                                                    'disabled' => true,
                                                                    'class' => 'placeholder-autocomplete',
                                                                    'placeholder' => Yii::t('app', 'Your Confirmation Message...'),
                                                                ]) ?>
                                                            </div>
                                                        </div>
                                                        <div class="row url" style="display: none">
                                                            <div class="col-sm-6">
                                                                <?= $form->field($formConfirmationRuleModel, "url")->textInput([
                                                                    'maxlength' => true,
                                                                    'disabled' => true,
                                                                    'class' => 'placeholder-autocomplete',
                                                                    'placeholder' => Yii::t('app', 'Enter URL...'),
                                                                ]) ?>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <?= $form->field($formConfirmationRuleModel, "seconds", [
                                                                    'addon' => ['append' => ['content'=> Yii::t('app', 'seconds')]],
                                                                ])->textInput([
                                                                    'maxlength' => true,
                                                                    'disabled' => true,
                                                                    'placeholder' => '3',
                                                                ]); ?>
                                                            </div>
                                                        </div>
                                                        <div class="row url" style="display: none">
                                                            <div class="col-sm-12">
                                                                <?= $form->field($formConfirmationRuleModel, "append")->checkbox(['disabled' => true, 'uncheck' => null, 'custom' => true]) ?>
                                                                <?= $form->field($formConfirmationRuleModel, "alias")->checkbox(['disabled' => true, 'uncheck' => null, 'custom' => true]); ?>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <?= ConditionsBuilder::widget([
                                                                    'label' => Yii::t('app', 'If the Form meets'),
                                                                ]) ?>
                                                                <?= $form->field($formConfirmationRuleModel, "conditions", ['options' => ['class' => 'd-none']])->textInput(['disabled' => true]) ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <button type="button" class="add-item btn btn-primary float-end">
                                            <?= IconHelper::show('plus')?> <?= Yii::t('app', 'Add Rule') ?>
                                        </button>
                                    </div>
                                </div><!-- .card -->
                            </div>
                        </div>

                        <?php echo FormGrid::widget([
                            'model' => $formConfirmationModel,
                            'form' => $form,
                            'autoGenerateColumns' => true,
                            'rows' => [
                                [
                                    'contentBefore'=> Html::tag('legend', Yii::t('app', 'Confirmation Email'),
                                        ['class' => 'text-dark-50 fs-2 border-bottom mt-3 mb-3']
                                    ),
                                    'attributes' => [
                                        'send_email' => [
                                            'type'  => Form::INPUT_RAW,
                                            'value' => $form->field($formConfirmationModel, 'send_email')->radioButtonGroup(
                                                [
                                                    $formConfirmationModel::CONFIRM_BY_EMAIL_ENABLE => Yii::t('app', 'Yes'),
                                                    $formConfirmationModel::CONFIRM_BY_EMAIL_DISABLE => Yii::t('app', 'No'),
                                                ],
                                                [
                                                    'itemOptions' => ['labelOptions' => ['class' => 'btn btn-primary']],
                                                ]
                                            ),
                                        ],
                                    ]
                                ],
                                [
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'columns'=>12,
                                    'attributes' => [
                                        'mail_from_name' => [
                                            'type' => Form::INPUT_TEXT,
                                            'options' => ['placeholder' => Yii::t('app', 'Enter your name or company...')],
                                            'columnOptions' => ['colspan' => 6]
                                        ],
                                        'mail_from' => [
                                            'type' => Form::INPUT_TEXT,
                                            'options' => [
                                                'placeholder' => Yii::t('app', 'Enter your e-mail address...')
                                            ],
                                            'columnOptions' => ['colspan' => 3]
                                        ],
                                    ],
                                ],
                                [
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'columns'=>12,
                                    'attributes' => [
                                        'mail_to' => [
                                            'type'=>Form::INPUT_WIDGET,
                                            'widgetClass'=>'\kartik\select2\Select2',
                                            'hint' => Yii::t(
                                                'app',
                                                'Your form must have an email field to use this feature.'
                                            ),
                                            'options'=>[
                                                'data'=> $emailFields,
                                                'options' => [
                                                    'placeholder' => Yii::t('app', 'Select an e-mail field...'),
                                                    'multiple' => true,
                                                ],
                                                'pluginOptions' => [
                                                    'allowClear' => true,
                                                ],
                                            ],
                                            'columnOptions' => ['colspan' => 6]
                                        ],
                                        'mail_cc' => [
                                            'type'=>Form::INPUT_TEXT,
                                            'options'=>['placeholder'=> Yii::t('app', 'Enter your e-mail address...')],
                                            'columnOptions' => ['colspan' => 3],
                                        ],
                                        'mail_bcc' => [
                                            'type'=>Form::INPUT_TEXT,
                                            'options'=>['placeholder'=> Yii::t('app', 'Enter your e-mail address...')],
                                            'columnOptions' => ['colspan' => 3],
                                        ],
                                    ]
                                ],
                                [
                                    'attributes' => [
                                        'mail_subject' => [
                                            'type' => Form::INPUT_TEXT,
                                            'options' => [
                                                'class' => 'placeholder-autocomplete',
                                                'placeholder' => Yii::t('app', 'Enter subject...')
                                            ]
                                        ],
                                    ],
                                ],
                                [
                                    'attributes' => [
                                        'mail_message' => [
                                            'type'=>Form::INPUT_TEXTAREA,
                                            'hint'=> Html::tag('small', Yii::t('app', 'Allowed HTML Tags:') . ' '
                                                . Html::encode(implode(' ', Html::allowedHtml5Tags()))
                                                . '<br />'
                                                . Yii::t('app', 'Enter a curly bracket "{" to merge fields.')),
                                            'options'=>[
                                                'placeholder'=> Yii::t('app', 'Your Confirmation Message by E-Mail...')
                                            ]
                                        ],
                                    ],
                                ],
                                [
                                    'attributes' => [
                                        'mail_receipt_copy' => [
                                            'type' => Form::INPUT_CHECKBOX,
                                            'hint' => '',
                                            'options' => [
                                                'custom' => true,
                                            ],
                                        ],
                                    ],
                                ],
                                [
                                    'attributes' => [
                                        'mail_attach' => [
                                            'type'=>Form::INPUT_CHECKBOX,
                                            'options' => [
                                                'custom' => true,
                                            ],
                                        ],
                                    ],
                                ],
                            ]]);
                        ?>
                        <?php echo FormGrid::widget([
                            'model' => $formConfirmationModel,
                            'form' => $form,
                            'autoGenerateColumns' => true,
                            'rows' => [
                                [
                                    'contentBefore'=> Html::tag('legend', Yii::t('app', 'Double Opt-In'),
                                        ['class' => 'text-dark-50 fs-2 border-bottom mt-3 mb-3']
                                    ),
                                    'attributes' => [
                                        'opt_in' => [
                                            'type'  => Form::INPUT_RAW,
                                            'value' => $form->field($formConfirmationModel, 'opt_in')->radioButtonGroup(
                                                [
                                                    $formConfirmationModel::ON => Yii::t('app', 'Yes'),
                                                    $formConfirmationModel::OFF => Yii::t('app', 'No'),
                                                ],
                                                [
                                                    'itemOptions' => ['labelOptions' => ['class' => 'btn btn-primary']],
                                                ]
                                            )->hint(Html::tag('small', Yii::t('app', 'You can display the Opt-In link in your E-Mail Message by using the {placeholder} placeholder.', [
                                                'placeholder' => '<code>{{optin_link}}</code>'
                                            ]))),
                                        ],
                                    ],
                                ],
                                [
                                    'attributes' => [
                                        'opt_in_type' => [
                                            'type'  => Form::INPUT_RAW,
                                            'value' => $form->field($formConfirmationModel, 'opt_in_type')->radioButtonGroup(
                                                $formConfirmationModel->getOptInTypes(),
                                                [
                                                    'itemOptions' => ['labelOptions' => ['class' => 'btn btn-primary']],
                                                ]
                                            ),
                                        ],
                                    ],
                                ],
                                [
                                    'attributes' => [
                                        'opt_in_message' => [
                                            'type' => Form::INPUT_TEXTAREA,
                                            'hint'=> Html::tag('small', Yii::t('app', 'You can display the Edit link in your Thank You Message by using the {placeholder} placeholder.', [
                                                'placeholder' => '<code>{{edit_link}}</code>'
                                            ])),
                                            'options' => [
                                                'placeholder' => Yii::t('app', 'Enter message...')
                                            ]
                                        ],
                                    ],
                                ],
                                [
                                    'attributes' => [
                                        'opt_in_url' => [
                                            'type'=>Form::INPUT_TEXT,
                                            'options' => [
                                                'placeholder'=> Yii::t('app', 'Enter URL...')
                                            ]
                                        ],
                                    ],
                                ],
                            ]]);
                        ?>
                    </div>
                    <div class="tab-pane" id="form_notification_settings">
                        <?php echo FormGrid::widget([
                            'model' => $formEmailModel,
                            'form' => $form,
                            'autoGenerateColumns' => true,
                            'rows' => [
                                [
                                    'autoGenerateColumns' => false, // override columns setting
                                    'columns' => 12,
                                    'attributes' => [
                                        'event' => [
                                            'type' => Form::INPUT_WIDGET,
                                            'widgetClass' => TomSelectDropDownList::class,
                                            'hint' => Yii::t(
                                                'app',
                                                'Send email notification each time any of these events occur.'
                                            ),
                                            'options' => [
                                                'items' => EventHelper::supportedFormEvents(['submissions' => true, 'addons' => true]),
                                                'options' => [
                                                    'multiple' => true,
                                                    'placeholder' => Yii::t('app', "Select an event..."),
                                                ],
                                                'clientOptions' => [
                                                    'create' => false,
                                                    'sortField' => 'text',
                                                ]
                                            ],
                                            'columnOptions' => ['colspan'=>6]
                                        ],
                                    ],
                                ],
                                [
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'columns'=>12,
                                    'attributes' => [
                                        'subject' => [
                                            'type' => Form::INPUT_TEXT,
                                            'options' => [
                                                'class' => 'placeholder-autocomplete',
                                                'placeholder' => Yii::t('app', 'Enter subject...'),
                                            ],
                                            'columnOptions' => ['colspan' => 12],
                                        ],
                                    ]
                                ],
                                [
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'columns'=>12,
                                    'attributes' => [
                                        'from_name' => [
                                            'type' => Form::INPUT_WIDGET,
                                            'widgetClass' => TomSelectDropDownList::class,
                                            'options' => [
                                                'items' => $names,
                                                'options' => [
                                                    'placeholder' => Yii::t('app', "Enter name or select a field..."),
                                                ],
                                                'clientOptions' => [
                                                    'create' => true,
                                                    'sortField' => 'text',
                                                ]
                                            ],
                                            'columnOptions' => ['colspan'=>6]
                                        ],
                                        'from' => [
                                            'type' => Form::INPUT_WIDGET,
                                            'widgetClass' => TomSelectDropDownList::class,
                                            'options' => [
                                                'items' => $emails,
                                                'options' => [
                                                    'placeholder' => Yii::t('app', "Enter an email or select a field..."),
                                                ],
                                                'clientOptions' => [
                                                    'create' => true,
                                                    'sortField' => 'text',
                                                ]
                                            ],
                                            'columnOptions' => ['colspan'=>3]
                                        ],
                                    ],
                                ],
                                [
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'columns'=>12,
                                    'attributes' => [
                                        'to' => [
                                            'type'=>Form::INPUT_TEXT,
                                            'hint'=> Yii::t(
                                                'app',
                                                'Notifications will be e-mailed to this address, e.g. "admin@example.com".'
                                            ),
                                            'options'=> ['placeholder'=> Yii::t('app', 'Enter e-mail address...')],
                                            'columnOptions'=>['colspan'=>3]
                                        ],
                                        'field_to' => [
                                            'type' => Form::INPUT_WIDGET,
                                            'widgetClass' => TomSelectDropDownList::class,
                                            'hint' => Yii::t(
                                                'app',
                                                'Your form must have an email field to use this feature.'
                                            ),
                                            'options' => [
                                                'items' => $emailFields,
                                                'options' => [
                                                    'multiple' => true,
                                                    'placeholder' => Yii::t('app', "Select an e-mail field..."),
                                                ],
                                                'clientOptions' => [
                                                    'create' => false,
                                                    'sortField' => 'text',
                                                ]
                                            ],
                                            'columnOptions' => ['colspan' => 3]
                                        ],
                                        'cc' => [
                                            'type' => Form::INPUT_WIDGET,
                                            'widgetClass' => TomSelectDropDownList::class,
                                            'options' => [
                                                'items' => $emails,
                                                'options' => [
                                                    'multiple' => true,
                                                    'placeholder' => Yii::t('app', "Enter an email or select a field..."),
                                                ],
                                                'clientOptions' => [
                                                    'persist' => false,
                                                    'create' => true,
                                                ]
                                            ],
                                            'columnOptions' => ['colspan'=>3]
                                        ],
                                        'bcc' => [
                                            'type' => Form::INPUT_WIDGET,
                                            'widgetClass' => TomSelectDropDownList::class,
                                            'options' => [
                                                'items' => $emails,
                                                'options' => [
                                                    'multiple' => true,
                                                    'placeholder' => Yii::t('app', "Enter an email or select a field..."),
                                                ],
                                                'clientOptions' => [
                                                    'persist' => false,
                                                    'create' => true,
                                                ]
                                            ],
                                            'columnOptions' => ['colspan'=>3]
                                        ],
                                    ],
                                ],
                                [
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'columns'=>12,
                                    'attributes' => [
                                        'type' => [
                                            'columnOptions'=>['colspan'=>6],
                                            'type'=>Form::INPUT_RAW,
                                            'value'=>$form->field($formEmailModel, 'type')->radioButtonGroup(
                                                [
                                                    $formEmailModel::TYPE_ALL => Yii::t('app', 'All Data'),
                                                    $formEmailModel::TYPE_LINK => Yii::t('app', 'Only Link'),
                                                    $formEmailModel::TYPE_MESSAGE => Yii::t('app', 'Custom Message'),
                                                ],
                                                [
                                                    'itemOptions' => ['labelOptions' => ['class' => 'btn btn-primary']],
                                                ]
                                            )->hint(Yii::t(
                                                'app',
                                                'This email may contain all submitted data, a link to saved data or a custom message.'
                                            )),
                                        ],
                                    ],
                                ],
                                [
                                    'attributes' => [
                                        'message' => [
                                            'type'=>Form::INPUT_TEXTAREA,
                                            'hint'=> Html::tag('small', Yii::t('app', 'Allowed HTML Tags:') . ' '
                                                . Html::encode(implode(' ', Html::allowedHtml5Tags()))
                                                . '<br />'
                                                . Yii::t('app', 'Enter a curly bracket "{" to merge fields.')),
                                            'options'=>[
                                                'placeholder'=> Yii::t('app', 'Enter your custom message...')
                                            ]
                                        ],
                                    ],
                                ],
                                [
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'attributes' => [
                                        'receipt_copy' => [
                                            'type'=>Form::INPUT_CHECKBOX,
                                            'hint'=>'',
                                            'options' => [
                                                'custom' => true,
                                            ],
                                        ],
                                    ],
                                ],
                                [
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'attributes' => [
                                        'attach' => [
                                            'type'=>Form::INPUT_CHECKBOX,
                                            'hint'=>'',
                                            'options' => [
                                                'custom' => true,
                                            ],
                                        ],
                                    ],
                                ],
                                [
                                    'autoGenerateColumns'=>false, // override columns setting
                                    'attributes' => [
                                        'plain_text' => [
                                            'type'=>Form::INPUT_CHECKBOX,
                                            'hint'=>'',
                                            'options' => [
                                                'custom' => true,
                                            ],
                                        ],
                                    ],
                                ],
                            ]
                        ]); ?>
                    </div>
                    <div class="tab-pane" id="form_theme_settings">
                        <?php echo FormGrid::widget([
                            'model' => $formUIModel,
                            'form' => $form,
                            'autoGenerateColumns' => true,
                            'columnSize' => Form::SIZE_TINY,
                            'rows' => [[
                                'attributes' => [
                                    'js_file' => [
                                        'type' => Form::INPUT_WIDGET,
                                        'widgetClass' => TomSelectDropDownList::class,
                                        'hint'=> Yii::t('app', 'Select the UI Widget or enter the URL to a JS files to improves the functionality of your form.'),
                                        'options' => [
                                            'items' => $uiWidgets,
                                            'options' => [
                                                'create' => true,
                                                'sortField' => 'text',
                                                'multiple' => true,
                                                'prompt' => Yii::t('app', "Enter URL or select UI Widget..."),
                                            ],
                                            'clientOptions' => [
//                                                'delimiter' => ",",
//                                                'persist' => false,
                                                'create' => new JsExpression("
                                                    function (input) {
                                                        return {
                                                          value: input,
                                                          text: input,
                                                        };
                                                    }"),
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'attributes' => [
                                    'theme_id' => [
                                        'type' => Form::INPUT_WIDGET,
                                        'widgetClass' => TomSelectDropDownList::class,
                                        'label' => Yii::t('app', 'Select a Theme'),
                                        'hint' => Yii::t('app', 'Select the theme that fits best to your form.'),
                                        'options' => [
                                            'items' => $themes,
                                            'options' => [
                                                'prompt' => Yii::t('app', "Select a theme..."),
                                            ],
                                            'clientOptions' => [
                                                'openOnFocus' => true,
                                                'create' => false,
                                                'multiple' => false,
                                                'selectOnTab' => true,
                                                'onItemAdd' => new JsExpression("
                                                    function (value, item) {
                                                        previewSelected(value)
                                                    }"),
                                                'onItemRemove' => new JsExpression("
                                                    function (value, item) {
                                                        previewUnselected()
                                                    }"),
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ]]); ?>

                        <!-- Preview panel -->
                        <div class="card" id="preview-container" style="display:none;">
                            <div class="card-header clearfix">
                                <div class="card-title">
                                    <?= Yii::t('app', 'Preview') ?>
                                </div>
                                <div class="card-actions">
                                    <a id="resizeFull" class="toggleButton" href="javascript:void(0)">
                                        <i class="far fa-expand-alt"></i>
                                    </a>
                                    <a id="resizeSmall" class="toggleButton" style="display: none" href="javascript:void(0)">
                                        <i class="far fa-compress-alt"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body" id="preview">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group" style="text-align: right; margin-top: 30px">
                    <?= Html::submitButton(Yii::t('app', 'Save and continue'), ['name' => 'continue', 'class' => 'btn btn-default', 'style' => 'margin-right: 5px']) ?>
                    <?= Html::submitButton(IconHelper::show('check') . ' ' . Yii::t('app', 'Save'), ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>