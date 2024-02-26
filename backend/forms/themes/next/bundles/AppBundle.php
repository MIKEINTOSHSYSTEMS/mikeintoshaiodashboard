<?php

namespace app\themes\next\bundles;

use yii\web\AssetBundle;
use yii\web\View;
use yii\web\YiiAsset;
/**
 * Class AppBundle
 *
 * @package app\themes\next\bundles
 */
class AppBundle extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/next/assets';
    public $css = [
    ];
    public $js = [
        'js/tabler.min.js',
    ];
    public $depends = [
        YiiAsset::class,
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD
    ];
}
