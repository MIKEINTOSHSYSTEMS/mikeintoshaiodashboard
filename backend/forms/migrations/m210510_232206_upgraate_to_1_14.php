<?php

use yii\db\Migration;

/**
 * Class m210510_232206_upgraate_to_1_14
 */
class m210510_232206_upgraate_to_1_14 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /**
         * Form Settings
         */
        $this->addColumn('{{%form}}', 'submission_timezone', $this->string(45)->after('submission_editable_time_unit'));
        $this->addColumn('{{%form}}', 'submission_dateformat', $this->string(45)->after('submission_timezone'));

        /**
         * Templates
         */
        $this->addColumn('{{%template}}', 'version', $this->string(10)->after('html'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        /**
         * Form Settings
         */
        $this->dropColumn('{{%form}}', 'submission_timezone');
        $this->dropColumn('{{%form}}', 'submission_dateformat');

        /**
         * Templates
         */
        $this->dropColumn('{{%template}}', 'version');

    }

}
