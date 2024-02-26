<?php

use app\components\widgets\Alert;
use app\helpers\Language;
use app\themes\next\bundles\FormPageBundle;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $content string */

FormPageBundle::register($this);
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
    <link rel="stylesheet" href="<?= $this->theme->getUrl('assets/css/tabler-flags.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->theme->getUrl('assets/css/tabler-payments.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->theme->getUrl('assets/css/tabler-vendors.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->theme->getUrl('assets/css/app.min.css') ?>">
    <style>
        @import url('https://rsms.me/inter/inter.css');
        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }
        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
    <?php $this->head() ?>
</head>
<body class=" d-flex flex-column" data-bs-theme="dark">
<?php $this->beginBody() ?>
<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <h1 class="navbar-brand d-none-navbar-horizontal pe-0 pe-md-3">
                <!-- Brand -->
                <?= $this->render('@app/themes/next/views/partials/_brand', [
                    'brandHeight' => '40px',
                ]) ?>
            </h1>
        </div>
        <div class="row">
            <div class="col">
                <?= Alert::widget() ?>
            </div>
        </div>
        <?= $content ?>
    </div>
</div>
<!-- Libs JS -->
<script src="<?= $this->theme->getUrl('assets/js/tabler.min.js') ?>"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>