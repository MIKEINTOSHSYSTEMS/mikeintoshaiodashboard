<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.18.1
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 *
 * Based on Yii2-ActionBar (MIT license)
 * @author Oleg Belostotskiy <olgblst@gmail.com>
 * @link https://github.com/mickgeek/yii2-actionbar
 */

namespace app\components\actions;

use app\models\Form;
use kartik\depdrop\DepDropAction;
use Yii;

/**
 * Class FieldsDepDropAction
 * Extends DepDropAction class to show Form Fields data
 * @package app\components\actions
 */
class FieldsDepDropAction extends DepDropAction
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->controller->enableCsrfValidation = $this->enableCsrfValidation;

        $this->outputCallback = function ($formID, $params) {
            $key = 'form_' . $formID . '_fields';
            $cache = Yii::$app->cache;
            $output = $cache->get($key);
            if ($output === false) {
                // $output is not found in cache, calculate it from scratch
                $form = Form::findOne(['id' => $formID]);
                if ($form) {
                    if (Yii::$app->user->can('configureFormsWithAddons', ['model' => $form])) {
                        $formDataModel = $form->formData;
                        if ($formDataModel) {
                            $fields = $formDataModel->getFieldsForEmail();
                            $output = array();
                            foreach ($fields as $name => $label) {
                                $output[] = [
                                    'id' => $name,
                                    'name' => $label,
                                ];
                            }
                        }
                        // store $output in cache so that it can be retrieved next time
                        $cache->set($key, $output, 60);
                    }
                }
            }
            return $output;
        };

        $this->selectedCallback = function ($formID, $params) {
            if (isset($params[0]) && !empty($params[0])) {
                return $params[0];
            }
        };
    }
}
