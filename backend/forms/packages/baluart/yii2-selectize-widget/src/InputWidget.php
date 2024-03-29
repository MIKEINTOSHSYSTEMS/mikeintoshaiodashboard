<?php
/**
 * @link https://github.com/2amigos/yii2-selectize-widget
 * @copyright Copyright (c) 2013-2017 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace dosamigos\selectize;

use yii\helpers\Json;
use yii\helpers\Url;
use yii\web\JsExpression;

/**
 * InputWidget
 *
 * @author 2amigos.us <hola@2amigos.us>
 */
class InputWidget extends \yii\widgets\InputWidget
{
    /**
     * @var string
     */
    public $loadUrl;
    
    /**
     * @var string the parameter name
     */
    public $queryParam = 'query'; 

    /**
     * @var array
     */
    public $clientOptions;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->registerClientScript();
    }

    /**
     * Registers the needed JavaScript.
     */
    public function registerClientScript()
    {
        $id = $this->options['id'];

        if ($this->loadUrl !== null) {
            $url = Url::to($this->loadUrl);
            $this->clientOptions['load'] = new JsExpression("function (query, callback) { if (!query.length) return callback(); $.getJSON('$url', { {$this->queryParam}: query }, function (data) { callback(data); }).fail(function () { callback(); }); }");
        }

        $options = Json::encode($this->clientOptions);
        $view = $this->getView();
        SelectizeAsset::register($view);
        $view->registerJs("jQuery('#$id').selectize($options);");
    }
}
