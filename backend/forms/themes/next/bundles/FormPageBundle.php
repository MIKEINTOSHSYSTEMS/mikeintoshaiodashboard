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
 * Class FormPageBundle
 *
 * @package app\themes\next\bundles
 */
class FormPageBundle extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/next/assets';
    public $css = [
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
