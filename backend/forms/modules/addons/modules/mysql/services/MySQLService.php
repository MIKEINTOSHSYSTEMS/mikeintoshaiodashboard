<?php

namespace app\modules\addons\modules\mysql\services;

use Exception;
use Yii;

class MySQLService
{

    // DB Connection
    public $db_host = '127.0.0.1'; // Or 'localhost'
    public $db_port = 3306;
    public $db_name = 'test';
    public $db_user = 'root';
    public $db_pass = '';
    public $db_charset = 'utf8mb4';
    /** @var \yii\db\Connection */
    private $db;

    /**
     * MySQLService constructor.
     *
     * @param $host
     * @param $port
     * @param $name
     * @param $user
     * @param $pass
     * @param $charset
     * @throws Exception
     */
    public function __construct($host, $port, $name, $user, $pass, $charset)
    {
        if (empty($host) || empty($port) || empty($name) || empty($user) || empty($charset)) {
            throw new Exception('All the MySQL parameters are required.');
        }

        $this->db_host = $host;
        $this->db_port = $port;
        $this->db_name = $name;
        $this->db_user = $user;
        $this->db_pass = $pass;
        $this->db_charset = $charset;

        $this->openConnection();
    }

    /**
     * Create database configuration content
     * that will be saved in a file
     *
     * @return array
     */
    public function createDatabaseConfig()
    {
        $config = [];
        $config['class'] = 'yii\db\Connection';
        $config['dsn'] = 'mysql:host='.$this->db_host.';port='.$this->db_port.';dbname='.$this->db_name;
        $config['username'] = $this->db_user;
        $config['password'] = $this->db_pass;
        $config['charset'] = $this->db_charset;
        return $config;
    }

    /**
     * Open DB Connection
     */
    public function openConnection()
    {
        try {
            $this->db = Yii::createObject(
                $this->createDatabaseConfig()
            );
            $this->db->open();
        } catch (\Exception $e) {
            Yii::error($e);
            Yii::$app->session->setFlash('danger', Yii::t('app', 'Database connection error:') . ' ' . $e->getMessage());
        }
    }

    /**
     * Return DB Table Names
     *
     * @return array|false|string[]
     */
    public function getTableNames()
    {
        $names = $this->db->schema->getTableNames();
        return array_combine($names, $names);
    }

    /**
     * Get Column Names
     *
     * @param $table_name
     * @return array|false
     */
    public function getColumnNames($table_name)
    {
        $names = $this->db->schema->getTableSchema($table_name, true)->getColumnNames();
        return array_combine($names, $names);
    }

    /**
     * Insert record to database table
     *
     * @param $table
     * @param $data
     * @return int
     * @throws \yii\db\Exception
     */
    public function insert($table, $data) {
        return $this->db->createCommand()->insert($table, $data)->execute();
    }

}