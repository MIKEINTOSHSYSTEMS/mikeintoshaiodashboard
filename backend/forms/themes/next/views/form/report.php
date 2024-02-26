<?php

use app\themes\next\bundles\SubmissionsReportBundle;
use kartik\datecontrol\DateControl;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $formModel app\models\Form */
/* @var $formDataModel app\models\FormData */
/* @var $charts array */

SubmissionsReportBundle::register($this);

$this->title = $formModel->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Forms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $formModel->name, 'url' => ['view', 'id' => $formModel->id]];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Submissions'),
    'url' => ['submissions', 'id' => $formModel->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Report');

// Form Labels
$formLabels = $formDataModel->getLabelsForReport();

// Home URL$
$homeUrl = Url::home(true);

// Pass php options to javascript before SubmissionsReportBundle
$options = array(
    "endPoint" => Url::to(['ajax/report', 'id' => $formModel->id]),
    "charts" => $charts,
    "_csrf" => Yii::$app->request->getCsrfToken(),
    "i18n" => [
        'success' => Yii::t('app', 'Success!'),
        'error' => Yii::t('app', 'Error!'),
        'errorMessage' => Yii::t('app', 'Please write the Chart Title.'),
        'updatedMessage' => Yii::t('app', 'The report has been successfully updated.'),
        'errorOnUpdate' => Yii::t('app', 'The report can\'t be saved. Please retry later.'),
    ]
);

$this->registerJs("var options = ".json_encode($options).";", $this::POS_BEGIN, 'report-options');

// Add print css
$this->registerCssFile('@web/themes/next/assets/css/print.min.css', [
    'depends' => [SubmissionsReportBundle::class],
    'media' => 'print',
], 'css-print-report');

?>
<div class="report-page">
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
                    <div class="page-pretitle">
                        <?= Yii::t('app', 'Report Builder') ?>
                    </div>
                    <h2 class="page-title">
                        <?= $formModel->name ?>
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-default" data-bs-toggle="modal" data-bs-target="#formModal">
                            <?= Yii::t('app', 'Add chart') ?>
                        </button>
                        <button type="button" class="btn btn-default btn-for-toggle" id="enable">
                            <?= Yii::t('app', 'Edit') ?>
                        </button>
                        <button type="button" class="btn btn-default btn-for-toggle" id="disable" style="display: none">
                            <?= Yii::t('app', 'Stop') ?>
                        </button>
                        <button type="button" class="btn btn-default" id="reset">
                            <?= Yii::t('app', 'Reset') ?>
                        </button>
                        <button type="button" class="btn btn-primary" id="saveReport">
                            <?= Yii::t('app', 'Save report') ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-header d-none d-print-block">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        <?= Yii::t('app', 'Submissions Report') ?>
                    </div>
                    <h2 class="page-title">
                        <?= $formModel->name ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div class="col">
                    <div id="messages"></div>
                </div>
            </div>
            <form id="report-filter" class="row row-cols-lg-auto g-3 align-items-center d-print-none">
                <div class="col-12 mb-3">
                    <label for="from-date" class="visually-hidden"><?= Yii::t('app', 'From') ?>:</label>
                    <?= DateControl::widget([
                        'name' => 'from-date',
                        'id' => 'from-date',
                        'type' => DateControl::FORMAT_DATE,
                        'displayFormat' => 'yyyy-MM-dd',
                        'widgetOptions' => [
                            'options' => [
                                'placeholder' => Yii::t('app', 'From'),
                            ],
                            'pluginOptions' => [
                                'autoclose' => true,
                            ],
                            'pluginEvents' => [
                                "changeDate" => "function(e) { $('#report-filter').submit(); }",
                            ],
                        ]
                    ]); ?>
                </div>
                <div class="col-12 mb-3">
                    <label for="to-date" class="visually-hidden"><?= Yii::t('app', 'To') ?>:</label>
                    <?= DateControl::widget([
                        'name'=>'to-date',
                        'id'=>'to-date',
                        'type'=> DateControl::FORMAT_DATE,
                        'displayFormat' => 'yyyy-MM-dd',
                        'widgetOptions' => [
                            'options' => [
                                'placeholder' => Yii::t('app', 'To'),
                            ],
                            'pluginOptions' => [
                                'autoclose' => true,
                                'todayHighlight' => true,
                            ],
                            'pluginEvents' => [
                                "changeDate" => "function(e) { $('#report-filter').submit(); }",
                            ],
                        ]
                    ]); ?>
                </div>
                <div class="col-12 mb-3">
                    <button type="submit" class="btn btn-primary">
                        <?= Yii::t('app', 'Filter') ?>
                    </button>
                </div>
            </form>

            <div class="row mb-3">
                <div class="col">
                    <div class="data-count">
                        <?= Yii::t(
                            'app',
                            'You\'re visualizing the report of {filterCount} submissions from a total of {totalCount} submissions.',
                            [
                                "filterCount" => "<span class='filter-count'></span>",
                                "totalCount" => "<span class='total-count'></span>"
                            ]
                        ); ?> <a href="#" id="reset-all"><?= Yii::t('app', 'Reset All') ?>.</a>
                    </div>
                </div>
            </div>

            <div class="row g-0">
                <div class="col">
                    <div class="grid-stack"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog"
     aria-labelledby="<?= Yii::t('app', 'Save Chart') ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="m-0"><?= Yii::t('app', 'Chart') ?></h3>
            </div>
            <div class="modal-body">
                <div id="modal-messages"></div>
                <form id="formChart">
                    <div class="form-group required-control mb-3">
                        <label for="chartTitle" class="form-label">
                            <?= Yii::t('app', 'Title') ?>
                        </label>
                        <input type="text" class="form-control" id="chartTitle"
                               placeholder="<?= Yii::t('app', 'Title') ?>">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="chartType"><?= Yii::t('app', 'Type') ?></label>
                        <select class="form-select" id="chartType">
                            <option value="pie"><?= Yii::t('app', 'Pie Chart') ?></option>
                            <option value="donut"><?= Yii::t('app', 'Donut Chart') ?></option>
                            <option value="row"><?= Yii::t('app', 'Row Chart') ?></option>
                            <option value="bar"><?= Yii::t('app', 'Bar Chart') ?></option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="field"><?= Yii::t('app', 'Data Field') ?></label>
                        <select class="form-select" id="field">
                            <?php foreach ($formLabels as $key => $label) { ?>
                                <option value="<?= $key ?>"><?= $label ?></option>
                            <?php }; ?>
                        </select>
                        <small class="form-hint">
                            <?= Yii::t(
                                'app',
                                'Only one chart by data field can be created. If the chart exists, it will be updated.'
                            ) ?>
                        </small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">
                    <?= Yii::t('app', 'Close') ?>
                </button>
                <button type="button" class="btn btn-primary" id="saveChart">
                    <?= Yii::t('app', 'Save') ?>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- widget -->
<script type="text/html" id="widget">
    <div class="chart-container" data-title="{{- title }}" data-type="{{= type }}" data-name="{{= name }}" data-label="{{= label }}">
        <div class="card">
            <div class="card-body">
                <div class="chart-actions">
                    <a href="#" class="me-1 editChart" data-bs-toggle="modal" data-bs-target="#formModal"
                       data-title="{{- title }}" data-type="{{= type }}" data-name="{{= name }}"
                       data-label="{{= label }}" onclick="return false;">
                        <i class="far fa-pencil"></i>
                    </a>
                    <a href="#" class="deleteChart" data-name="{{= name }}"
                       onclick="deleteChart(this); return false;">
                        <i class="far fa-times"></i>
                    </a>
                </div>
                <h3 class="card-title chart-title">{{- title }}</h3>
                <div class="chart" id="{{= name }}"></div>
            </div>
        </div>
    </div>
</script>