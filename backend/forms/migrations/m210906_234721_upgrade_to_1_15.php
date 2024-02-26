<?php

use yii\db\Migration;

/**
 * Class m210906_234721_upgrade_to_1_15
 */
class m210906_234721_upgrade_to_1_15 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Load JS Widgets
        $this->alterColumn('{{%form_ui}}', 'js_file', $this->text());

        // TODO Compatibility

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('{{%form_ui}}', 'js_file', $this->text());
    }
}
