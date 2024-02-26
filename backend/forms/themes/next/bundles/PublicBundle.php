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
use yii\web\View;

/**
 * Class PublicBundle
 *
 * @package app\themes\next\bundles
 */
class PublicBundle extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/next/assets';
    public $css = [
        'css/public.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
    public function init()
    {
        $this->jsOptions['position'] = View::POS_BEGIN;
        parent::init();
    }
}
