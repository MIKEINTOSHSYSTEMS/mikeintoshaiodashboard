<?php

namespace app\components\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class Icon extends Widget
{
    public $options = [];
    public $classPrefix = 'glyphicon glyphicon-';

    public $name = '';

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        Html::addCssClass($this->options, $this->classPrefix . $this->name);
        return $this->render('icon', [
            'name' => $this->name,
            'options' => $this->options,
        ]);
    }
}
