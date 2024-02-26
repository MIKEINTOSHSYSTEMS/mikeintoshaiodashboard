<?php

use app\helpers\ArrayHelper;
use app\helpers\Html;
use app\helpers\IconHelper;
use app\models\FormSubmission;
use yii\helpers\StringHelper;
use yii\helpers\Url;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $stats array */
/* @var $formsByUsers array */
/* @var $formsByStarters array */
/* @var $formsByConversions array */
/* @var $updatedForms array */
/* @var $unreadSubmissions FormSubmission[] */
/* @var $myLastSubmissions FormSubmission[] */
/* @var $data array */
/* @var $locations array */
/* @var $startDate string */
/* @var $endDate string */

$this->title = Yii::t('app', 'Dashboard');

// Chart Labels
$usersLabel = Yii::t('app', 'Users');
$startersLabel = Yii::t('app', 'Starters');
$conversionsLabel = Yii::t('app', 'Conversions');
$submissionsLabel = Yii::t('app', 'Submissions');

// Chart data
$users = ArrayHelper::getColumn($data, 'users');
$users = array_map(function($v){
    return $v ?: 0;
},$users);
$starters = ArrayHelper::getColumn($data, 'starters');
$starters = array_map(function($v){
    return $v ?: 0;
},$starters);
$conversions = ArrayHelper::getColumn($data, 'conversions');
$conversions = array_map(function($v){
    return $v ?: 0;
},$conversions);
$labels = ArrayHelper::getColumn($data, 'labels');

// Total Stats
$totalFormsByUsers = 0;
if (count($formsByUsers) > 0) {
    $totalFormsByUsers = array_sum(ArrayHelper::getColumn($formsByUsers, 'users'));
}
$totalFormsByStarters = 0;
if (count($formsByStarters) > 0) {
    $totalFormsByStarters = array_sum(ArrayHelper::getColumn($formsByStarters, 'starters'));
}
$totalFormsByConversions = 0;
if (count($formsByConversions) > 0) {
    $totalFormsByConversions = array_sum(ArrayHelper::getColumn($formsByConversions, 'conversions'));
}

$options = [
    'users' => $users,
    'starters' => $starters,
    'conversions' => $conversions,
    'labels' => $labels,
    'locations' => $locations,
];

