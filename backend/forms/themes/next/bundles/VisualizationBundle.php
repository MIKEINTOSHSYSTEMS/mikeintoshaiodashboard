<?php

namespace app\themes\next\bundles;

use yii\bootstrap5\BootstrapPluginAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class VisualizationBundle
 *
 * @package app\themes\next\bundles
 */
class VisualizationBundle extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/static_files';
    public $css = [
        'libs/dc/dc.min.css'
    ];
    public $js = [
        'js/libs/d3.min.js', // v3.5.6
        'js/libs/crossfilter.min.js', // v1.3.12
        'libs/dc/dc.min.js', // v2.0.0-beta19
    ];
    public $depends = [
        JqueryAsset::class,
        BootstrapPluginAsset::class, // Load jquery.js and bootstrap.js first
    ];
}
