<?php

use yii\db\Migration;

/**
 * Class m200627_224958_update_to_1_2
 */
class m200627_224958_update_to_1_2 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Add Conditional logic fields
        $this->addColumn('{{%addon_mysql}}', 'name', $this->text()->notNull()->after('status'));
        $this->addColumn('{{%addon_mysql}}', 'event', $this->integer()->notNull()->defaultValue(1)->after('name'));
        $this->addColumn('{{%addon_mysql}}', 'conditions', $this->text()->after('event'));

        // Add foreign column to fields
        $this->addColumn('{{%addon_mysql_field}}', 'mysql_id', $this->integer(11)->notNull()->after('id'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%addon_mysql_field}}', 'mysql_id');

        $this->dropColumn('{{%addon_mysql}}', 'event');
        $this->dropColumn('{{%addon_mysql}}', 'conditions');
        $this->dropColumn('{{%addon_mysql}}', 'name');
    }

}