// Pass php options to javascript
$this->registerJs("var options = ".json_encode($options).";", View::POS_BEGIN, 'dashboard-options');
?>

    <?php if (@file_exists(Yii::getAlias('@app/install.php'))): ?>
        <div class="alert-container">
            <div class="container-xl">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <div class="d-flex">
                                <div>
                                    <?= IconHelper::show('info', ['class' => 'alert-icon']) ?>
                                </div>
                                <div>
                                    <h4 class="alert-title"><?= Yii::t('app', 'Warning!') ?></h4>
                                    <div class="text-secondary">
                                        <?= Yii::t(
                                            'app',
                                            "For security reasons you must remove the 'install.php' file from your application directory."
                                        ) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if (@file_exists(Yii::getAlias('@app/easy_forms.sql'))): ?>
        <div class="alert-container">
            <div class="container-xl">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <div class="d-flex">
                                <div>
                                    <?= IconHelper::show('info', ['class' => 'alert-icon']) ?>
                                </div>
                                <div>
                                    <h4 class="alert-title"><?= Yii::t('app', 'Warning!') ?></h4>
                                    <div class="text-secondary">
                                        <?= Yii::t(
                                            'app',
                                            "For security reasons you must remove the 'easy_forms.sql' file from your application directory."
                                        ) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if (Yii::$app->getModule('update')): ?>
        <div class="alert-container">
            <div class="container-xl">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <div class="d-flex">
                                <div>
                                    <?= IconHelper::show('info', ['class' => 'alert-icon']) ?>
                                </div>
                                <div>
                                    <h4 class="alert-title"><?= Yii::t('app', 'Warning!') ?></h4>
                                    <div class="text-secondary">
                                        <?= Yii::t(
                                            'app',
                                            "For security reasons you must disable the application updates. Add-ons features are disabled to avoid unexpected behaviour in the meantime."
                                        ) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        <?= Yii::t('app', 'Overview') ?>
                    </div>
                    <h2 class="page-title">
                        <?= $this->title ?>
                    </h2>
                </div>
                <?php if (Yii::$app->user->can('createForms')) : ?>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                            <span class="d-none d-sm-inline">
                                <a href="<?= Url::to(['/form/create', 'template' => 'basic-contact-form']) ?>" class="btn">
                                    <?= Yii::t('app', 'New contact form') ?>
                                </a>
                            </span>
                        <a href="<?= Url::to(['/form/create']) ?>" class="btn btn-primary d-none d-sm-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                            <?= Yii::t('app', 'Create new form') ?>
                        </a>
                        <a href="<?= Url::to(['/form/create']) ?>" class="btn btn-primary d-sm-none btn-icon" aria-label="<?= Yii::t('app', 'Create new form') ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                        </a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <?= Html::beginForm(['/dashboard'], 'get') ?>
            <div class="row">
                <div class="col-sm-3">
                    <div class="mb-3">
                        <div class="input-icon mb-2">
                            <input class="form-control" placeholder="<?= Yii::t('app', 'Select a date') ?>" id="start_date" name="start_date" value="<?= $startDate ?>"/>
                            <span class="input-icon-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M16 3l0 4" /><path d="M8 3l0 4" /><path d="M4 11l16 0" /><path d="M11 15l1 0" /><path d="M12 15l0 3" /></svg>
                    </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-3">
                        <div class="input-icon mb-2">
                            <input class="form-control" placeholder="<?= Yii::t('app', 'Select a date') ?>" id="end_date" name="end_date" value="<?= $endDate ?>"/>
                            <span class="input-icon-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M16 3l0 4" /><path d="M8 3l0 4" /><path d="M4 11l16 0" /><path d="M11 15l1 0" /><path d="M12 15l0 3" /></svg>
                    </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary"><?= Yii::t('app', 'Go!') ?></button>
                    </div>
                </div>
            </div>
            <?= Html::endForm() ?>
            <div class="row row-deck row-cards">
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader"><?= Yii::t('app', 'Unique Users') ?></div>
                            </div>
                            <div class="h1 mb-3"><?= $stats['form_users'] ?></div>
                            <div class="d-flex mb-2">
                                <div><?= Yii::t('app', 'Starter Rate') ?></div>
                                <div class="ms-auto">
                                    <span class="text-green d-inline-flex align-items-center lh-1">
                                      <?= $stats['start_typing_rate'] ?>%
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                                    </span>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" style="width: <?= $stats['start_typing_rate'] ?>%" role="progressbar" aria-valuenow="<?= $stats['start_typing_rate'] ?>" aria-valuemin="0" aria-valuemax="100" aria-label="<?= $stats['start_typing_rate'] ?>%">
                                    <span class="visually-hidden"><?= $stats['start_typing_rate'] ?>% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader"><?= Yii::t('app', 'Form Starters') ?></div>
                            </div>
                            <div class="h1 mb-3"><?= $stats['form_starters'] ?></div>
                            <div class="d-flex mb-2">
                                <div><?= Yii::t('app', 'Completion Rate') ?></div>
                                <div class="ms-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          <?= $stats['completion_rate'] ?>%
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                        </span>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" style="width: <?= $stats['completion_rate'] ?>%" role="progressbar" aria-valuenow="<?= $stats['completion_rate'] ?>" aria-valuemin="0" aria-valuemax="100" aria-label="<?= $stats['completion_rate'] ?>%">
                                    <span class="visually-hidden"><?= $stats['completion_rate'] ?>% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader"><?= Yii::t('app', 'Conversions') ?></div>
                            </div>
                            <div class="h1 mb-3"><?= $stats['form_conversions'] ?></div>
                            <div class="d-flex mb-2">
                                <div><?= Yii::t('app', 'Conversion Rate') ?></div>
                                <div class="ms-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          <?= $stats['conversion_rate'] ?>%
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                        </span>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success" style="width: <?= $stats['conversion_rate'] ?>%" role="progressbar" aria-valuenow="<?= $stats['conversion_rate'] ?>" aria-valuemin="0" aria-valuemax="100" aria-label="<?= $stats['conversion_rate'] ?>%">
                                    <span class="visually-hidden"><?= $stats['conversion_rate'] ?>% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="subheader"><?= Yii::t('app', 'Abandons') ?></div>
                            </div>
                            <div class="h1 mb-3"><?= $stats['form_abandons'] ?></div>
                            <div class="d-flex mb-2">
                                <div><?= Yii::t('app', 'Abandonment Rate') ?></div>
                                <div class="ms-auto">
                        <span class="text-danger d-inline-flex align-items-center lh-1">
                            <?= $stats['abandonment_rate'] ?>%
                        </span>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger" style="width: <?= $stats['abandonment_rate'] ?>%" role="progressbar" aria-valuenow="<?= $stats['abandonment_rate'] ?>" aria-valuemin="0" aria-valuemax="100" aria-label="<?= $stats['abandonment_rate'] ?>% Complete">
                                    <span class="visually-hidden"><?= $stats['abandonment_rate'] ?>% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row row-cards">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                    <span class="bg-primary text-white avatar">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                                        </svg>
                                    </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <?= $stats['viewed_forms'] ?> <?= Yii::t('app', 'Forms') ?>
                                            </div>
                                            <div class="text-muted">
                                                <?= Yii::t('app', 'Viewed') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                    <span class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M9 11l3 3l8 -8"></path>
                                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path>
                                        </svg>
                                    </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <?= $stats['filled_forms'] ?> <?= Yii::t('app', 'Forms') ?>
                                            </div>
                                            <div class="text-muted">
                                                <?= Yii::t('app', 'Filled') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                    <span class="bg-green text-white avatar">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M10 14l11 -11"></path>
                                            <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5"></path>
                                        </svg>
                                    </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <?= $stats['submitted_forms'] ?> <?= Yii::t('app', 'Forms') ?>
                                            </div>
                                            <div class="text-muted">
                                                <?= Yii::t('app', 'Submitted') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                    <span class="bg-danger text-white avatar">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                            <path d="M12 7v5l3 3"></path>
                                        </svg>
                                    </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <?= $stats['form_conversion_time'] ?>
                                            </div>
                                            <div class="text-muted">
                                                <?= Yii::t('app', 'Average Filling Time') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title"><?= Yii::t('app', 'Performance summary') ?></h3>
                            <div id="chart-performance" class="chart-lg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title"><?= Yii::t('app', 'Locations') ?></h3>
                            <div class="ratio ratio-21x9">
                                <div>
                                    <div id="map-world" class="w-100 h-100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?= Yii::t('app', 'Most Visited Forms') ?></h3>
                        </div>
                        <table class="table card-table table-vcenter">
                            <thead>
                            <tr>
                                <th><?= Yii::t('app', 'Form') ?></th>
                                <th colspan="2"><?= Yii::t('app', 'Visitors') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (count($formsByUsers) === 0): ?>
                                <tr>
                                    <td colspan="3"><?= Yii::t('app', 'No forms') ?></td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($formsByUsers as $form): ?>
                                    <tr>
                                        <td>
                                            <a href="<?= Url::to(['form/analytics', 'id' => $form['id']]) ?>"
                                               title="<?= Html::encode($form['name']) ?>" class="text-reset">
                                                <?= StringHelper::truncateWords(Html::encode($form['name']), 5) ?>
                                            </a>
                                        </td>
                                        <td><?= $form['users'] ?></td>
                                        <td class="w-25">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-primary" style="width: <?= !empty($totalFormsByUsers) ? round($form['users'] / $totalFormsByUsers * 100, 2) : 0 ?>%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?= Yii::t('app', 'Most Starts') ?></h3>
                        </div>
                        <table class="table card-table table-vcenter">
                            <thead>
                            <tr>
                                <th><?= Yii::t('app', 'Form') ?></th>
                                <th colspan="2"><?= Yii::t('app', 'Starts') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (count($formsByStarters) === 0): ?>
                                <tr>
                                    <td colspan="3"><?= Yii::t('app', 'No forms') ?></td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($formsByStarters as $form): ?>
                                    <tr>
                                        <td>
                                            <a href="<?= Url::to(['form/analytics', 'id' => $form['id']]) ?>" class="list-group-item">
                                                <?= Html::encode($form['name']) ?>
                                            </a>
                                        </td>
                                        <td><?= $form['starters'] ?></td>
                                        <td class="w-25">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-azure" style="width: <?= !empty($totalFormsByStarters) ? round($form['starters'] / $totalFormsByStarters * 100, 2) : 0 ?>%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?= Yii::t('app', 'Most Conversions') ?></h3>
                        </div>
                        <table class="table card-table table-vcenter">
                            <thead>
                            <tr>
                                <th><?= Yii::t('app', 'Form') ?></th>
                                <th colspan="2"><?= Yii::t('app', 'Conversions') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (count($formsByConversions) === 0): ?>
                                <tr>
                                    <td colspan="3"><?= Yii::t('app', 'No forms') ?></td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($formsByConversions as $form): ?>
                                    <tr>
                                        <td>
                                            <a href="<?= Url::to(['form/analytics', 'id' => $form['id']]) ?>" class="list-group-item">
                                                <?= Html::encode($form['name']) ?>
                                            </a>
                                        </td>
                                        <td><?= $form['conversions'] ?></td>
                                        <td class="w-25">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" style="width: <?= !empty($totalFormsByConversions) ? round($form['conversions'] / $totalFormsByConversions * 100, 2) : 0 ?>%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?= Yii::t('app', 'Last Updated') ?></h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter">
                                <?php if (count($updatedForms) === 0) : ?>
                                    <tr>
                                        <td colspan="2" class="w-100">
                                            <?= Yii::t('app', 'No data') ?>
                                        </td>
                                    </tr>
                                <?php else: ?>
                                    <?php foreach ($updatedForms as $form) : ?>
                                        <tr>
                                            <td class="w-100">
                                                <a href="<?= Url::to(['form/view', 'id' => $form['id']]) ?>" class="text-reset">
                                                    <?= Html::encode($form['name']) ?>
                                                </a>
                                            </td>
                                            <td class="text-nowrap text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M16 3l0 4" /><path d="M8 3l0 4" /><path d="M4 11l16 0" /><path d="M11 15l1 0" /><path d="M12 15l0 3" /></svg>
                                                <?= Yii::$app->formatter->asDate($form['updated_at'], 'long') ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?= Yii::t('app', 'New Submissions') ?></h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter">
                                <?php if (count($unreadSubmissions) === 0) : ?>
                                    <tr>
                                        <td colspan="2" class="w-100">
                                            <?= Yii::t('app', 'No new submissions') ?>
                                        </td>
                                    </tr>
                                <?php else: ?>
                                    <?php foreach ($unreadSubmissions as $submission) : ?>
                                        <tr>
                                            <td class="w-100">
                                                <a href="<?= Url::to(['/form/submissions', 'id' => $submission->form->id, '#' => 'view/' . $submission->id]) ?>"
                                                   class="text-reset" title="<?= Html::encode($submission->form->name) ?> #<?= $submission->id ?>">
                                                    <?= Html::encode($submission->form->name) ?>
                                                </a>
                                            </td>
                                            <td class="text-nowrap text-muted">
                                                <div class="badge bg-azure-lt">
                                                    <?= Yii::$app->formatter->asRelativeTime($submission->created_at) ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?= Yii::t('app', 'Submit Form') ?></h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter">
                                <?php if (count($myLastSubmissions) === 0) : ?>
                                    <tr>
                                        <td colspan="2" class="w-100">
                                            <?= Yii::t('app', 'No forms') ?>
                                        </td>
                                    </tr>
                                <?php else: ?>
                                    <?php foreach ($myLastSubmissions as $submission) : ?>
                                        <tr>
                                            <td class="w-100">
                                                <a href="<?= Url::to(['/app/form', 'id' => $submission->form->hashId]) ?>" class="text-reset" title="<?= Html::encode($submission->form->name) ?>">
                                                    <?= StringHelper::truncateWords(Html::encode($submission->form->name), 5) ?>
                                                </a>
                                            </td>
                                            <td class="text-nowrap text-muted">
                                                <div class="badge bg-blue-lt">
                                                    <?= Yii::$app->formatter->asRelativeTime($submission->created_at) ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
