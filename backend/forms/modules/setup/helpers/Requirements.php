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

namespace app\modules\setup\helpers;

use Yii;
use app\components\console\Console;

class Requirements
{
    /**
     * Return all requirements
     *
     * @return array
     */
    public static function all()
    {
        return array(
            // System
            array(
                'name' => Yii::t('app', 'PHP version'),
                'mandatory' => true,
                'condition' => version_compare(PHP_VERSION, '7.2.0', '>='),
                'by' => Yii::t('app', 'Core'),
                'memo' => PHP_VERSION . '. '. Yii::t('app', 'PHP 7.2.0 or higher is required.'),
            ),
            array(
                'name' => Yii::t('app', 'Reflection extension'),
                'mandatory' => true,
                'condition' => class_exists('Reflection', false),
                'by' => Yii::t('app', 'Core'),
            ),
            array(
                'name' => Yii::t('app', 'PCRE extension'),
                'mandatory' => true,
                'condition' => extension_loaded('pcre'),
                'by' => Yii::t('app', 'Core'),
            ),
            array(
                'name' => Yii::t('app', 'SPL extension'),
                'mandatory' => true,
                'condition' => extension_loaded('SPL'),
                'by' => Yii::t('app', 'Core'),
            ),
            array(
                'name' => Yii::t('app', 'Ctype extension'),
                'mandatory' => true,
                'condition' => extension_loaded('ctype'),
                'by' => Yii::t('app', 'Core'),
            ),
//            array(
//                'name' => Yii::t('app', 'PHP CLI'),
//                'mandatory' => false,
//                'condition' => Console::validPhpCliVersion(),
//                'by' => '<a href="http://php.net/manual/en/features.commandline.introduction.php">CLI SAPI</a>',
//            ),
            array(
                'name' => Yii::t('app', 'MBString extension'),
                'mandatory' => true,
                'condition' => extension_loaded('mbstring'),
                'by' => '<a href="http://www.php.net/manual/en/book.mbstring.php">Multibyte string</a> processing',
                'memo' => Yii::t('app', 'Required for multibyte encoding string processing.')
            ),
            array(
                'name' => Yii::t('app', 'Fileinfo extension'),
                'mandatory' => false,
                'condition' => extension_loaded('fileinfo'),
                'by' => '<a href="http://www.php.net/manual/en/book.fileinfo.php">File Information</a>',
                'memo' => Yii::t('app', 'Required for files upload to detect correct file mime-types.')
            ),
            array(
                'name' => Yii::t('app', 'DOM extension'),
                'mandatory' => true,
                'condition' => extension_loaded('dom'),
                'by' => '<a href="http://php.net/manual/en/book.dom.php">Document Object Model</a>',
                'memo' => Yii::t('app', 'Required by Form Builder and REST API.')
            ),
            array(
                'name' => Yii::t('app', 'JSON extension'),
                'mandatory' => true,
                'condition' => extension_loaded('json'),
                'by' => '<a href="http://php.net/manual/en/book.json.php">JavaScript Object Notation</a>',
                'memo' => Yii::t('app', 'Required by Form Builder and REST API.')
            ),
            array(
                'name' => Yii::t('app', 'PDO extension'),
                'mandatory' => true,
                'condition' => extension_loaded('pdo'),
                'by' => Yii::t('app', 'All DB-related'),
            ),
            array(
                'name' => Yii::t('app', 'PDO MySQL extension'),
                'mandatory' => true,
                'condition' => extension_loaded('pdo_mysql'),
                'by' => Yii::t('app', 'All DB-related'),
                'memo' => Yii::t('app', 'Required for MySQL database.'),
            ),
            array(
                'name' => Yii::t('app', 'Curl extension'),
                'mandatory' => false,
                'condition' => extension_loaded('curl'),
                'by' => 'Add-ons',
                'memo' => 'Required for Third party application integration services.'
            ),
            array(
                'name' => Yii::t('app', 'Zip extension'),
                'mandatory' => false,
                'condition' => extension_loaded('ZIP'),
                'by' => Yii::t('app', 'Core'),
                'memo' => 'Required to download the HTML code of your forms.'
            ),
            array(
                'name' => Yii::t('app', 'Intl extension'),
                'mandatory' => false,
                'condition' => extension_loaded('intl'),
                'by' => Yii::t('app', 'Core'),
                'memo' => 'Required for i18n.'
            ),
            array(
                'name' => Yii::t('app', 'Iconv extension'),
                'mandatory' => false,
                'condition' => extension_loaded('iconv'),
                'by' => Yii::t('app', 'Core'),
                'memo' => 'Required for i18n.'
            ),
            array(
                'name' => Yii::t('app', 'OpenSSL extension'),
                'mandatory' => false,
                'condition' => extension_loaded('openssl'),
                'by' => Yii::t('app', 'Core'),
                'memo' => 'Required by security features.'
            ),
            array(
                'name' => Yii::t('app', 'XMLWriter extension'),
                'mandatory' => false,
                'condition' => extension_loaded('xmlwriter'),
                'by' => Yii::t('app', 'Core'),
                'memo' => 'Required for exporting entries as MS Excel.'
            ),
            // Files
            array(
                'name' => Yii::t('app', 'Runtime Directory'),
                'mandatory' => true,
                'condition' => is_writable(Yii::getAlias('@app/runtime')),
                'by' => Yii::t('app', 'File System'),
                'memo' => Yii::t('app', "The '{directory}' directory must be writable by the web server (chmod -R 0755).", ['directory' => '/runtime']),
            ),
            array(
                'name' => Yii::t('app', 'Assets Directory'),
                'mandatory' => true,
                'condition' => is_writable(Yii::getAlias('@app/assets')),
                'by' => Yii::t('app', 'File System'),
                'memo' => Yii::t('app', "The '{directory}' directory must be writable by the web server (chmod -R 0755).", ['directory' => '/assets']),
            ),
            array(
                'name' => Yii::t('app', 'Static Files Directory'),
                'mandatory' => true,
                'condition' => is_writable(Yii::getAlias('@app/static_files')),
                'by' => Yii::t('app', 'File System'),
                'memo' => Yii::t('app', "The '{directory}' directory must be writable by the web server (chmod -R 0755).", ['directory' => '/static_files']),
            ),
            array(
                'name' => Yii::t('app', 'Database Config File'),
                'mandatory' => true,
                'condition' => Setup::checkDatabaseConfigFilePermissions(),
                'by' => Yii::t('app', 'File System'),
                'memo' => Yii::t('app', "The database config file '/config/db.php' must be writable by the web server (chmod 0755)."),
            ),
        );
    }
}
