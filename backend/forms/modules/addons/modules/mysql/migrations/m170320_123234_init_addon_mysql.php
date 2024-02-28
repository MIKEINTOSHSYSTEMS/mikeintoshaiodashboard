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

use yii\db\Migration;

class m170320_123234_init_addon_mysql extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%addon_mysql}}', [
            // Basic Settings
            'id' => $this->primaryKey(),
            'form_id' => $this->integer(11)->notNull(),
            'status' => $this->boolean()->notNull()->defaultValue(0),

            // MySQL DB Info
            'db_host' => $this->text()->notNull(),
            'db_port' => $this->integer()->notNull()->defaultValue(3306),
            'db_name' => $this->text()->notNull(),
            'db_user' => $this->text()->notNull(),
            'db_pass' => $this->text(),
            'db_charset' => $this->string(191)->notNull()->defaultValue('utf8mb4'),
            'db_table' => $this->text()->notNull(),

            // Settings
            'opt_in' => $this->boolean()->defaultValue(0),
            'opt_in_field' => $this->text(),

            'created_by' => $this->integer(11)->notNull(),
            'updated_by' => $this->integer(11)->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%addon_mysql_field}}', [
            'id' => $this->primaryKey(),
            'form_id' => $this->integer(11),
            'form_field' => $this->text(),
            'table_column' => $this->text(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%addon_mysql_field}}');
        $this->dropTable('{{%addon_mysql}}');
    }
}
