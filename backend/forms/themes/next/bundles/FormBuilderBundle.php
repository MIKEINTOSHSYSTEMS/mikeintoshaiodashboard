<?php

namespace app\themes\next\bundles;

use Yii;
use yii\web\AssetBundle;

/**
 * Class FormBuilderBundle
 *
 * @package app\themes\next\bundles
 */
class FormBuilderBundle extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/app.min.css',
        'themes/next/assets/css/libs/prism.min.css',
        'themes/next/assets/css/libs/spectrum.min.css',
        'themes/next/assets/css/libs/spectrum-kv.min.css',
        'themes/next/assets/css/libs/grapick.min.css',
        'themes/next/assets/css/libs/jquery.fontselect.min.css',
        'themes/next/assets/css/libs/jquery.flexdatalist.min.css',
        'themes/next/assets/css/libs/simplebar.min.css',
        'themes/next/assets/css/form.builder.min.css',
//        'css/custom.css',
    ];
    public $js = [
        'themes/next/assets/libs/tinymce/tinymce.min.js',
        'static_files/js/form.builder/lib/require.js',
    ];
    public $depends = [
        AppBundle::class
    ];
    public function init()
    {
        if (YII_ENV_DEV) {
            // For development & debugging
            $this->jsOptions['data-main'] = Yii::getAlias('@web') . "/static_files/js/form.builder/main.js";
        } else {
            // For production
            // Full command. Run from the base directory.
            // r.js -o static_files/js/form.builder/lib/build.js optimize=none
            $this->jsOptions['data-main'] = Yii::getAlias('@web') . "/static_files/js/form.builder/main-built.js";
        }

        parent::init();
    }
}
