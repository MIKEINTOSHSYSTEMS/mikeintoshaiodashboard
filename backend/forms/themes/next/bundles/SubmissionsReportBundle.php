<?php

namespace app\themes\next\bundles;

use yii\web\AssetBundle;

/**
 * Class SubmissionsReportBundle
 *
 * @package app\themes\next\bundles
 */
class SubmissionsReportBundle extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/static_files';
    public $css = [
        'libs/gridstack/gridstack.min.css',
    ];
    public $js = [
        'libs/lodash/lodash.min.js',
        'libs/gridstack/gridstack-all.js',
        'js/submissions.report.js',
    ];
    public $depends = [
        VisualizationBundle::class,
    ];
}
