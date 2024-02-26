<?php

use app\components\widgets\PageSizeDropDownList;
use yii\helpers\Url;
use app\helpers\Html;
use app\helpers\TimeHelper;
use app\themes\next\bundles\SubmissionsBundle;
use yii\helpers\StringHelper;
use kartik\datecontrol\Module as DateControlModule;
use kartik\dialog\Dialog;

/* @var $this yii\web\View */
/* @var $formModel app\models\Form */
/* @var $formDataModel app\models\FormData */

SubmissionsBundle::register($this);

$this->title = $formModel->name;

// File fields, used to populate DetailView
$fileFields = $formDataModel->getFileLabels();

// All fields, except Buttons and files
$fields = $formDataModel->getFieldsForSubmissions(true);

$totalFields = count($fields);

/** @var kartik\datecontrol\Module $dateControlModule */
$dateControlModule = \Yii::$app->getModule('datecontrol');

// Send Emails
$showEmailButton = $formModel->formConfirmation->send_email
    || $formModel->formEmail->to || $formModel->formEmail->field_to;

// Bulk Actions
$bulkActions = '';
if (Yii::$app->user->can("updateFormSubmissions", ['model' => $formModel])) {
    $bulkActions .=
        '<li class="dropdown-item"><a href="#" id="markAsRead"><i class="far fa-folder-open me-2"></i>'
        . Yii::t('app', 'Mark as Read')
        . '</a></li>'
        . '<li class="dropdown-item"><a href="#" id="markAsUnread"><i class="far fa-folder me-2"></i>'
        . Yii::t('app', 'Mark as Unread')
        . '</a></li>';
}
if (Yii::$app->user->can("deleteFormSubmissions", ['model' => $formModel])) {
    $bulkActions .=
        '<li class="dropdown-item"><a href="#" id="deleteSelectedRows" class="text-danger"><i class="far fa-trash-alt me-2"></i>'
        . Yii::t('app', 'Delete')
        . '</a></li>';
}

// PHP options required by submissions.js
$options = array(
    'fields' => $fields,
    'fileFields' => $fileFields,
    'formName' => Html::encode($formModel->name),
    'hasPrettyUrls' => Yii::$app->urlManager->enablePrettyUrl,
    'endPoint' => Url::to(['submissions/index']),
    'createEndPoint' => Url::to(['submissions/create']),
    'updateEndPoint' => Url::to(['submissions/update']),
    'deleteEndPoint' => Url::to(['submissions/delete']),
    'uploadEndPoint' => Url::to(['submissions/upload', 'id' => $formModel->id]),
    'emailEndPoint' => Url::to(['submissions/email', 'id' => $formModel->id]),
    'addCommentEndPoint' => Url::to(['submissions/add-comment', 'id' => $formModel->id]),
    'deleteCommentEndPoint' => Url::to(['submissions/delete-comment', 'id' => $formModel->id]),
    'deleteFileEndPoint' => Url::to(['submissions/delete-file', 'id' => $formModel->id]),
    'updateAllEndPoint' => Url::to(['submissions/updateall']),
    'deleteAllEndPoint' => Url::to(['submissions/deleteall']),
    'readEndPoint' => Url::to(['submissions/read']),
    'csvEndPoint' => Url::to(['/form/export-submissions', 'id' => $formModel->id, 'format' => 'csv']),
    'xlsxEndPoint' => Url::to(['/form/export-submissions', 'id' => $formModel->id, 'format' => 'xlsx']),
    'attachmentsEndPoint' => Url::to(['/form/export-submissions', 'id' => $formModel->id, 'format' => 'attachments']),
    'formID' => $formModel->id,
    'settingsEndPoint' => Url::to(['ajax/submission-manager-settings']),
    'settings' => Yii::$app->user->preferences->get('GridView.submissions.settings.'.$formModel->id), // User Preference
    'emptyFields' => Yii::$app->user->preferences->get('GridView.submissions.settings.emptyFields'), // User Preference
    'language' => Yii::$app->language,
    'dateFormat' => TimeHelper::convertDateFormat($dateControlModule->getDisplayFormat(DateControlModule::FORMAT_DATE)),
    'dateTimeFormat' => TimeHelper::convertDateFormat($dateControlModule->getDisplayFormat(DateControlModule::FORMAT_DATETIME)),
    'i18n' => [
        'index' => Yii::t('app', 'Index'),
        'submissionDetails' => Yii::t('app', 'Submission Details'),
        'addSubmission' => Yii::t('app', 'Add Submission'),
        'editSubmission' => Yii::t('app', 'Edit Submission'),
        'bulkActions' => Yii::t('app', 'Bulk Actions'),
        'uploadingFile' => Yii::t('app', 'You have files upload pending! Files will be lost!'),
        'errorOnUpdate' => Yii::t('app', 'Sorry, the items haven\'t been updated.'),
        'errorOnDelete' => Yii::t('app', 'Sorry, the items haven\'t been deleted.'),
        'errorOnEmail' => Yii::t('app', 'An error occurred while sending the email message.'),
        'areYouSureDeleteCommentItem' => Yii::t('app', 'Are you sure you want to delete this comment? All data related to this item will be deleted. This action cannot be undone.'),
        'areYouSureDeleteFileItem' => Yii::t('app', 'Are you sure you want to delete this file? All data related to this item will be deleted. This action cannot be undone.'),
        'areYouSureDeleteItem' => Yii::t('app', 'Are you sure you want to delete this submission? All data related to this item will be deleted. This action cannot be undone.'),
        'areYouSureDeleteItems' => Yii::t('app', 'Are you sure you want to delete these submissions? All data related to each item will be deleted. This action cannot be undone.'),
        'areYouSureSendConfirmation' => Yii::t('app', 'Are you sure you want to send the email confirmation? This action cannot be undone.'),
        'areYouSureSendNotification' => Yii::t('app', 'Are you sure you want to send the email notification? This action cannot be undone.'),
        'today' => Yii::t('app', 'Today'),
        'yesterday' => Yii::t('app', 'Yesterday'),
        'last7Days' => Yii::t('app', 'Last 7 Days'),
        'last30Days' => Yii::t('app', 'Last 30 Days'),
        'thisMonth' => Yii::t('app', 'This Month'),
        'lastMonth' => Yii::t('app', 'Last Month'),
        'customRange' => Yii::t('app', 'Custom Range'),
        'apply' => Yii::t('app', 'Apply'),
        'clear' => Yii::t('app', 'Clear'),
    ]
);

