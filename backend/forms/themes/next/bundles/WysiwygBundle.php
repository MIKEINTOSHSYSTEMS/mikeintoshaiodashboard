<?php

namespace app\themes\next\bundles;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class WysiwygBundle
 *
 * @package app\themes\next\bundles
 */
class WysiwygBundle extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/next/assets/libs/tinymce';
    public $js = [
        'tinymce.min.js',
    ];
    public $depends = [
        JqueryAsset::class,
        AppBundle::class,
    ];
}
