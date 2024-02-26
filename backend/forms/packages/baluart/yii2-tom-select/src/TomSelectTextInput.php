<?php

namespace baluart\tomselect;

use yii\helpers\Html;

class TomSelectTextInput extends InputWidget
{
    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textInput($this->name, $this->value, $this->options);
        }

        parent::run();
    }
}
