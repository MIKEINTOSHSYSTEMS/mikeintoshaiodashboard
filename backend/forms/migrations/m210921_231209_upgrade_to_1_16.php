<?php

use yii\db\Migration;

/**
 * Class m210921_231209_upgrade_to_1_16
 */
class m210921_231209_upgrade_to_1_16 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci ENGINE=InnoDB';
        }

        // Folders
        $this->createTable('{{%folder}}', [
            'id' => $this->primaryKey(),

            // Settings
            'name' => $this->string(191),
            'description' => $this->text(),
            'status' => $this->boolean()->notNull()->defaultValue(1),

            // Additional Settings
            'created_by' => $this->integer(11),
            'updated_by' => $this->integer(11),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], $tableOptions);

        // Form Folders
        $this->createTable('{{%form_folder}}', [
            'form_id' => $this->integer(),
            'folder_id' => $this->integer(),

            // Additional Settings
            'created_by' => $this->integer(11),
            'updated_by' => $this->integer(11),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], $tableOptions);

        $this->createIndex("{{%form_folder_form_id}}", "{{%form_folder}}", "form_id");
        $this->createIndex("{{%form_folder_folder_id}}", "{{%form_folder}}", "folder_id");
        $this->createIndex("{{%form_folder_form_id_folder_id}}", "{{%form_folder}}", ["form_id", "folder_id"], true);
        $this->addForeignKey('fk_form_folder', '{{%form_folder}}', 'form_id', '{{%form}}', 'id', 'NO ACTION', 'NO ACTION');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_form_folder', '{{%form_folder}}');
        $this->dropTable('{{%form_folder}}');
        $this->dropTable('{{%folder}}');
    }
}
