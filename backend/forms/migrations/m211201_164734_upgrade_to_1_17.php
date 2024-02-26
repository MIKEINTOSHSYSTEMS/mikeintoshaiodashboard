<?php

use yii\db\Migration;

/**
 * Class m211201_164734_upgrade_to_1_17
 */
class m211201_164734_upgrade_to_1_17 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%form_email}}', 'event', $this->text());
        $this->addColumn('{{%form}}', 'total_limit_action', $this->tinyInteger(1)->defaultValue(0)->after('total_limit_time_unit'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('{{%form_email}}', 'event', $this->integer()->notNull()->defaultValue(1));
        $this->dropColumn('{{%form}}', 'total_limit_action');
    }
}
