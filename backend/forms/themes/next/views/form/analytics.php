<?php

use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Url;
use app\themes\next\bundles\VisualizationBundle;

/* @var $this yii\web\View */
/* @var $formModel app\models\Form */
/* @var $formDataModel app\models\FormData */

VisualizationBundle::register($this);

$this->title = $formModel->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Forms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $formModel->name, 'url' => ['view', 'id' => $formModel->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Performance Analytics');

// PHP options required by form.analytics.js
$options = array(
    "endPoint" => Url::to(['ajax/analytics', 'id' => $formModel->id]),
    "i18n" => [
        "users" => Yii::t('app', 'Users'),
        "starters" => Yii::t('app', 'Starters'),
        "conversions" => Yii::t('app', 'Conversions'),
        "medianPerDay" => Yii::t('app', 'Median per Day'),
        "minutes" => Yii::t('app', 'minutes'),
        "months" => [
            Yii::t('app', 'Jan'),
            Yii::t('app', 'Feb'),
            Yii::t('app', 'Mar'),
            Yii::t('app', 'Apr'),
            Yii::t('app', 'May'),
            Yii::t('app', 'Jun'),
            Yii::t('app', 'Jul'),
            Yii::t('app', 'Aug'),
            Yii::t('app', 'Sep'),
            Yii::t('app', 'Oct'),
            Yii::t('app', 'Nov'),
            Yii::t('app', 'Dec')
        ],
        "days" => [
            Yii::t('app', 'Sun'),
            Yii::t('app', 'Mon'),
            Yii::t('app', 'Tue'),
            Yii::t('app', 'Wed'),
            Yii::t('app', 'Thu'),
            Yii::t('app', 'Fri'),
            Yii::t('app', 'Sat'),
        ],
    ],
);

// Pass php options to javascript before VisualizationBundle
$this->registerJs("var options = ".json_encode($options).";", View::POS_BEGIN, 'analytics-options');

// Load form.analytics.min.js after VisualizationBundle
$this->registerJsFile('@web/static_files/js/form.analytics.min.js', ['depends' => VisualizationBundle::class]);

?>
<div class="analytics-page">
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
                        <?= Yii::t('app', 'Form Analytics') ?>
                    </div>
                    <h2 class="page-title">
                        <?= Yii::t('app', 'Performance') ?>
                    </h2>
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <?= Html::a(
                            Yii::t('app', 'Submissions Analytics')
                            . ' &raquo;',
                            ['stats', 'id' => $formModel->id],
                            ['title' => Yii::t('app', 'Go to Submissions Analytics'), 'class' => 'text-muted hidden-xs']
                        ) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-12">
                    <div class="data-count" style="float: left;">
                <span>
                    <?= Yii::t(
                        'app',
                        'You\'re visualizing the form performance of {filterCount} days from a total of {totalCount} days.',
                        [
                            "filterCount" => "<span class='filter-count'></span>",
                            "totalCount" => "<span class='total-count'></span>"]
                    ); ?>
                    <a href="#" id="reset-all"><?= Yii::t('app', 'Reset All') ?></a>.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="conversion-rates">
                        <ul>
                            <li>
                                <div>
                                    <span><?= Yii::t('app', 'Users') ?></span>
                                    <h2 id="users-number"></h2>
                                    <span id="fills-rate" class="percentage"></span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <span><?= Yii::t('app', 'Form Starters') ?></span>
                                    <h2 id="fills-number"></h2>
                                    <span id="completion-rate" class="percentage"></span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <span><?= Yii::t('app', 'Conversions') ?></span>
                                    <h2 id="conversions-number"></h2>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <span><?= Yii::t('app', 'Conversion Rate') ?></span>
                                    <h2><span id="conversion-rate"></span>%</h2>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class="col-md-12">
                    <h4><?= Yii::t('app', 'Timeline') ?></h4>
                    <div id="overview">
                        <div id="overview-chart"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h4><?= Yii::t('app', 'By year') ?></h4>
                    <div id="year">
                        <div id="year-chart"></div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h4><?= Yii::t('app', 'By month') ?></h4>
                    <div id="month">
                        <div id="month-chart"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4><?= Yii::t('app', 'By day') ?></h4>
                    <div id="week">
                        <div id="day-of-week-chart"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h4><?= Yii::t('app', 'Conversion Time') ?></h4>
                    <div id="conversion-time">
                        <div id="conversion-time-chart"></div>
                    </div>
                </div>
                <div class="col-md-9">
                    <h4><?= Yii::t('app', 'Conversion Time Average') ?></h4>
                    <div id="conversion-time-line">
                        <div id="conversion-time-line-chart"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h4><?= Yii::t('app', 'Conversion vs Abandonment') ?></h4>
                    <div id="abandonment">
                        <div id="abandonment-chart"></div>
                    </div>
                </div>
                <div class="col-md-9">
                    <h4><?= Yii::t('app', 'Abandonment Rate') ?></h4>
                    <div id="abandonment-time">
                        <div id="abandonment-time-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>