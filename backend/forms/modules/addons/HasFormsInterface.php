<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.16
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\modules\addons;

/**
 * Interface HasFormsInterface
 * @package app\modules\addons
 */
interface HasFormsInterface
{
    /**
     * Return Array of Form Models
     *
     * @return \app\models\Form[]
     */
    public function getForms();

    /**
     * Return Array Of Model IDs related to a Form Model
     *
     * @param integer $id Form ID
     * @return \yii\db\ActiveRecord[]
     */
    public static function findAllByFormID($id);
}