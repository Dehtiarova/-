<?php

use yii\db\Migration;

/**
 * Class m230116_221604_add_date_to_comment
 */
class m230116_221604_add_date_to_comment extends Migration
{
    public function up()
    {
        $this->addColumn('comment','date', $this->date());
    }

    public function down()
    {
        $this->dropColumn('comment','date');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    public function safeDown()
    {
    }
    */
}
