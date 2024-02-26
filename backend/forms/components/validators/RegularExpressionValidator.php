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
use yii\base\InvalidConfigException;
use yii\validators\RegularExpressionValidator as BaseRegularExpressionValidator;

/**
 * Class RegularExpressionValidator
 * @package app\components\validators
 */
class RegularExpressionValidator extends BaseRegularExpressionValidator
{
    use ValidatorTrait;

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        if ($this->pattern === null) {
            throw new InvalidConfigException('The "pattern" property must be set.');
        }
        if ($this->message === null) {
            $this->message = Yii::t('app', '{attribute} is invalid.');
        }

        parent::init();
    }
}