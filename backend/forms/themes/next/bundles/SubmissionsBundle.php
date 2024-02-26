<?php

namespace app\themes\next\bundles;

use Yii;
use yii\bootstrap5\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class SubmissionsBundle
 *
 * @package app\themes\next\bundles
 */
class SubmissionsBundle extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'static_files/libs/daterangepicker/daterangepicker.min.css',
        'static_files/libs/daterangepicker/daterangepicker-kv.min.css',
    ];
    public $js = [
        'static_files/js/libs/underscore.js',
        'static_files/js/libs/backbone.js',
        'static_files/js/libs/jquery.cookie.js',
        'static_files/libs/daterangepicker/moment.min.js',
        'static_files/libs/daterangepicker/daterangepicker.min.js',
        'static_files/js/libs/backbone-model-file-upload.min.js',
        'static_files/js/libs/signature_pad.umd.js',
        'static_files/js/submissions.min.js',
    ];
    public $depends = [
        JqueryAsset::class,
        BootstrapAsset::class,
    ];
    public function init()
    {
        if (isset(Yii::$app->params['Google.Maps.apiKey']) && !empty(Yii::$app->params['Google.Maps.apiKey'])) {
            $key = Yii::$app->params['Google.Maps.apiKey'];
            array_unshift($this->js, '//maps.google.com/maps/api/js?key=' . $key);
        } else {
            array_unshift($this->css, 'https://unpkg.com/leaflet@1.5.1/dist/leaflet.css');
            array_unshift($this->js, '//unpkg.com/leaflet@1.5.1/dist/leaflet.js');
        }

        // Add moment language
        if (strtolower(Yii::$app->language) !== 'en-us') {
            array_push($this->js, 'js/libs/locales/moment/' . strtolower(Yii::$app->language) . '.js');
        }

        parent::init();
    }
}
