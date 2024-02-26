<?php

use yii\db\Schema;
use yii\db\Migration;

class m150420_183550_init_addon extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%addon}}', [
            'id' => Schema::TYPE_STRING . '(191) NOT NULL',
            'class' => Schema::TYPE_TEXT . ' NOT NULL',
            'name' => Schema::TYPE_TEXT . ' NOT NULL',
            'description' => Schema::TYPE_TEXT,
            'version' => Schema::TYPE_TEXT,
            'status' => Schema::TYPE_BOOLEAN . ' DEFAULT FALSE',
            'installed' => Schema::TYPE_BOOLEAN . ' DEFAULT FALSE',
        ], $tableOptions);

        $this->createIndex('id', '{{%addon}}', 'id', true);
    }

    public function safeDown()
    {
        $this->dropTable('{{%addon}}');
    }
}
