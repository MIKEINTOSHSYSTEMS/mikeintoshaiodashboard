<?php

namespace app\components\widgets;

use kartik\base\Lib;
use yii\widgets\ActiveField as YiiActiveField;
use kartik\form\ActiveField as BaseActiveField;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class ActiveField extends BaseActiveField
{
    protected function getToggleFieldList($type, $items, $options = [], $asBtnGrp = false)
    {
        $isBs5 = $this->form->isBs(5);
        $notBs3 = !$this->form->isBs(3);
        $disabled = ArrayHelper::remove($options, 'disabledItems', []);
        $readonly = ArrayHelper::remove($options, 'readonlyItems', []);
        $cust = $this->isCustomControl($options);
        $pre = $cust ? ($isBs5 ? 'form-check' : 'custom-control') : ($notBs3 ? "me-1 mr-1 bs-{$type}" : '');
        if ($asBtnGrp) {
            $css = ['btn-group'];
            if (!$isBs5) {
                $css[] = 'btn-group-toggle';
            }
            Html::addCssClass($options, $css);
            $options['data-toggle'] = 'buttons';
            $options['inline'] = true;
            if (!isset($options['itemOptions']['labelOptions']['class'])) {
                $options['itemOptions']['labelOptions']['class'] = 'btn '.$this->form->getDefaultBtnCss();
            }
        }
        $in = ArrayHelper::remove($options, 'inline', false);
        $inputType = "{$type}List";
        $opts = ArrayHelper::getValue($options, 'itemOptions', []);
        $this->initDisability($opts);
        $css = $this->form->disabled ? ' disabled' : '';
        $css .= $this->form->readonly ? ' readonly' : '';
        if ($notBs3) {
            Html::addCssClass($this->labelOptions, 'pt-0');
        }
        if (!$notBs3 && $in && !isset($options['itemOptions']['labelOptions']['class'])) {
            $options['itemOptions']['labelOptions']['class'] = "{$type}-inline{$css}";
        } elseif (!isset($options['item'])) {
            $labelOpts = ArrayHelper::getValue($opts, 'labelOptions', []);
            $options['item'] = function ($index, $label, $name, $checked, $value)
            use (
                $isBs5,
                $type,
                $css,
                $disabled,
                $readonly,
                $asBtnGrp,
                $labelOpts,
                $opts,
                $in,
                $notBs3,
                $cust,
                $pre,
                $options
            ) {
                $id = isset($options['id']) ? $options['id'].'-'.$index :
                    Lib::strtolower(Lib::preg_replace('/[^a-zA-Z0-9=\s—–-]+/u', '-', $name)).'-'.$index;
                $opts += [
                    'data-index' => $index,
                    'value' => $value,
                    'disabled' => $this->form->disabled,
                    'readonly' => $this->form->readonly,
                ];
                $enclosedLabel = (!$cust && !$notBs3) || ($asBtnGrp && !$isBs5);
                if ($enclosedLabel) {
                    $opts += ['label' => $label];
                }
                if (!isset($opts['id'])) {
                    $opts['id'] = $id;
                }
                $wrapperOptions = [];
                if ($notBs3 && !$asBtnGrp) {
                    $opts += ['class' => "{$pre}-input"];
                    Html::addCssClass($labelOpts, "{$pre}-label");
                    $wrapperOptions = ['class' => [$pre.($cust ? ' custom-'.$type : '')]];
                    if ($in) {
                        Html::addCssClass($wrapperOptions, "{$pre}-inline");
                    }
                } elseif (!$notBs3) {
                    $wrapperOptions = ['class' => [$type.$css]];
                }
                if ($asBtnGrp) {
                    if ($checked) {
                        // Html::addCssClass($labelOpts, 'active');
                    }
                    $opts['autocomplete'] = 'off';
                }
                if (!empty($disabled) && in_array($value, $disabled) || $this->form->disabled) {
                    Html::addCssClass($labelOpts, 'disabled');
                    $opts['disabled'] = true;
                }
                if (!empty($readonly) && in_array($value, $readonly) || $this->form->readonly) {
                    Html::addCssClass($labelOpts, 'disabled');
                    $opts['readonly'] = true;
                }
                if ($isBs5 && $asBtnGrp) {
                    Html::addCssClass($opts, 'btn-check');
                } else {
                    $opts['labelOptions'] = $labelOpts;
                }
                $out = Html::$type($name, $checked, $opts);
                if (!$enclosedLabel) {
                    $out .= Html::label($label, $opts['id'], $labelOpts);
                }

                return $asBtnGrp ? $out : Html::tag('div', $out, $wrapperOptions);
            };
        }

        return YiiActiveField::$inputType($items, $options);
    }
}