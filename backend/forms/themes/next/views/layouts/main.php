<?php

use app\components\widgets\Alert;
use app\components\widgets\SessionTimeout;
use app\helpers\Html;
use app\helpers\IconHelper;
use app\helpers\Language;
use app\themes\next\bundles\AppBundle;
use yii\helpers\Url;
use yii\widgets\Menu;

/* @var $this \yii\web\View */
/* @var $content string */

AppBundle::register($this);

$moduleID = $this->context->module->id;
$controllerID = $this->context->id;
$actionID = $this->context->action->id;
$userModule = Yii::$app->getModule('user');

// Session Timeout
$timeoutValue = (int) Yii::$app->user->preferences->get('App.User.SessionTimeout.value');
$timeoutWarning = empty(Yii::$app->params['App.User.SessionTimeout.warning']) ? $timeoutValue : ($timeoutValue - (int) Yii::$app->params['App.User.SessionTimeout.warning']);
// Disable with Form Builder
$disabledTimeout = in_array($controllerID, ['form', 'template']) && in_array($actionID, ['create', 'update']);
// Theme
$themeMode = Yii::$app->user->preferences->get('UI.theme.mode', 'theme-light');
$themeDark = $themeMode === 'theme-dark';
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>" dir="<?php echo Language::dir(); ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="generator" content="<?= Yii::$app->name ?> <?= Yii::$app->version ?>" />
    <link rel="shortcut icon" href="<?= Yii::$app->getHomeUrl() ?>favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= Yii::$app->getHomeUrl() ?>favicon_32.png" sizes="32x32">
    <link rel="icon" href="<?= Yii::$app->getHomeUrl() ?>favicon_48.png" sizes="48x48">
    <link rel="icon" href="<?= Yii::$app->getHomeUrl() ?>favicon_96.png" sizes="96x96">
    <link rel="icon" href="<?= Yii::$app->getHomeUrl() ?>favicon_144.png" sizes="144x144">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) . ' | ' . Yii::$app->settings->get('app.name') ?></title>
    <meta name="msapplication-TileColor" content=""/>
    <meta name="theme-color" content=""/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <!-- CSS files -->
    <link rel="stylesheet" href="<?= $this->theme->getUrl('assets/libs/fontawesome/css/all.css') ?>">
    <link rel="stylesheet" href="<?= $this->theme->getUrl('assets/css/tabler.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->theme->getUrl('assets/css/tabler-vendors.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->theme->getUrl('assets/css/app.min.css') ?>">
    <!-- CSS files -->
    <?php $this->head() ?>
