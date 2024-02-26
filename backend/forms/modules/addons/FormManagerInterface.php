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

namespace app\modules\addons;

/**
 * Interface FormManagerInterface
 * @package app\modules\addons
 */
interface FormManagerInterface
{
    /**
     * Get Add-On Default Model Classes
     *
     * Structure: [
     *      $modelName => $modelClass
     * ]
     *
     * @return void|array events
     */
    public function getDefaultModelClasses();
}