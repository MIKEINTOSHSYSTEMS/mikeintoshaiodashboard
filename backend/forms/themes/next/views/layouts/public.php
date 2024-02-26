<?php
use yii\helpers\Html;
use app\helpers\Language;
use app\themes\next\bundles\PublicBundle;
use app\components\widgets\Alert;

/* @var $this yii\web\View */
/* @var $content string */

PublicBundle::register($this);

// Theme
$themeMode = Yii::$app->user->preferences->get('UI.theme.mode', 'theme-light');
$themeDark = $themeMode === 'theme-dark';

// Controller + Action
$controllerID = $this->context->id;
$actionID = $this->context->action->id;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" dir="<?php echo Language::dir(); ?>">
<head>
    <!-- Meta Tags -->
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="robots" content="noindex, noarchive">
    <meta name="generator" content="<?= Yii::$app->name ?> <?= Yii::$app->version ?>" />
    <link rel="shortcut icon" href="<?= Yii::$app->getHomeUrl() ?>favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= Yii::$app->getHomeUrl() ?>favicon_32.png" sizes="32x32">
    <link rel="icon" href="<?= Yii::$app->getHomeUrl() ?>favicon_48.png" sizes="48x48">
    <link rel="icon" href="<?= Yii::$app->getHomeUrl() ?>favicon_96.png" sizes="96x96">
    <link rel="icon" href="<?= Yii::$app->getHomeUrl() ?>favicon_144.png" sizes="144x144">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
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
    <?php $this->head() ?>
</head>

<body class="public <?= $controllerID ?> <?= $controllerID ?>-<?= $actionID ?>"<?php if ($themeDark): ?> data-bs-theme="dark"<?php endif; ?>>
<?php $this->beginBody() ?>
<?= Alert::widget() ?>
<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