</head>
<body class="main <?= $controllerID ?> <?= $controllerID ?>-<?= $actionID ?>"<?php if ($themeDark): ?> data-bs-theme="dark"<?php endif; ?>>
<?php $this->beginBody() ?>
<div class="page">
    <!-- Navbar -->
    <header class="navbar navbar-expand-md d-print-none" data-bs-theme="dark">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal p-0 pe-md-3">
                <!-- Brand -->
                <?= $this->render('@app/themes/next/views/partials/_brand', [
                    'brandHeight' => '26px',
                ]) ?>
            </h1>
            <div class="navbar-nav flex-row order-md-last">
                <div class="d-none d-md-flex">
                    <a href="#" class="nav-link theme-link px-0 hide-theme-dark" title="<?= Yii::t('app', 'Enable dark mode') ?>" data-bs-toggle="tooltip"
                       data-bs-placement="bottom" data-theme-mode="theme-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                    </a>
                    <a href="#" class="nav-link theme-link px-0 hide-theme-light" title="<?= Yii::t('app', 'Enable light mode') ?>" data-bs-toggle="tooltip"
                       data-bs-placement="bottom" data-theme-mode="theme-light">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                    </a>
                    <div class="nav-item dropdown d-none d-md-flex me-3">
                        <a id="notification-link" href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                            <div id="notification-card" class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <?= Yii::t('app', 'Notifications') ?>
                                    </h3>
                                    <div class="card-actions">
                                        <a id="notification-action-link" class="btn btn-icon" title="<?= Yii::t('app', 'Mark all as read') ?>" href="#">
                                            <?= IconHelper::show('list-check') ?>
                                        </a>
                                    </div>
                                </div>
                                <div id="notification-list" class="list-group list-group-flush list-group-hoverable">
                                    <div class="list-group-item disabled">
                                        <?= Yii::t('app', 'Loading...') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                        <span class="avatar avatar-sm" style="background-image: url(<?= Yii::$app->user->identity->profile->getAvatarUrl() ?>)"></span>
                        <div class="d-none d-xl-block ps-2">
                            <div><?= Yii::$app->user->identity->username ?></div>
                            <div class="mt-1 small text-muted"><?= Yii::$app->user->identity->email ?></div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <a href="<?= Url::to(['/user/settings/account']) ?>" class="dropdown-item"><?= Yii::t('app', 'Manage Account') ?></a>
                        <a href="<?= Url::to(['/user/settings/profile']) ?>" class="dropdown-item"><?= Yii::t('app', 'Profile') ?></a>
                        <a href="<?= Url::to(['/user/settings/preferences']) ?>" class="dropdown-item"><?= Yii::t('app', 'Preferences') ?></a>
                        <?php if (Yii::$app->user->can("configureSite")): ?>
                            <a href="<?= Url::to(['/settings/site']) ?>" class="dropdown-item"><?= Yii::t('app', 'Site Settings') ?></a>
                        <?php endif; ?>
                        <?php if (Yii::$app->session->has($userModule->switchIdentitySessionKey)): ?>
                            <?= Html::a(Yii::t('app', 'Switch back'), ['/user/admin/switch-identity'], ['data-method' => 'post', 'class' => 'dropdown-item text-orange', 'title' => Yii::t('app', 'Switch back to your account')]) ?>
                        <?php endif; ?>
                        <?= Html::a('<span class="me-2">' .IconHelper::show('logout') . '</span>' . Yii::t('app', 'Logout'), ['/user/security/logout'], ['data-method' => 'post', 'class' => 'dropdown-item text-pink', 'title' => Yii::t('app', 'Logout')]) ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar navbar-light">
                <div class="container-xl">
                    <?= Menu::widget([
                        'options' => ['class' => 'navbar-nav'],
                        'itemOptions' => ['class' => 'nav-item'],
                        'activeCssClass'=>'active',
                        'encodeLabels' => false,
                        'linkTemplate' => '<a class="nav-link" href="{url}">{label}</a>',
                        'submenuTemplate' => "\n<ul class='dropdown-menu'>\n{items}\n</ul>\n",
                        'items' => [
                            [
                                'label' => '
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">'.
                                        Yii::t('app', 'Dashboard').
                                    '</span>',
                                'url' => ['/dashboard/index'],
                            ],
                            [
                                'label' => '
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M9 11l3 3l8 -8" />
                                            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">'.
                                        Yii::t('app', 'Forms').
                                    '</span>',
                                'url' => ['/form/index'],
                                'visible' => Yii::$app->user->can("viewForms", ['listing' => true]),
                                'active' => 'app' === $moduleID && 'form' === $controllerID,
                            ],
                            [
                                'label' => '
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-palette" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25"></path>
                                            <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                            <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                            <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">'.
                                        Yii::t('app', 'Themes').
                                    '</span>',
                                'visible' => Yii::$app->user->can("viewThemes", ['listing' => true]),
                                'url' => ['/theme/index'],
                                'active' => 'app' === $moduleID && 'theme' === $controllerID,
                            ],
                            [
                                'label' => '
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-puzzle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1"></path>
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">'.
                                    Yii::t('app', 'Add-Ons').
                                    '</span>',
                                'visible' => Yii::$app->user->can("viewAddons", ['listing' => true]),
                                'url' => ['/addons/admin/index'],
                                'active' => !in_array($moduleID, ['app', 'user', 'subscription']),
                            ],
                            [
                                'label' => '
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">'.
                                    Yii::t('app', 'Users').
                                    '</span>',
                                'visible' => Yii::$app->user->can("viewUsers"),
                                'url' => ['/user/admin/index'],
                                'active' => 'user' === $moduleID && 'settings' !== $controllerID,
                            ],
                            [
                                'options' => ['class' => 'nav-item dropdown'],
                                'template' => '<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{url}" >{label}</a>',
                                'submenuTemplate' => "\n<div class='dropdown-menu'>\n{items}\n</div>\n",
                                'label' => '
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lifebuoy" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                            <path d="M15 15l3.35 3.35"></path>
                                            <path d="M9 15l-3.35 3.35"></path>
                                            <path d="M5.65 5.65l3.35 3.35"></path>
                                            <path d="M18.35 5.65l-3.35 3.35"></path>
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">'.
                                        Yii::t('app', 'Help').
                                    '</span>',
                                'url' => '#navbar-help',
                                'items' => [
                                    [
                                        'options' => ['tag' => 'a', 'class' => 'dropdown-item', 'href' => 'https://docs.easyforms.dev/'],
                                        'template' => '
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-briefcase" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                                                <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2"></path>
                                                <path d="M12 12l0 .01"></path>
                                                <path d="M3 13a20 20 0 0 0 18 0"></path>
                                            </svg>&nbsp;
                                            {label}',
                                        'label' => Yii::t('app', 'Documentation'),
                                        'url' => 'https://docs.easyforms.dev/',
                                    ],
                                    [
                                        'options' => ['tag' => 'a', 'class' => 'dropdown-item', 'href' => 'https://support.easyforms.dev/'],
                                        'template' => '
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-help" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                <path d="M12 17l0 .01"></path>
                                                <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4"></path>
                                            </svg>&nbsp;
                                            {label}',
                                        'label' => Yii::t('app', 'Help Center'),
                                        'url' => 'https://support.easyforms.dev/',
                                    ],
                                    [
                                        'options' => ['tag' => 'a', 'class' => 'dropdown-item text-pink', 'href' => 'https://www.youtube.com/@easyforms'],
                                        'template' => '
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M3 5m0 4a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v6a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z"></path>
                                                <path d="M10 9l5 3l-5 3z"></path>
                                            </svg>&nbsp;
                                            {label}',
                                        'label' => Yii::t('app', 'Videos'),
                                        'url' => 'https://www.youtube.com/@easyforms',
                                    ],
                                ]
                            ],
                        ],
                    ]); ?>
                    <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last d-none d-sm-block">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= IconHelper::show('plus') ?> <?= Yii::t('app', 'Create New') ?>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <?php if (Yii::$app->user->can('createForms')): ?>
                                    <li><a href="<?= Url::to(['/form/create']) ?>" class="dropdown-item"><?= IconHelper::show('checkbox') ?> <span class="ms-2"><?= Yii::t('app', 'Form') ?></span></a></li>
                                <?php endif; ?>
                                <?php if (Yii::$app->user->can('createThemes')): ?>
                                    <li><a href="<?= Url::to(['/theme/create']) ?>" class="dropdown-item"><?= IconHelper::show('palette') ?> <span class="ms-2"><?= Yii::t('app', 'Theme') ?></span></a></li>
                                <?php endif; ?>
                                <?php if (Yii::$app->user->can('createTemplates')): ?>
                                    <li><a href="<?= Url::to(['/templates/create']) ?>" class="dropdown-item"><?= IconHelper::show('template') ?> <span class="ms-2"><?= Yii::t('app', 'Template') ?></span></a></li>
                                <?php endif; ?>
                                <?php if (Yii::$app->user->can('createUsers')): ?>
                                    <li><a href="<?= Url::to(['/user/admin/create']) ?>" class="dropdown-item"><?= IconHelper::show('user-plus') ?> <span class="ms-2"><?= Yii::t('app', 'User') ?></span></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="page-wrapper">
        <!-- Page alert -->
        <div class="alert-container">
            <div class="container-xl">
                <div class="row">
                    <div class="col">
                        <?= Alert::widget() ?>
                    </div>
                </div>
            </div>
        </div>
        <?= $content ?>
        <footer class="footer footer-transparent d-print-none">
            <div class="container-xl">
                <div class="row text-center align-items-center flex-row-reverse">
                    <div class="col-lg-auto ms-lg-auto">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li class="list-inline-item">
                                <?= Yii::t('app', 'Copyright') ?> &copy; <?= date('Y') ?> <?= Yii::$app->settings->get("app.name") ?>. <?= Yii::t('app', 'All rights reserved.') ?>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li class="list-inline-item">
                                v<?= Yii::$app->version ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<?php $this->endBody() ?>