$script = <<<JS
    document.addEventListener("DOMContentLoaded", function () {
        window.Litepicker && (new Litepicker({
            element: document.getElementById('start_date'),
            buttonText: {
                previousMonth: `<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
                nextMonth: `<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
            },
        }));
    });
    document.addEventListener("DOMContentLoaded", function () {
        window.Litepicker && (new Litepicker({
            element: document.getElementById('end_date'),
            buttonText: {
                previousMonth: `<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
                nextMonth: `<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
            },
        }));
    });
    document.addEventListener("DOMContentLoaded", function () {
        window.ApexCharts && (new ApexCharts(document.getElementById('chart-performance'), {
            chart: {
                type: "bar",
                fontFamily: 'inherit',
                height: 240,
                parentHeightOffset: 0,
                toolbar: {
                    show: false
                },
                animations: {
                    enabled: false
                },
                stacked: true
            },
            plotOptions: {
                bar: {
                    columnWidth: '75%'
                }
            },
            dataLabels: {
                enabled: false
            },
            fill: {
                opacity: 1
            },
            series: [{
                name: "{$usersLabel}",
                data: options.users
            },{
                name: "{$startersLabel}",
                data: options.starters
            },{
                name: "{$conversionsLabel}",
                data: options.conversions
            }],
            tooltip: {
                theme: 'dark'
            },
            grid: {
                padding: {
                    top: -20,
                    right: 0,
                    left: -4,
                    bottom: -4
                },
                strokeDashArray: 4,
                xaxis: {
                    lines: {
                        show: true
                    }
                },
            },
            xaxis: {
                labels: {
                    padding: 0,
                },
                tooltip: {
                    enabled: false
                },
                axisBorder: {
                    show: false,
                },
                type: 'datetime',
            },
            yaxis: {
                labels: {
                    padding: 4
                },
            },
            labels: options.labels,
            colors: [tabler.getColor("primary"), tabler.getColor("primary", 0.8), tabler.getColor("green", 0.8)],
            legend: {
                show: false,
            },
        })).render();
    });
    document.addEventListener("DOMContentLoaded", function() {
        const map = new jsVectorMap({
            selector: '#map-world',
            map: 'world',
            backgroundColor: 'transparent',
            regionStyle: {
                initial: {
                    fill: tabler.getColor('body-bg'),
                    stroke: tabler.getColor('border-color'),
                    strokeWidth: 2
                }
            },
            zoomOnScroll: false,
            zoomButtons: false,
            // -------- Series --------
            visualizeData: {
                scale: [tabler.getColor('bg-surface'), tabler.getColor('primary')],
                values: options.locations
            },
            onRegionTooltipShow(event, tooltip, code) {
                if (typeof options.locations[code] !== 'undefined') {
                    tooltip.text(
                        tooltip.text() + ': ' + options.locations[code] + ' {$submissionsLabel}'
                    )                    
                }
            }
        });
        window.addEventListener("resize", () => {
            map.updateSize();
        });
    });
    
    
JS;

$this->registerJs($script, View::POS_END);
$this->registerJsFile("@web/themes/next/assets/libs/jsvectormap/dist/js/jsvectormap.min.js");
$this->registerJsFile("@web/themes/next/assets/libs/jsvectormap/dist/maps/world.js");
$this->registerJsFile("@web/themes/next/assets/libs/jsvectormap/dist/maps/world-merc.js");
$this->registerJsFile("@web/themes/next/assets/libs/litepicker/dist/litepicker.min.js");
$this->registerJsFile("@web/themes/next/assets/libs/apexcharts/dist/apexcharts.min.js");