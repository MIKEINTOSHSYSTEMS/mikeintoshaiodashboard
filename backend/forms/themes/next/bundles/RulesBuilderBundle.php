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

use yii\web\AssetBundle;

/**
 * Class RulesBuilderBundle
 *
 * @package app\themes\classic\bundles
 */
class RulesBuilderBundle extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/static_files';
    public $css = [
    ];
    public $js = [
        'js/libs/underscore.min.js',
        'js/libs/backbone.min.js',
        'js/libs/jquery.textcomplete.min.js',
        'js/libs/jquery-contenteditable.min.js',
        'js/rules.builder.operators.min.js',
        'js/rules.builder.conditions.min.js',
        'js/rules.builder.actions.min.js',
        'js/rules.builder.app.min.js',
    ];
    public $depends = [
        'yii\bootstrap5\BootstrapPluginAsset', // Load jquery.js and bootstrap.js first
        'yii\jui\JuiAsset', // It includes the CSS and JavaScript files from the jQuery UI library
    ];
}
