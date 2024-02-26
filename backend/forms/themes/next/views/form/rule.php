<?php

use app\helpers\IconHelper;
use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Url;
use app\themes\next\bundles\RulesBuilderBundle;

RulesBuilderBundle::register($this);

/* @var $this yii\web\View */
/* @var $formModel app\models\Form */
/* @var $formDataModel app\models\FormData */

$this->title = $formModel->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Forms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $formModel->name, 'url' => ['view', 'id' => $formModel->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Rule Builder');

// PHP options required by report.js
$options = array(
    "formID" => $formModel->id,
    "endPoint" => Url::to(['rules/index']),
    'createEndPoint' => Url::to(['rules/create']),
    'updateEndPoint' => Url::to(['rules/update']),
    'deleteEndPoint' => Url::to(['rules/delete']),
    'positionEndPoint' => Url::to(['rules/position']),
    "fieldListUrl" => Url::to(['ajax/field-list', 'all' => 0]),
    'hasPrettyUrls' => Yii::$app->urlManager->enablePrettyUrl,
    "_csrf" => Yii::$app->request->getCsrfToken(),
    "variables" => $formDataModel->getRuleVariables(),
    "fields" => $formDataModel->getRuleFields(),
    "steps" => $formDataModel->getRuleSteps(),
    "i18n" => [
        // Conditions and actions
        'all' => Yii::t('app', 'All'),
        'any' => Yii::t('app', 'Any'),
        'none' => Yii::t('app', 'None'),
        'addAction' => Yii::t('app', 'Add action'),
        'addCondition' => Yii::t('app', 'Add condition'),
        'addGroup' => Yii::t('app', 'Add group'),
        'deleteText' => Yii::t('app', 'Delete'),
        'followingActions' => ' ' . Yii::t('app', 'Executes the following actions:'),
        'followingConditions' => ' ' . Yii::t('app', 'of the following conditions:'),
        // Operators
        'contains' => Yii::t('app', 'contains'),
        'is' => Yii::t('app', 'is'),
        'isNot' => Yii::t('app', 'is not'),
        'isChecked' => Yii::t('app', 'is checked'),
        'isNotChecked' => Yii::t('app', 'is not checked'),
        'isPresent' => Yii::t('app', 'is present'),
        'isBlank' => Yii::t('app', 'is blank'),
        'isAfter' => Yii::t('app', 'is after'),
        'isBefore' => Yii::t('app', 'is before'),
        'isEqualTo' => Yii::t('app', 'is equal to'),
        'isGreaterThan' => Yii::t('app', 'is greater than'),
        'isGreaterThanOrEqual' => Yii::t('app', 'is greater than or equal'),
        'isLessThan' => Yii::t('app', 'is less than'),
        'isLessThanOrEqual' => Yii::t('app', 'is less than or equal'),
        'doesNotContains' => Yii::t('app', 'does not contains'),
        'hasAValue' => Yii::t('app', 'has a value'),
        'hasNoValue' => Yii::t('app', 'has no value'),
        'hasOptionSelected' => Yii::t('app', 'has option selected'),
        'hasNoOptionSelected' => Yii::t('app', 'has no option selected'),
        'hasFileSelected' => Yii::t('app', 'has file selected'),
        'hasNoFileSelected' => Yii::t('app', 'has no file selected'),
        'hasBeenClicked' => Yii::t('app', 'has been clicked'),
        'hasBeenSubmitted' => Yii::t('app', 'has been submitted'),
        'startsWith' => Yii::t('app', 'starts with'),
        'endsWith' => Yii::t('app', 'ends with'),
        // App
        'show' => Yii::t('app', 'Show'),
        'hide' => Yii::t('app', 'Hide'),
        'enable' => Yii::t('app', 'Enable'),
        'disable' => Yii::t('app', 'Disable'),
        'math' => Yii::t('app', 'Math'),
        'perform' => Yii::t('app', 'Perform'),
        'addition' => Yii::t('app', 'Addition'),
        'subtraction' => Yii::t('app', 'Subtraction'),
        'multiplication' => Yii::t('app', 'Multiplication'),
        'division' => Yii::t('app', 'Division'),
        'remainder' => Yii::t('app', 'Remainder'),
        'form' => Yii::t('app', 'Form'),
        'field' => Yii::t('app', 'Field'),
        'element' => Yii::t('app', 'Element'),
        'value' => Yii::t('app', 'Value'),
        'of' => Yii::t('app', 'Of'),
        'as' => Yii::t('app', 'As'),
        'toStep' => Yii::t('app', 'To Step'),
        'copy' => Yii::t('app', 'Copy'),
        'from' => Yii::t('app', 'From'),
        'to' => Yii::t('app', 'To'),
        'skip' => Yii::t('app', 'Skip'),
        'andSetResultTo' => Yii::t('app', 'And set result to'),
        'formatNumber' => Yii::t('app', 'Format Number'),
        'formatText' => Yii::t('app', 'Format Text'),
        'evaluate' => Yii::t('app', 'Evaluate'),
        'formula' => Yii::t('app', 'Formula'),
        'action' => Yii::t('app', 'Action'),
        'submit' => Yii::t('app', 'Submit'),
        'reset' => Yii::t('app', 'Reset'),
        'nextStep' => Yii::t('app', 'Next Step'),
        'previousStep' => Yii::t('app', 'Previous Step'),

        // Others
        'orderUpdated' => Yii::t('app', 'Rule order updated!'),
        'areYouSureDeleteItem' => Yii::t('app', 'Are you sure you want to delete this rule? All data related to this item will be deleted. This action cannot be undone.'),
        'name' => Yii::t('app', 'Name / Description'),
    ]
);

// Pass php options to javascript before RulesBuilderBundle
$this->registerJs("var options = ".json_encode($options).";", View::POS_BEGIN, 'rule-options');

?>
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto"><?= Yii::$app->settings->get('name', 'app') ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <?= Yii::t('app', 'Conditional logic has been updated') ?>
        </div>
    </div>
</div>
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
                    <?= Yii::t('app', 'Rule Builder') ?>
                </h2>
                <p class="text-muted">
                    <?= Yii::t('app', 'Add Conditional Logic to your Form') ?>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <?php if (count($formDataModel->getFields()) == 0): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <h3><?= Yii::t('app', 'To create your first rule, you must add fields to your form.') ?></h3>
                        <div class="btn-list">
                            <a href="<?= Url::to(['update', 'id'=>$formModel->id]) ?>" class="btn btn-danger"><?= Yii::t('app', 'Go to Form Builder') ?></a>
                            <a href="<?= Url::to(['index']) ?>" class="btn"><?= Yii::t('app', 'Cancel') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">
                        <?= IconHelper::show('switch-3') ?>
                        <?= Yii::t('app', 'Conditional Rules') ?></h3>
                </div>
                <div class="card-body">
                    <div id="main">
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <script type="text/template" id="actions-template">
            <div class="clearfix" style="margin-bottom: 10px">
                <div class="float-end">
                    <button id="add-rule" class="btn btn-primary">
                        <?= IconHelper::show('plus') ?>
                        <?= Yii::t('app', 'Add rule') ?>
                    </button>
                </div>
            </div>
        </script>
        <script type="text/template" id="rules-template">
        </script>
        <script type="text/template" id="rule-template">
            <div class="row" style="margin-bottom: 15px">
                <div class="col-xs-12">
                    <div class="rule-name" data-rule-name="{{= cid }}name"
                         title="<?= Yii::t('app', 'Type here to give this rule a description. Max length of 255 characters allowed.') ?>"
                         data-placeholder="<?= Yii::t('app', 'Name / Description') ?>">{{= rule.name }}</div>
                    <input type="hidden" id="{{= cid }}name" value="{{- rule.name }}" />
                </div>
            </div>
            <div class="float-end">
                    <span class="badge badge-outline text-yellow me-2 unsaved-changes" style="display: none">
                        <?= Yii::t('app', 'Unsaved Changes') ?>
                    </span>
                <a class="btn btn-success save-rule" title="Save rule">
                    <i class="far fa-check"></i>
                </a>
                <a class="btn btn-primary duplicate-rule" title="Duplicate rule">
                    <i class="far fa-copy"></i>
                </a>
                <a class="btn btn-danger delete-rule" title="Delete rule">
                    <i class="far fa-trash-alt"></i>
                </a>
            </div>
            <form id="{{= cid }}conditions" class="rule-builder-conditions"></form>
            <form id="{{= cid }}actions" class="rule-builder-actions"></form>
            <div class="clearfix">
                <div class="settings">
                    <label class="form-check form-check-inline" for="{{= cid }}opposite">
                        <input id="{{= cid }}opposite" class="form-check-input" type="checkbox"{{ if (rule.opposite) { }} checked{{ } }}>
                        <span class="form-check-label">
                                <?= Yii::t('app', 'Opposite actions') ?>
                            </span>
                    </label>
                    <label class="form-check form-check-inline" for="{{= cid }}status">
                        <input id="{{= cid }}status" class="form-check-input" type="checkbox"{{ if (rule.status) { }} checked{{ } }}>
                        <span class="form-check-label">
                                <?= Yii::t('app', 'Enabled') ?>
                            </span>
                    </label>
                </div>
            </div>
        </script>
    </div>
</div>