<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.14.3
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\components\liquid\filters;

use app\helpers\SubmissionHelper;

/**
 * Class SignatureFilters
 * @package app\components\liquid\filters
 */
class SignatureFilters
{
    const SIGNATURE_IMAGE = 'image';
    const SIGNATURE_DATA = 'data';
    const SIGNATURE_DATA_URL = 'data_url';

    public $context;

    /**
     * Allow users to select what format to use to display a signature
     *
     * @param mixed $input
     * @param string $format
     *
     * @return string
     */
    public function signature($input, $format = 'image')
    {

        // Default format
        if (!in_array($format, [self::SIGNATURE_IMAGE, self::SIGNATURE_DATA, self::SIGNATURE_DATA_URL])) {
            $format = self::SIGNATURE_IMAGE;
        }

        $output = SubmissionHelper::getSignatureImage($input, true);

        // Signature output
        if ($format === self::SIGNATURE_DATA_URL) { // Image

            $output = SubmissionHelper::getSignatureImage($input, false); // Image Data URL

        } else if ($format === self::SIGNATURE_DATA) { // Data URL

            $output = $input; // Raw data

        }

        return $output;
    }
}