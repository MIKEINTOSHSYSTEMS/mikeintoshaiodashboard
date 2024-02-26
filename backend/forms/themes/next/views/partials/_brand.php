<?php

use app\helpers\Html;
use yii\helpers\Url;

/* @var $brandHeight string */
/* @var $brandColor string */

$this->registerCssFile($this->theme->getUrl("assets/css/fonts.min.css"));

$brandHeight = $brandHeight ?? '26px';
$brandColor = $brandColor ?? '#FFF';

$style = <<<CSS
/**
 * Brand
 */
.app-name {
    font-family: 'Kaushan Script', cursive;
    font-size: {$brandHeight};
    color: {$brandColor};
    line-height: 1em;
}
/* Medium devices (desktops, 992px and up) */
@media (min-width: 992px) {
    .app-name {
        /*font-size: 40px;*/
    }
}

.app-name:before {
    font-family: 'Glyphicons Regular';
    font-style: normal;
    font-weight: normal;
    vertical-align: -2px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: "\E151";
}
CSS;

$this->registerCss($style);

$settings = Yii::$app->settings ?? null;

// Brand
$appName = $settings ? $settings->get("app.name") : Yii::$app->name;
$appDescription = $settings ? $settings->get("app.description") : '';
$appDescription = strip_tags($appDescription);
$brandLabel = Html::tag("span", $appName, ["class" => "app-name"]);
$brandStyle = 'padding: 15px';
$brandTitle = $appName;
if (!empty($appDescription)) {
    $brandTitle = $brandTitle . ' | ' . $appDescription;
}
$logo = $settings ? $settings->get("logo", "app", null) : null;
if ($logo) {
    $brandLabel = Html::img(Url::to('@web/static_files/uploads' . '/' . $logo, true), [
        'height' => '40px',
        'alt' => $appName,
        'title' => $appName,
    ]);
    $brandStyle = 'padding: 5px 15px';
}
?>

<a class="navbar-brand" href="<?= Url::home() ?>" title="<?= $appName ?>">
    <?= $brandLabel ?>
</a>
