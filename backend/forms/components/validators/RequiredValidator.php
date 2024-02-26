<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.14
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\components\validators;

use Yii;
use yii\validators\RequiredValidator as BaseRequiredValidator;

/**
 * Class RequiredValidator
 * @package app\components\validators
 */
class RequiredValidator extends BaseRequiredValidator
{
    use ValidatorTrait;

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        if ($this->message === null) {
            $this->message = $this->requiredValue === null ? Yii::t('app', '{attribute} cannot be blank.')
                : Yii::t('app', '{attribute} must be "{requiredValue}".');
        }

        parent::init();
    }
}