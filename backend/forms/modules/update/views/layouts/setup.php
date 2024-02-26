<?php
use yii\helpers\Html;
use app\components\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
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
        <title>
            <?= Html::encode($this->title) ?> | <?= Yii::$app->name ?>
        </title>
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
            .steps {
                display: flex;
                overflow: visible;
                margin-bottom: 2rem !important;
            }
        </style>
        <?php $this->head() ?>
    </head>
    <body class="setup-page <?= $this->context->action->id ?>">

    <?php $this->beginBody() ?>

    <div class="container p-5">
        <div class="row">
            <div class="col-12 col-xl-8 offset-xl-2 col-xll-10 col-xll-1">
                <div class="card">
                    <div class="card-header bg-muted">
                        <h3 class="card-title">
                            <!-- Brand -->
                            <?= $this->render('@app/themes/next/views/partials/_brand', [
                                'brandHeight' => '22px',
                            ]) ?>
                        </h3>
                    </div>
                    <div class="card-body">
                        <?= Alert::widget() ?>
                        <?= $content ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->endBody() ?>
    </body>
    <script src="<?= $this->theme->getUrl('assets/js/tabler.min.js') ?>"></script>
    </html>
<?php $this->endPage() ?>