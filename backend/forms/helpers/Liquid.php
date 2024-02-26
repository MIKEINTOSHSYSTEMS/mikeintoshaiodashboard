<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.12
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\helpers;

use app\components\liquid\filters\DateFilters;
use app\components\liquid\filters\SignatureFilters;
use app\components\liquid\Template;
use Yii;
use yii\base\Component;

/**
 * Class Liquid
 * @package app\helpers
 */
class Liquid extends Component
{
    const REGISTER_FILTERS = 'registerFilters';
    public $template = null;

    /**
     * Render a liquid template
     *
     * @param $source
     * @param array $assigns
     * @param null $filters
     * @param array $registers
     * @return string
     */
    public static function render($source, array $assigns = [], $filters = null, $registers = [])
    {
        try {

            $liquid = new Liquid();
            $liquid->template = new Template();
            $liquid->trigger(self::REGISTER_FILTERS);
            $liquid->template->registerFilter(new DateFilters);
            $liquid->template->registerFilter(new SignatureFilters);
            $liquid->template->parse(self::decodeOperatorsBetweenDelimiters($source));
            return $liquid->template->render($assigns, $filters, $registers);

        } catch (\Exception $e) {
            Yii::error($e);
        }
    }

    /**
     * Decode operators between curly brace percentage delimiters
     *
     * @param $source
     * @return array|string|string[]
     */
    public static function decodeOperatorsBetweenDelimiters($source)
    {
        $search = [
            "/({%)(.*?)(&lt;)(.*?)(%})/",
            "/({%)(.*?)(&gt;)(.*?)(%})/",
        ];
        $replace = [
            '$1$2<$4$5',
            '$1$2>$4$5',
        ];
        return preg_replace($search, $replace, $source) ?? '';
    }

}
