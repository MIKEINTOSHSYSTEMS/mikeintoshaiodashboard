<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.9.1
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\components\widgets;

use Yii;
use yii\base\Widget;

/**
 * Class ConditionsBuilder
 * @package app\components\widgets
 */
class ConditionsBuilder extends Widget
{
    public $label;
    public $labelOptions;
    public $id;
    public $options;
    public $i18n;
    public $data;
    public $field;
    public $depends;
    public $initialize;
    public $url;

    /**
     * Init
     */
    public function init()
    {
        parent::init();
        if ($this->label === null) {
            $this->label = Yii::t('app', 'Conditions');
        }
        if ($this->field === null) {
            $this->field = '';
        }
        if ($this->id === null) {
            $this->id = sprintf('conditions-builder-%s', rand(0, 10000)) ;
        }
        if ($this->labelOptions === null) {
            $this->labelOptions = [
                'class' => 'control-label'
            ];
        }
        if ($this->i18n === null) {
            $this->i18n = [
                // Conditions and actions
                'all' => Yii::t('app', 'All'),
                'any' => Yii::t('app', 'Any'),
                'none' => Yii::t('app', 'None'),
                'addAction' => Yii::t('app', 'Add action'),
                'addCondition' => Yii::t('app', 'Add condition'),
                'addGroup' => Yii::t('app', 'Add group'),
                'deleteText' => Yii::t('app', 'Delete'),
                'followingActions' => ' ' . Yii::t('app', 'Executes the following actions:'),
                'followingConditions' => ' ' . Yii::t('app', 'of the following conditions:'),
                // Operators
                'contains' => Yii::t('app', 'contains'),
                'is' => Yii::t('app', 'is'),
                'isNot' => Yii::t('app', 'is not'),
                'isChecked' => Yii::t('app', 'is checked'),
                'isNotChecked' => Yii::t('app', 'is not checked'),
                'isPresent' => Yii::t('app', 'is present'),
                'isBlank' => Yii::t('app', 'is blank'),
                'isAfter' => Yii::t('app', 'is after'),
                'isBefore' => Yii::t('app', 'is before'),
                'isEqualTo' => Yii::t('app', 'is equal to'),
                'isGreaterThan' => Yii::t('app', 'is greater than'),
                'isGreaterThanOrEqual' => Yii::t('app', 'is greater than or equal'),
                'isLessThan' => Yii::t('app', 'is less than'),
                'doesNotContains' => Yii::t('app', 'does not contains'),
                'hasAValue' => Yii::t('app', 'has a value'),
                'hasNoValue' => Yii::t('app', 'has no value'),
                'hasOptionSelected' => Yii::t('app', 'has option selected'),
                'hasNoOptionSelected' => Yii::t('app', 'has no option selected'),
                'hasFileSelected' => Yii::t('app', 'has file selected'),
                'hasNoFileSelected' => Yii::t('app', 'has no file selected'),
                'hasBeenClicked' => Yii::t('app', 'has been clicked'),
                'hasBeenSubmitted' => Yii::t('app', 'has been submitted'),
                'startsWith' => Yii::t('app', 'starts with'),
                'endsWith' => Yii::t('app', 'ends with'),
                // App
                'show' => Yii::t('app', 'Show'),
                'hide' => Yii::t('app', 'Hide'),
                'enable' => Yii::t('app', 'Enable'),
                'disable' => Yii::t('app', 'Disable'),
                'math' => Yii::t('app', 'Math'),
                'perform' => Yii::t('app', 'Perform'),
                'addition' => Yii::t('app', 'Addition'),
                'subtraction' => Yii::t('app', 'Subtraction'),
                'multiplication' => Yii::t('app', 'Multiplication'),
                'division' => Yii::t('app', 'Division'),
                'remainder' => Yii::t('app', 'Remainder'),
                'field' => Yii::t('app', 'Field'),
                'element' => Yii::t('app', 'Element'),
                'of' => Yii::t('app', 'Of'),
                'as' => Yii::t('app', 'As'),
                'toStep' => Yii::t('app', 'To Step'),
                'copy' => Yii::t('app', 'Copy'),
                'from' => Yii::t('app', 'From'),
                'to' => Yii::t('app', 'To'),
                'skip' => Yii::t('app', 'Skip'),
                'andSetResultTo' => Yii::t('app', 'And set result to'),
                'formatNumber' => Yii::t('app', 'Format Number'),
                // Others
                'areYouSureDeleteItem' => Yii::t('app', 'Are you sure you want to delete this rule? All data related to this item will be deleted. This action cannot be undone.'),
            ];
        }
        if ($this->data === null) {
            $this->data = '';
        }
        if ($this->depends === null) {
            $this->depends = false;
        }
        if ($this->initialize === null) {
            $this->initialize = false;
        }
        if ($this->url === null) {
            $this->url = '';
        }
        if ($this->options === null) {
            $this->options = [
                'i18n' => $this->i18n
            ];
        } else {
            $this->options['i18n'] = $this->i18n;
        }
    }

    /**
     * Run
     *
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    public function run()
    {
        return $this->render('conditions-builder', [
            'id' => $this->id,
            'label' => $this->label,
            'labelOptions' => $this->labelOptions,
            'options' => $this->options,
        ]);
    }
}