// Pass php options to javascript, and load before form.settings.js
$this->registerJs("var options = ".json_encode($options).";", $this::POS_BEGIN, 'submissions-options');

// Add print css
$this->registerCssFile('@web/themes/next/assets/css/print.css', [
    'depends' => [SubmissionsBundle::class],
    'media' => 'print',
], 'css-print-submission');

?>

<div class="submissions-page">

    <?= Dialog::widget([
        'options' => [
            'btnCancelClass' => 'btn-default',
            'btnCancelLabel' => '<span class="far fa-ban"></span>' . Yii::t('app', 'Cancel'),
            'btnOKLabel' => '<span class="far fa-check"></span>' . Yii::t('app', 'Ok'),
            'btnOKClass' => 'btn-danger',
        ],
    ]) ?>

    <div id="main">
    </div>

    <script type="text/template" id="navTemplate">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <div class="breadcrumb-wrapper mb-30">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><?= Html::a(Yii::t('app', 'Dashboard'), ['/dashboard']) ?></li>
                                    <li class="breadcrumb-item"><?= Html::a(Yii::t('app', 'Forms'), ['/form']) ?></li>
                                    <li class="breadcrumb-item"><?= Html::a(Html::encode($formModel->name), ['form/view', 'id' => $formModel->id]) ?></li>
                                    {{ if (page !== '<?= Yii::t('app', 'Index') ?>') { }}
                                    <li class="breadcrumb-item"><?= Html::a(
                                            Yii::t('app', 'Submissions'),
                                            ['form/submissions', 'id' => $formModel->id, '#' => '']
                                        ) ?></li>
                                    <li class="breadcrumb-item active"><span>{{= page }}</span></li>
                                    {{ } else { }}
                                    <li class="breadcrumb-item active"><span><?= Yii::t('app', 'Submissions') ?></span></li>
                                    {{ } }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <script type="text/template" id="submissionsTemplate">
        <div class="page-body">
            <div class="container-xl">
                <div class="grid-view">
                    <div class="card border-default">
                        <div class="card-header">
                            <div class="float-end">
                                <div class="summary">
                                    <span id="loading" class="me-2">
                                        <?= Yii::t('app', 'Loading...') ?>
                                    </span>
                                    <?= Yii::t('app', 'Showing {min} - {max} of {totalCount}', [
                                        "min" => "<b id='min'>{{= range.min }}</b>",
                                        "max" => "<b id='max'>{{= range.max }}</b>",
                                        "totalCount" => "<b id='total'>{{= totalCount }}</b>"
                                    ]) ?>
                                    {{ if( totalCount > 1 ) { }}<?= Yii::t('app', 'items') ?>{{ } else { }}<?= Yii::t('app', 'item') ?>{{ } }}.
                                </div>
                            </div>
                            <h5 class="m-0">
                                <?= Html::encode($this->title) ?>
                                <small class="ms-3 text-muted hidden-xs">
                                    <?= Yii::t('app', 'Submissions') ?>
                                </small>
                            </h5>
                        </div>
                        <div class="kv-panel-before">
                            <div class="widget-action-bar">
                                <div class="row">
                                    <div class="col-xs-12 col-md-5">
                                        <div class="input-group">
                                            <div id="range" class="form-control" style="cursor: pointer">
                                                <i class="fal fa-calendar-alt me-2"></i>
                                                <span id="date-range"> </span>
                                                <b class="caret"> </b>
                                            </div>
                                            <button id="filter-link" data-start="" data-end="" class="btn btn-primary" type="button">
                                                <i class="fal fa-filter me-2"></i> <?= Yii::t('app', 'Filter') ?>
                                            </button>
                                            <?php if (Yii::$app->user->can("exportFormSubmissions", ['model' => $formModel])): ?>
                                                <!-- Single button -->
                                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fal fa-download me-2"></i> <?= Yii::t('app', 'Export')?> <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><?= Html::a(Yii::t('app', 'Export as CSV'),
                                                            ['/form/export-submissions', 'id' => $formModel->id, 'format' => 'csv'],
                                                            ['id' => 'csv-link', 'class' => 'dropdown-item']) ?></li>
                                                    <li><?= Html::a(Yii::t('app', 'Export as MS Excel'),
                                                            ['/form/export-submissions', 'id' => $formModel->id, 'format' => 'xlsx'],
                                                            ['id' => 'xlsx-link', 'class' => 'dropdown-item']) ?></li>
                                                    <?php if (count($fileFields) > 0): ?>
                                                        <li><?= Html::a(Yii::t('app', 'Download Attachments'),
                                                                ['/form/export-submissions', 'id' => $formModel->id, 'format' => 'attachments'],
                                                                ['id' => 'attachments-link', 'class' => 'dropdown-item']) ?></li>
                                                    <?php endif; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6 offset-md-1">
                                        <div class="float-end">
                                            <div class="btn-toolbar" role="toolbar">
                                                <div class="input-group me-1">
                                                    <input type="text" class="form-control searchTxt" list="searchList"
                                                           placeholder="<?= Yii::t('app', 'Search') ?>">
                                                    <datalist id="searchList">
                                                        <option value="Status: Confirmed">
                                                        <option value="Status: Unconfirmed">
                                                    </datalist>
                                                    <button class="btn btn-primary searchBtn">
                                                        <i class="far fa-search"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group" role="group">
                                                    <?php if (Yii::$app->user->can("createFormSubmissions")): ?>
                                                        <a href="#/add" class="btn btn-primary">
                                                            <span class="fal fa-plus" title="<?= Yii::t('app', 'Add Submission') ?>"> </span>
                                                        </a>
                                                    <?php endif; ?>
                                                    <button type="button" class="btn btn-primary" id="refreshBtn" title="<?= Yii::t('app', 'Reset') ?>">
                                                        <i class="far fa-sync-alt"></i>
                                                    </button>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-primary btn-for-toggle resizeColumns" title="<?= Yii::t('app', 'Resize Full') ?>">
                                                            <i class="far fa-expand-alt"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-primary btn-for-toggle resizeColumns" title="<?= Yii::t('app', 'Resize Small') ?>">
                                                            <i class="far fa-compress-alt"></i>
                                                        </button>
                                                    </div>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" title="<?= Yii::t('app', 'Show / Hide columns') ?>" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fal fa-table"></i>
                                                        <span class="caret"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-end showHideColumns" role="menu">
                                                            <li class="dropdown-item">
                                                                <div class="form-check">
                                                                    <input type="checkbox" id="check_SubmissionId" class="column" data-key="index" value="2">
                                                                    <label for="check_SubmissionId"><?= Yii::t('app', '#') ?></label>
                                                                </div>
                                                            </li>
                                                            <li class="dropdown-item">
                                                                <div class="form-check">
                                                                    <input type="checkbox" id="check_SubmissionNumber" class="column" data-key="number" value="3">
                                                                    <label for="check_SubmissionNumber">
                                                                        <?= Yii::t('app', 'Submission #') ?>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="dropdown-item">
                                                                <div class="form-check">
                                                                    <input type="checkbox" id="check_Column4" class="column" data-key="id" value="4">
                                                                    <label for="check_Column4">
                                                                        <?= Yii::t('app', 'Submission ID') ?>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="dropdown-item">
                                                                <div class="form-check">
                                                                    <input type="checkbox" id="check_Column5" class="column" data-key="doi_status" value="5">
                                                                    <label for="check_Column5">
                                                                        <?= Yii::t('app', 'DOI Status') ?>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <?php $i = 5; foreach ($fields as $field) : ?>
                                                                <?php ++$i ?>
                                                                <li class="dropdown-item">
                                                                    <div class="form-check">
                                                                        <input type="checkbox" id="check_<?= $field['name'] ?>" class="column" data-key="<?= $field['name'] ?>" value="<?= $i ?>" checked="checked">
                                                                        <label for="check_<?= $field['name'] ?>">
                                                                            <?= StringHelper::truncateWords($field['label'], 20) ?>
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                    <?php if (!empty($bulkActions)): ?>
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                                    title="<?= Yii::t('app', 'Bulk Actions') ?>"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="far fa-check"></i>
                                                                <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                <?= $bulkActions ?>
                                                            </ul>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive kv-grid-container">
                            <table class="table table-striped table-hover table-list">
                                <thead class="kv-table-header submission-grid">
                                <tr>
                                    <th class="check"><input id="allRows" name="allRows" type="checkbox"></th>
                                    <th class="index" title="<?= Yii::t('app', '#') ?>"> </th>
                                    <th class="number" title="<?= Yii::t('app', 'Submission Number') ?>">
                                        <a href="#" class="field-name" data-field-name="number"><?= Yii::t('app', 'Submission #') ?></a>
                                    </th>
                                    <th class="id" title="<?= Yii::t('app', 'Submission ID') ?>">
                                        <a href="#" class="field-name" data-field-name="id"><?= Yii::t('app', 'ID') ?></a>
                                    </th>
                                    <th class="doi_status" data-field-name="doi_status">
                                        <a href="#" class="field-name" data-field-name="doi_status" data-toggle="tooltip" data-placement="top" title="<?= Yii::t('app', 'Double opt-in offers an extra confirmation step to verify each email address added to your contact database.') ?>"><?= Yii::t('app', 'DOI Status') ?></a>
                                    </th>
                                    <?php foreach ($fields as $field) : ?>
                                        <th title="<?= $field['label'] ?>">
                                            <a href="#" class="field-name" data-field-name="<?= $field['name'] ?>"><?= $field['label'] ?></a>
                                        </th>
                                    <?php endforeach; ?>
                                    <th class="created_at">
                                        <a href="#" id="submitted_at"><?= Yii::t('app', 'Submitted') ?></a>
                                    </th>
                                    <th class="actions"><?= Yii::t('app', 'Actions') ?></th>
                                </tr>
                                </thead>
                                <tbody>{{ if( totalCount < 1 ) { }}
                                <tr><td colspan="<?= $totalFields + 5 ?>"><div class="empty">
                                            <?= Yii::t('app', 'No results found.') ?></div></td></tr>{{ } }}
                                </tbody>
                            </table>
                        </div>
                        <div id="pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <script type="text/template" id="submissionTemplate">
        <div class="check table-cell"><input type="checkbox" class="row-checkbox" data-id="{{= id }}"></div>
        <div class="index view table-cell">{{= index }}</div>
        <div class="number view table-cell">{{= number }}</div>
        <div class="id view table-cell">{{= id }}</div>
        <div class="doi_status view table-cell">{{= statusLabel }}</div>
        <?php foreach ($fields as $field) { ?>
            <?php if (substr($field['name'], 0, 16) === "hidden_signature"): ?>
                <div data-key="<?= $field['name'] ?>" class="view table-cell">
                    {{ if(!_.isEmpty(data['<?= $field['name'] ?>'])) { }}
                        {{ var s = JSON.parse(data['<?= $field['name'] ?>']); var i = s['dataURL'] }}
                        <img style="height: 11%; width: 11%" src="{{- i }}">
                    {{ } }}
                </div>
            <?php else: ?>
                <div data-key="<?= $field['name'] ?>" class="view table-cell">{{- data['<?= $field['name'] ?>'] }}</div>
            <?php endif; ?>
        <?php }; ?>
        <div class="created_at view table-cell">{{= created_at }} {{ if ( isNew ) { }} <span class="badge badge-outline text-azure ms-1">
                <?= Yii::t('app', 'New') ?></span> {{ } }}</div>
        <div class="actions table-cell">
            <?php if (Yii::$app->user->can("viewFormSubmissions", ['model' => $formModel])): ?>
            <a href="#" class="view" title="<?= Yii::t('app', 'View') ?>">
                <i class="far fa-eye"></i></a>
            <?php endif; ?>
            <?php if (Yii::$app->user->can("updateFormSubmissions", ['model' => $formModel])): ?>
            <a href="#" class="edit" title="<?= Yii::t('app', 'Update') ?>">
                <i class="far fa-pencil"></i></a>
            <?php endif; ?>
            <?php if (Yii::$app->user->can("deleteFormSubmissions", ['model' => $formModel])): ?>
            <a href="#" class="remove" title="<?= Yii::t('app', 'Delete') ?>">
                <i class="far fa-trash-alt"></i></a>
            <?php endif; ?>
        </div>
    </script>

    <script type="text/template" id="bulkTemplate">
        <div class="well">
            <h5><?= Yii::t('app', 'Do you want to export all your submissions?') ?></h5>
            <p><?= Html::a(
                    '<i class="fal fa-download"></i> ' . Yii::t('app', 'Export as CSV'),
                    ['/form/export-submissions', 'id' => $formModel->id],
                    ['class' => 'btn btn-primary']
                ) ?></p>
        </div>
    </script>

    <script type="text/template" id="formTemplate">
        <div class="page-body">
            <div class="container-xl">
                <div class="grid-view">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-end">
                                <div class="summary">{{= subtitle }}.</div>
                            </div>
                            <h5 class="card-title">{{- form_name }}
                                <small class="ms-3 text-muted hidden-xs">{{= subtitle }}</small>
                            </h5>
                        </div>
                        <div class="kv-panel-before d-print-none">
                            <div class="widget-action-bar">
                                <div class="row">
                                    <div class="col-xs-6 col-md-8">
                                        <a href="#" class="btn btn-default" onclick="App.Router.back(); return false;">
                                            <span class="far fa-long-arrow-left me-2" aria-hidden="true"></span>
                                            <?= Yii::t('app', 'Go Back') ?>
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-4">
                                        <div class="float-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding: 0 24px 24px 24px">
                            <?php if ($formModel->novalidate) : ?>
                                <?= Html::removeScriptTags(str_replace('<form', '<form novalidate="novalidate"', Html::decode(preg_replace('/\{\{.*\}\}/m', '', $formDataModel->html)))); ?>
                            <?php else: ?>
                                <?= Html::removeScriptTags(Html::decode(preg_replace('/\{\{.*\}\}/m', '', $formDataModel->html))); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <script type="text/template" id="detailTemplate">
        <div class="page-body">
            <div class="container-xl">
                <div class="grid-view">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-end">
                                <div class="summary d-none d-sm-block d-print-none"><?= Yii::t('app', 'Showing 1 item.') ?></div>
                            </div>
                            <h5 class="card-title">
                                {{= form_name }}
                                <small class="ms-3 text-muted hidden-xs">
                                    <?= Yii::t('app', 'Submission Details') ?>
                                </small>
                            </h5>
                        </div>
                        <div class="kv-panel-before d-print-none">
                            <div class="widget-action-bar">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#" class="btn btn-default" onclick="App.Router.back(); return false;">
                                            <span class="far fa-long-arrow-left me-2" aria-hidden="true"></span>
                                            <?= Yii::t('app', 'Go Back') ?></a>
                                    </div>
                                    <div class="col-8">
                                        <div class="float-end">
                                            <div class="btn-group" role="group">
                                                <?php if (Yii::$app->user->can("updateFormSubmissions", ['model' => $formModel])): ?>
                                                    <button type="button" class="btn btn-primary edit"
                                                            title="<?= Yii::t('app', 'Edit Submission Details') ?>">
                                                        <i class="far fa-pencil"></i></button>
                                                <?php endif; ?>
                                                <?php if ($showEmailButton): ?>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                                title="<?= Yii::t('app', 'Send Email') ?>"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="far fa-envelope mx-1"></i>
                                                            <span class="caret"> </span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                            <?php if ($formModel->formConfirmation->send_email): ?>
                                                                <li>
                                                                    <a href="#" class="dropdown-item sendConfirmation">
                                                                        <i class="fas fa-paper-plane me-2"></i>
                                                                        <?= Yii::t('app', 'Send Confirmation') ?>
                                                                    </a>
                                                                </li>
                                                            <?php endif; ?>
                                                            <?php if ($formModel->formEmail->to || $formModel->formEmail->field_to): ?>
                                                                <li>
                                                                    <a href="#" class="dropdown-item sendNotification">
                                                                        <i class="far fa-paper-plane me-2"></i>
                                                                        <?= Yii::t('app', 'Send Notification') ?>
                                                                    </a>
                                                                </li>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                <?php endif; ?>
                                                <a href="javascript:window.print()" class="btn btn-primary"
                                                   title="<?= Yii::t('app', 'Print Submission Details') ?>">
                                                    <i class="far fa-print"></i>
                                                </a>
                                            </div>
                                            <?php if (Yii::$app->user->can("deleteFormSubmissions", ['model' => $formModel])): ?>
                                                <button type="button" class="btn btn-danger remove"
                                                        title="<?= Yii::t('app', 'Delete Submission') ?>">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding: 0 24px">
                            <div class="<?php if (Yii::$app->user->can("viewFormSubmissionComments", ["model" => $formModel])): ?>col-sm-8<?php else: ?>col-sm-12<?php endif; ?>">
                                <table class="table table-bordered table-striped table-detail">
                                    <tbody>
                                    <tr>
                                        <th colspan="2">
                                            <div class="float-end emptyFields">
                                                <div class="form-check mb-0">
                                                    <input type="checkbox" id="showEmptyFields" {{= showEmptyFields }} class="form-check-input" />
                                                    <label for="showEmptyFields" class="form-check-label mb-0 fw-normal">
                                                        <?= Yii::t('app', 'Empty Fields') ?>
                                                    </label>
                                                </div>
                                            </div>
                                            <h4 class="mb-0"><?= Yii::t('app', 'Submission Details') ?></h4>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="text-end"><?= Yii::t('app', 'Submission') ?> #</th>
                                        <td>{{= number }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-end"><?= Yii::t('app', 'ID') ?></th>
                                        <td>{{= id }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-end"><?= Yii::t('app', 'DOI Status') ?></th>
                                        <td>{{= statusLabel }}</td>
                                    </tr>
                                    <?php foreach ($fields as $field) : ?>
                                        {{ if (showEmptyFields || (data['<?= $field['name'] ?>'] && (!_.isArray(data['<?= $field['name'] ?>']) || !_.isEmpty(data['<?= $field['name'] ?>'][0]) || (_.size(data['<?= $field['name'] ?>']) > 1) ))) { }}
                                        <?php if (substr($field['name'], 0, 16) === "hidden_signature"): ?>
                                            <tr>
                                                <th class="text-end"><?= $field['label'] ?></th>
                                                <td data-key="<?= $field['name'] ?>">{{ if(!_.isEmpty(data['<?= $field['name'] ?>'])) { }}
                                                    {{ var s = JSON.parse(data['<?= $field['name'] ?>']); var i = s['dataURL'] }}<img src="{{- i }}">{{ } }}</td>
                                            </tr>
                                        <?php else: ?>
                                            <tr>
                                                <th class="text-end"><?= $field['label'] ?></th>
                                                <td data-key="<?= $field['name'] ?>">{{- data['<?= $field['name'] ?>'] }}</td>
                                            </tr>
                                        <?php endif; ?>
                                        {{ } }}
                                    <?php endforeach; ?>

                                    <?php if (Yii::$app->user->can("viewFormSubmissionFiles", ['model' => $formModel])): ?>
                                        <?php if (count($fileFields) > 0): ?>
                                            {{ if( _.size(files) > 0 ) { }}
                                            <tr>
                                                <th colspan="2">
                                                    <h4 class="mb-0"><?= Yii::t('app', 'Files Information') ?></h4>
                                                </th>
                                            </tr>
                                            {{ _.each(files, function(file, i) { }}
                                            <tr data-file="{{= file.id }}">
                                                <th class="text-end file-field-label">{{= file.label }}</th>
                                                <td><a target="_blank" href="{{= file.link }}" title="<?= Yii::t('app', 'Download File') ?>">{{= file.originalName }}</a> ({{= file.extension }}, {{= file.sizeWithUnit }}) <?php if (Yii::$app->user->can("deleteFormSubmissionFiles", ['model' => $formModel])): ?><a class="removeFile" data-id="{{= file.id }}"><i class="far fa-times"></i></a><?php endif; ?></td>
                                            </tr>
                                            {{ }); }}
                                            {{ } }}
                                        <?php endif; ?>
                                    <?php endif; ?>

                                    <tr>
                                        <th colspan="2">
                                            <div class="float-end">
                                                {{ if (sender.consent) { }}
                                                <small class="text-muted" style="margin: 2px 0 0 10px;">
                                                    <span class="far fa-handshake" title="<?= Yii::t('app', 'Collected with user consent') ?>"></span>
                                                </small>
                                                {{ } }}
                                            </div>
                                            <h4 class="mb-0"><?= Yii::t('app', 'Sender Information') ?></h4>
                                        </th>
                                    </tr>
                                    {{ if (sender.country) { }}
                                    <tr>
                                        <th class="text-end"><?= Yii::t('app', 'Country') ?></th>
                                        <td>{{= sender.country }}</td>
                                    </tr>
                                    {{ } }}
                                    {{ if (sender.city) { }}
                                    <tr>
                                        <th class="text-end"><?= Yii::t('app', 'City') ?></th>
                                        <td>{{= sender.city }}</td>
                                    </tr>
                                    {{ } }}
                                    {{ if (sender.longitude && sender.latitude) { }}
                                    <tr>
                                        <th class="text-end"><?= Yii::t('app', 'Location') ?></th>
                                        <td><div id="map"></div></td>
                                    </tr>
                                    {{ } }}
                                    {{ if (sender.latitude) { }}
                                    <tr>
                                        <th class="text-end"><?= Yii::t('app', 'Latitude') ?></th>
                                        <td>{{= sender.latitude }}</td>
                                    </tr>
                                    {{ } }}
                                    {{ if (sender.longitude) { }}
                                    <tr>
                                        <th class="text-end"><?= Yii::t('app', 'Longitude') ?></th>
                                        <td>{{= sender.longitude }}</td>
                                    </tr>
                                    {{ } }}
                                    {{ if (ip) { }}
                                    <tr>
                                        <th class="text-end"><?= Yii::t('app', 'IP Address') ?></th>
                                        <td>{{= ip }}</td>
                                    </tr>
                                    {{ } }}
                                    {{ if (sender.user_agent) { }}
                                    <tr>
                                        <th class="text-end"><?= Yii::t('app', 'Browser') ?></th>
                                        <td>{{= sender.user_agent }}</td>
                                    </tr>
                                    {{ } }}
                                    {{ if (sender.url) { }}
                                    <tr>
                                        <th class="text-end"><?= Yii::t('app', 'Url') ?></th>
                                        <td>{{= sender.url }}</td>
                                    </tr>
                                    {{ } }}
                                    {{ if (sender.referrer) { }}
                                    <tr>
                                        <th class="text-end"><?= Yii::t('app', 'Referrer') ?></th>
                                        <td>{{= sender.referrer }}</td>
                                    </tr>
                                    {{ } }}
                                    <tr>
                                        <th colspan="2">
                                            <h4 class="mb-0"><?= Yii::t('app', 'Additional Information') ?></h4>
                                        </th>
                                    </tr>
                                    {{ if (hashId) { }}
                                    <tr>
                                        <th class="text-end"><?= Yii::t('app', 'Hash ID') ?></th>
                                        <td>{{- hashId }} {{ if (editLink) { }}- <a href="{{- editLink }}" target="_blank" title="<?= Yii::t('app', 'Public Form to Edit This Submission') ?>"><?= Yii::t('app', 'Edit') ?></a>{{ } }}</td>
                                    </tr>
                                    {{ } }}
                                    {{ if(author) { }}
                                    <tr>
                                        <th class="text-end"><?= Yii::t('app', 'Submitted by') ?></th>
                                        <td>{{- author }}</td>
                                    </tr>
                                    {{ } }}
                                    <tr>
                                        <th class="text-end"><?= Yii::t('app', 'Submitted') ?></th>
                                        <td>{{= created_at }}</td>
                                    </tr>
                                    {{ if(lastEditor) { }}
                                    <tr>
                                        <th class="text-end"><?= Yii::t('app', 'Updated by') ?></th>
                                        <td>{{- lastEditor }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-end"><?= Yii::t('app', 'Updated') ?></th>
                                        <td>{{= updated_at }}</td>
                                    </tr>
                                    {{ } }}
                                    </tbody>
                                </table>
                            </div>
                            <?php if (Yii::$app->user->can("viewFormSubmissionComments", ["model" => $formModel])): ?>
                                <div class="col-sm-4">
                                    <div class="mb-3 commentBox">
                                        <div class="titleBox">
                                            <h4 class="mb-0"><?= Yii::t('app', 'Comments') ?></h4>
                                        </div>
                                        <div class="p-3 bg-light actionBox">
                                            <ul id="commentList" class="commentList">
                                                {{ _.each(comments, function(comment, i) { }}
                                                <li class="mb-3 comment{{ if(i%2) { }} alt{{ } }}" data-comment-id="{{= comment.id }}">
                                                    <div class="card commentText">
                                                        <div class="card-status-start bg-info{{ if(i%2) { }} bg-green{{ } }}"></div>
                                                        <div class="card-body">
                                                            <p><span class="author">{{= comment.authorName }}</span> - <span class="date sub-text">{{= comment.submitted }}</span> <?php if (Yii::$app->user->can("deleteFormSubmissionComments", ["model" => $formModel])): ?><a href="#" class="deleteComment" data-id="{{= comment.id }}" title="<?= Yii::t('app', 'Delete Comment') ?>"><i class="far fa-times"></i></a><?php endif; ?></p>
                                                            <p class="">{{= comment.content }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                {{ }); }}
                                            </ul>
                                            <?php if (Yii::$app->user->can("createFormSubmissionComments", ["model" => $formModel])): ?>
                                                <form role="form" class="clearfix">
                                                    <div class="mb-3 form-group">
                                                        <textarea id="commentContent" class="form-control" placeholder="<?= Yii::t('app', 'Your comments')?>"></textarea>
                                                    </div>
                                                    <div>
                                                        <button id="addComment" class="btn btn-success">
                                                            <i class="far fa-check me-2"></i> <?= Yii::t('app', 'Save Comment') ?>
                                                        </button>
                                                    </div>
                                                </form>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <script type="text/template" id="paginationTemplate">
        {{ if( pageCount > 1 ) { }}
        <ul class="pagination">
            <li class="page-item{{ if( currentPage == 1 ) { }} disabled{{ } }}">
                <a href="#" aria-label="<?= Yii::t('app', 'First') ?>" class="page-link first">
                    <i class="far fa-chevron-double-left"></i> <?= Yii::t('app', 'First') ?></a>
            </li>
            <li class="page-item{{ if( !prev ) { }} disabled{{ } }}">
                <a href="#" aria-label="<?= Yii::t('app', 'Previous') ?>" class="page-link prev">
                    <i class="far fa-chevron-left"></i> <?= Yii::t('app', 'Previous') ?></a>
            </li>
            <li class="page-item{{ if( !next ) { }} disabled{{ } }}">
                <a href="#" aria-label="<?= Yii::t('app', 'Next') ?>" class="page-link next"><?= Yii::t('app', 'Next') ?> <i class="far fa-chevron-right"></i></a>
            </li>
            <li class="page-item{{ if( currentPage == pageCount ) { }} disabled{{ } }}">
                <a href="#" aria-label="<?= Yii::t('app', 'Last') ?>" class="page-link last"><?= Yii::t('app', 'Last') ?> <i class="far fa-chevron-double-right"></i></a>
            </li>
        </ul>
        {{ } }}
        <?php
        $selectedSize = Yii::$app->user->preferences->get('GridView.pagination.pageSize');
        echo PageSizeDropDownList::widget(['selectedSize' => $selectedSize]);
        ?>
    </script>

</div>

<?php

$js = <<<SCRIPT

$(function () {
    // Tooltips
    $('body').tooltip({
        selector: '[data-toggle="tooltip"]'
    });
});

SCRIPT;
// Register tooltip/popover initialization javascript
$this->registerJs($js);