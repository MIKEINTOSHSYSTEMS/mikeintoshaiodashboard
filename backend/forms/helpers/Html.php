<?php
/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.0
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

namespace app\helpers;

use DOMDocument;
use Yii;
use yii\helpers\Url;
use Intervention\Image\ImageManagerStatic as Image;

/**
 * Class Html
 * @package app\helpers
 * @extends \yii\helpers\Html
 */
class Html extends \yii\helpers\Html
{
    /**
     * Remove scripts tags from html code
     * @param $html
     * @return mixed
     */
    public static function removeScriptTags($html)
    {

        return preg_replace('#<script(.*?)>(.*?)</script>#is', '', $html);
    }

    /**
     * Return Allowed HTML5 Tags
     *
     * @return array
     */
    public static function allowedHtml5Tags()
    {
        return ["<img>", "<del>","<ins>","<br>","<span>",
            "<u>","<b>","<i>","<sup>","<sub>", "<code>","<time>","<abbr>","<q>","<small>",
            "<font>","<strong>","<em>","<a>","<div>","<figcaption>","<figure>","<dd>","<dt>",
            "<dl>","<li>","<ul>","<ol>","<blockquote>","<pre>","<hr>","<p>","<address>",
            "<table>", "<thead>", "<tbody>", "<tr>", "<th>", "<td>"];
    }


    /**
     * Parse HTML code and find form fields
     * Return an array of field names
     *
     * @param string $html Html code.
     * @return array List of Field Names
     */
    public static function getFields($html)
    {
        if (!empty($html)) {
            $dom = new DomDocument;
            // Hide Warnings
            libxml_use_internal_errors(true);
            $dom->validateOnParse = false;
            //load the html into the object
            $dom->loadHTML($html);
            //discard white space
            $dom->preserveWhiteSpace = false;
            // Get All dom elements
            $elements = $dom->getElementsByTagName('*');
            $fields = [];
            /* @var $element \DOMElement */
            foreach ($elements as $element) {
                // Only add form elements
                if (in_array($element->tagName, array("input", "textarea", "select"))) {
                    if ($element->hasAttribute('name')) {
                        $name = $element->getAttribute('name');
                        // Checkbox or Select List
                        if ($element->getAttribute('type') == "checkbox"
                            || $element->getAttribute('type') == "file"
                            || $element->tagName == "select") {
                            // Remove square brackets from name
                            $name = str_replace("[]", "", $name);
                        }
                        $fields[$name] = $name;
                    }
                }
            }
            return $fields;
        }
        return [];
    }

    /**
     * Parse HTML code to replace base64 images and store them on a location
     *
     * Steps:
     * 1. Parse HTML code and find images
     * 2. Store each image on the disk
     * 3. Change the src of each image to the new image
     * 4. Return the HTML code linking to the new images
     *
     * @param string $html Html code
     * @param string $location Folder where the images will be stored
     * @return string Html code
     */
    public static function storeBase64ImagesOnLocation($html, $location)
    {
        $dom = new DOMDocument('1.0', 'UTF-8');
        // The HTML is UTF-8 encoded
        $html = mb_encode_numericentity('<?xml encoding="UTF-8">' . $html, [0x80, 0x10FFFF, 0, 0x1FFFFF], 'UTF-8');
        $dom->loadHTML($html);
        $dom->encoding = 'UTF-8';
        $images = $dom->getElementsByTagName('img');

        $search = []; // Base64 Image Urls
        $replace = []; // Image Urls

        /** @var \DOMElement $image */
        foreach($images as $image) {
            $src = $image->getAttribute('src');
            // 1. Parse html to find images
            if(preg_match('/data:image/', $src)){
                $search[] = $src;
                // Get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimeType = $groups['mime'];
                // Generating a random filename
                $fileName = uniqid();
                $fileType = $location . '/' . $fileName . '.' . $mimeType;
                // @see http://image.intervention.io/api/
                Image::make($src)
                    // Resize if required
                    /* ->resize(300, 200) */
                    ->encode($mimeType, 100)  // Encode file to the specified mimetype
                    ->save($fileType); // Save image on disk
                $new_src = Url::base(true) . '/' . $fileType;
                $replace[] = $new_src;
            }
        }

        // Replace images
        return str_replace($search, $replace, $html);
    }

    /**
     * UI Widgets
     *
     * @return string[]
     */
    public static function uiWidgets()
    {
        return [
            // Flatpickr
            UrlHelper::removeScheme(Url::to('@web/static_files/js/ui-widgets/flatpickr.date.js', true))
            => Yii::t('app', 'Flatpickr') . ' (' . Yii::t('app', 'Replace any date field with a lightweight cross-browser datepicker')  . ')',
            UrlHelper::removeScheme(Url::to('@web/static_files/js/ui-widgets/flatpickr.class.js', true))
            => Yii::t('app', 'Flatpickr') . ' (' . Yii::t('app', 'Shows a beautiful datepicker by adding the {className} class name to your fields', ['className' => '"ef-flatpickr"'])  . ')',
            // Intl-Tel-Input
            UrlHelper::removeScheme(Url::to('@web/static_files/js/ui-widgets/intl-tel-input.tel.js', true))
            => Yii::t('app', 'International Telephone Input') . ' (' . Yii::t('app', 'Shows a flag dropdown to any "Tel" input and displays a relevant placeholder')  . ')',
            // jQuery Mask
            UrlHelper::removeScheme(Url::to('@web/static_files/js/ui-widgets/jquery.mask.js', true))
            => Yii::t('app', 'jQuery Mask') . ' (' . Yii::t('app', 'Allows you to add "data-mask" custom attributes to specific fields, for example: data-mask="00/00/0000"', ['className' => '"krajee-star-rating"'])  . ')',
            // jQuery UI Datepicker
            UrlHelper::removeScheme(Url::to('@web/static_files/js/ui-widgets/jquery.ui.datepicker.date.js', true))
            => Yii::t('app', 'jQuery UI Datepicker') . ' (' . Yii::t('app', 'Shows this robust datepicker on any date field')  . ')',
            UrlHelper::removeScheme(Url::to('@web/static_files/js/ui-widgets/jquery.ui.datepicker.class.js', true))
            => Yii::t('app', 'jQuery UI Datepicker') . ' (' . Yii::t('app', 'Shows this widget by adding the {className} class name to specific fields', ['className' => '"ef-jquery-ui-datepicker"']) . ')',
            // Krajee File Input
            UrlHelper::removeScheme(Url::to('@web/static_files/js/ui-widgets/krajee.file-input.class.js', true))
            => Yii::t('app', 'Krajee File Input') . ' (' . Yii::t('app', 'Enable file preview, drag & drop canvas, multiple selection and more by adding the {className} class name to your file fields', ['className' => '"file"'])  . ')',
            // Krajee Star Rating
            UrlHelper::removeScheme(Url::to('@web/static_files/js/ui-widgets/krajee.star-rating.class.js', true))
            => Yii::t('app', 'Krajee Star Rating') . ' (' . Yii::t('app', 'Show a beautiful and flexible rating widget by adding the {className} class name to number fields', ['className' => '"rating"'])  . ')',
            // Select2
            UrlHelper::removeScheme(Url::to('@web/static_files/js/ui-widgets/select2.class.js', true))
            => Yii::t('app', 'Select2') . ' (' . Yii::t('app', 'A customizable select box widget with support for searching, tagging and more, by adding the {className} class name to select list fields', ['className' => '"select2"'])  . ')',
        ];
    }
}
