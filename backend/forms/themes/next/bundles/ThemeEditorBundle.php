<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.0
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\themes\next\bundles;

use yii\bootstrap5\BootstrapPluginAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class ThemeEditorBundle
 *
 * @package app\themes\next\bundles
 */
class ThemeEditorBundle extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/static_files';
    public $css = [
    ];
    public $js = [
        'js/libs/ace.js',
        'js/theme.editor.min.js',
    ];
    public $depends = [
        JqueryAsset::class,
        BootstrapPluginAsset::class, // Load jquery.js and bootstrap.js first
    ];
}