<?php if (!$disabledTimeout && $timeoutValue > 0): ?>
    <?= SessionTimeout::widget([
        'warnAfter' => $timeoutWarning,
        'redirAfter' => $timeoutValue,
    ]) ?>
<?php endif; ?>

<script>
    var timestamp = null;
    var notificationPanel = document.getElementById("notification-card");
    var notificationLink = document.getElementById("notification-link");
    var notificationActionLink = document.getElementById("notification-action-link");

    function countNotifications()
    {
        fetch('<?= Url::to(['/ajax/count-notifications']) ?>', {
            method: "POST",
            body: JSON.stringify({
                _csrf: '<?= Yii::$app->request->csrfToken ?>'
            }),
            headers: {"Content-type": "application/json; charset=UTF-8"}
        })
            .then(function (response) {
                if (response.ok && !response.redirected) {
                    return response.json();
                }
                throw new Error("Invalid response");
            })
            .then(function (response) {
                let notificationIcon = document.getElementById("notification-icon");
                if (notificationIcon) {
                    notificationIcon.remove();
                }
                if (response.timestamp && response.data) {
                    timestamp = response.timestamp;
                    if (response.data.length > 0) {
                        let notificationIcon = document.createElement("span");
                        if (notificationIcon) {
                            notificationIcon.classList.add('badge');
                            notificationIcon.classList.add('bg-red');
                            notificationLink.append(notificationIcon)
                        }
                    }
                }
                setTimeout("countNotifications()", 3000);
            })
            .catch(function (error) {
                console.log(error);
            });
    }

    function loadNotifications()
    {
        fetch('<?= Url::to(['/ajax/load-notifications']) ?>', {
            method: "POST",
            body: JSON.stringify({
                _csrf: '<?= Yii::$app->request->csrfToken ?>'
            }),
            headers: {"Content-type": "application/json; charset=UTF-8"}
        })
            .then(function (response) {
                if (response.ok && !response.redirected) {
                    return response.text();
                }
                throw new Error('Invalid response');
            })
            .then(function (html) {
                let notificationList = document.getElementById("notification-list");
                notificationList.innerHTML = html;
            }).catch(function (error) {
            console.log(error);
        });
    }

    function cleanNotifications()
    {
        fetch('<?= Url::to(['/ajax/clean-notifications']) ?>', {
            method: "POST",
            body: JSON.stringify({
                _csrf: '<?= Yii::$app->request->csrfToken ?>'
            }),
            headers: {"Content-type": "application/json; charset=UTF-8"}
        })
            .then(function (response) {
                if (response.ok && !response.redirected) {
                    let notificationList = document.getElementById("notification-list");
                    notificationList.innerHTML = '';
                    return response.json();
                }
                throw new Error("Invalid response");
            })
            .catch(function (error) {
                console.log(error);
            });

        return false;
    }

    document.addEventListener("DOMContentLoaded", function() {
        // Theme mode
        var themeLinks = document.getElementsByClassName('theme-link');
        for (let i = 0; i < themeLinks.length; ++i) {
            themeLinks[i].onclick = function (e) {
                e.preventDefault();
                let themeMode = themeLinks[i].dataset.themeMode;
                if (themeMode === 'theme-dark') {
                    document.body.dataset.bsTheme = 'dark';
                } else {
                    delete document.body.dataset.bsTheme;
                }

                fetch('<?= Url::to(['/ajax/theme-settings']) ?>', {
                    method: "POST",
                    body: JSON.stringify({
                        mode: themeMode,
                        _csrf: '<?= Yii::$app->request->csrfToken ?>'
                    }),
                    headers: {"Content-type": "application/json; charset=UTF-8"}
                })
                    .then(function (response) {
                        if (response.ok && !response.redirected) {
                            return response.json();
                        }
                        throw new Error("Invalid response");
                    })
                    .catch(function (error) {
                        console.log(error);
                    });

                return false;
            };
        }

        notificationLink.addEventListener("click", function (e) {
            e.preventDefault();
            loadNotifications();
        });

        notificationActionLink.addEventListener("click", function (e) {
            e.preventDefault();
            cleanNotifications();
        });

        countNotifications();

    });
</script>
</body>
</html>
<?php $this->endPage() ?>