<?php

namespace baluart\tomselect;

use yii\helpers\Json;
use yii\helpers\Url;
use yii\web\JsExpression;

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
        TomSelectAsset::register($view);
        $view->registerJs("new TomSelect('#$id', $options)");
    }
}
