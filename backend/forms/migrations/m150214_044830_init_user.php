<?php

use yii\db\Schema;
use yii\db\Migration;

class m150214_044830_init_user extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci ENGINE=InnoDB';
        }

        // create tables. note the specific order
        $this->createTable('{{%role}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_TEXT . ' not null',
            'create_time' => Schema::TYPE_TIMESTAMP . ' null default null',
            'update_time' => Schema::TYPE_TIMESTAMP . ' null default null',
            'can_admin' => Schema::TYPE_SMALLINT . ' not null default 0',
        ], $tableOptions);
        $this->createTable('{{%user}}', [
            'id' => Schema::TYPE_PK,
            'role_id' => Schema::TYPE_INTEGER . ' not null',
            'status' => Schema::TYPE_SMALLINT . ' not null',
            'email' => Schema::TYPE_TEXT . ' null default null',
            'new_email' => Schema::TYPE_TEXT . ' null default null',
            'username' => Schema::TYPE_TEXT . ' null default null',
            'password' => Schema::TYPE_TEXT . ' null default null',
            'auth_key' => Schema::TYPE_TEXT . ' null default null',
            'api_key' => Schema::TYPE_TEXT . ' null default null',
            'login_ip' => Schema::TYPE_TEXT . ' null default null',
            'login_time' => Schema::TYPE_TIMESTAMP . ' null default null',
            'create_ip' => Schema::TYPE_TEXT . ' null default null',
            'create_time' => Schema::TYPE_TIMESTAMP . ' null default null',
            'update_time' => Schema::TYPE_TIMESTAMP . ' null default null',
            'ban_time' => Schema::TYPE_TIMESTAMP . ' null default null',
            'ban_reason' => Schema::TYPE_TEXT . ' null default null',
        ], $tableOptions);
        $this->createTable('{{%user_key}}', [
            'id' => Schema::TYPE_PK,
            'user_id' => Schema::TYPE_INTEGER . ' not null',
            'type' => Schema::TYPE_SMALLINT . ' not null',
            'key_value' => Schema::TYPE_TEXT . ' not null',
            'create_time' => Schema::TYPE_TIMESTAMP . ' null default null',
            'consume_time' => Schema::TYPE_TIMESTAMP . ' null default null',
            'expire_time' => Schema::TYPE_TIMESTAMP . ' null default null',
        ], $tableOptions);
        $this->createTable('{{%profile}}', [
            'id' => Schema::TYPE_PK,
            'user_id' => Schema::TYPE_INTEGER . ' not null',
            'create_time' => Schema::TYPE_TIMESTAMP . ' null default null',
            'update_time' => Schema::TYPE_TIMESTAMP . ' null default null',
            'full_name' => Schema::TYPE_TEXT . ' null default null',
            'company' => Schema::TYPE_TEXT . ' null default null',
            'avatar' => Schema::TYPE_TEXT . ' null default null',
            'timezone' => Schema::TYPE_TEXT . ' null default null',
            'language' => Schema::TYPE_TEXT . ' null default null',
        ], $tableOptions);
        $this->createTable('{{%user_auth}}', [
            'id' => Schema::TYPE_PK,
            'user_id' => Schema::TYPE_INTEGER . ' not null',
            'provider' => Schema::TYPE_TEXT . ' not null',
            'provider_id' => Schema::TYPE_TEXT . ' not null',
            'provider_attributes' => Schema::TYPE_TEXT . ' not null',
            'create_time' => Schema::TYPE_TIMESTAMP . ' null default null',
            'update_time' => Schema::TYPE_TIMESTAMP . ' null default null'
        ], $tableOptions);

        // insert role data
        $columns = ['name', 'can_admin', 'create_time'];
        $this->batchInsert('{{%role}}', $columns, [
            ['Admin', 1, date('Y-m-d H:i:s')],
            ['User', 0, date('Y-m-d H:i:s')],
        ]);

    }

    public function safeDown()
    {
        // drop tables in reverse order (for foreign key constraints)
        $this->dropTable('{{%user_auth}}');
        $this->dropTable('{{%profile}}');
        $this->dropTable('{{%user_key}}');
        $this->dropTable('{{%user}}');
        $this->dropTable('{{%role}}');
    }
}
