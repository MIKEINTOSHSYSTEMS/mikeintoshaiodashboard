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

namespace app\modules\setup\models\forms;

use Yii;
use yii\base\Model;
use app\modules\setup\helpers\Setup;

/**
 * Database Configuration form
 */
class DbForm extends Model
{
    // DB Connection
    public $db_host = '127.0.0.1'; // Or 'localhost'
    public $db_port = 3306;
    public $db_name = 'easy_forms';
    public $db_user = 'root';
    public $db_pass = '';
    // DB App
    public $tablePrefix = '';
    public $charset = 'utf8mb4';
    public $enableSchemaCache = true;
    public $schemaCacheDuration = 86400;
    public $schemaCache = 'cache';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['db_host', 'db_name', 'db_user', 'schemaCache'], 'required'],
            [['db_pass', 'tablePrefix'], 'string'],
            [['db_port'], 'filter', 'filter' => 'intval'],
            [['db_port'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'db_host' => Yii::t('app', 'Database Host'),
            'db_name' => Yii::t('app', 'Database Name'),
            'db_user' => Yii::t('app', 'Database Username'),
            'db_pass' => Yii::t('app', 'Database Password'),
            'db_port' => Yii::t('app', 'Database Port Number'),
            'tablePrefix' => Yii::t('app', 'Table Prefix'),
        ];
    }

    /**
     * @return bool If connection ok?
     */
    public function test()
    {
        $config = Setup::createDatabaseConfig($this->getAttributes());

        $result = false;

        try {

            /** @var \yii\db\Connection $dbComponent */
            $dbComponent = Yii::createObject(
                $config
            );

            $dbComponent->open();
            $result = true;

        } catch (\Exception $e) {
            Yii::$app->session->setFlash('danger', Yii::t('app', 'Database connection error:') . ' ' . $e->getMessage());
        }

        return $result;
    }
}
