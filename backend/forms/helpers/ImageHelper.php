<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.4.2
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\helpers;

use Intervention\Image\ImageManagerStatic as Image;
use Yii;
use yii\base\InvalidParamException;
use yii\helpers\Url;

/**
 * Class ImageHelper
 * @package app\helpers
 */
class ImageHelper
{

    /**
     * Detect if a file is an image (GIF, JPEG or PNG(
     *
     * @param $path
     * @return bool
     */
    public static function isImage($path)
    {
        $a = getimagesize($path);
        $image_type = isset($a[2]) ? $a[2] : '';

        return in_array($image_type , array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG));
    }

    /**
     * Compress an image
     *
     * @param string $path Path to the image file
     * @param integer $quality A number between 0 and 100
     * @return bool
     */
    public static function compress($path, $quality)
    {
        $size = getimagesize($path);
        $mime = $size['mime'];

        if ($mime == 'image/png' || $mime == 3) {
            $picture = imagecreatefrompng($path);
        } else if($mime == 'image/jpeg' || $mime == 2) {
            $picture = imagecreatefromjpeg($path);
        } else if($mime == 'image/gif' || $mime == 1) {
            $picture = imagecreatefromgif($path);
        } else {
            Yii::error("I do not support this format for now. Mime - $mime ");
        }

        if (isset($picture)) {

            $status = imagejpeg($picture, (string) $path, (int) $quality);
            imagedestroy($picture);

            return $status;

        } else{

            Yii::error("Failed to extract picture data");

        }
    }

    /**
     * Store Base64 Image in Disk
     *
     * @param $src
     * @param $location
     * @return false|string
     * @see SubmissionHelper::getSignatureImage()
     */
    public static function storeBase64Image($src, $location)
    {
        // Verify data url
        if (preg_match('/data:image/', $src)){
            // Get the mimetype
            preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
            $mimeType = $groups['mime'];
            // Hash filename
            $fileName = md5($src);
            $filePath = $location . '/' . $fileName . '.' . $mimeType;
            $fileUrl = Url::base(true) . '/' . $filePath;
            // Avoid save the same image
            if (file_exists($filePath)) {
                return $fileUrl;
            }
            // Create folders if they don't already exist
            if (!file_exists($location)) {
                if (!mkdir($location, 0755, true)) {
                    Yii::error("An error occurred while creating the folder: {$location}", "application");
                    return false;
                }
            }
            // @see http://image.intervention.io/
            Image::make($src)
                // Resize if required
                /* ->resize(300, 200) */
                ->encode($mimeType, 100)  // Encode file to the specified mimetype
                ->save($filePath); // Save image on disk
            return $fileUrl;
        }

        return false;
    }

    /**
     * Delete Stored Base64 Image in Disk
     *
     * @param $src
     * @param $location
     * @return boolean
     */
    public static function deleteStoredBase64Image($src, $location): bool
    {
        if (preg_match('/data:image/', $src)) {
            // Get the mimetype
            preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
            $mimeType = $groups['mime'];
            // Hash filename
            $fileName = md5($src);
            $filePath = $location . '/' . $fileName . '.' . $mimeType;
            if (file_exists($filePath)) {
                return @unlink($filePath);
            }
        }

        return false;
    }
}
