<?php

namespace app\components\widgets;

use kartik\form\ActiveForm as BaseActiveForm;

class ActiveForm extends BaseActiveForm
{
    public $fieldClass = ActiveField::class;

}