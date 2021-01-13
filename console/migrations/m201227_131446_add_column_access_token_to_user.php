<?php

use yii\db\Migration;

/**
 * Class m201227_131446_add_column_access_token_to_user
 */
class m201227_131446_add_column_access_token_to_user extends Migration
{
    public function up()
    {
        $ret = $this->db->createCommand("SELECT * FROM information_schema.columns WHERE table_schema = DATABASE() AND table_name = 'user' AND column_name = 'access_token'")->queryOne();//Judge user table Is there a 'access_token' field?
        if (empty($ret)) {
            $this->addColumn('user', 'access_token', $this->string(255)->defaultValue(NULL)->comment('token'));
        }
    }

    public function down()
    {
        $this->dropColumn('user', 'access_token');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201227_131446_add_column_access_token_to_user cannot be reverted.\n";

        return false;
    }
    */
}
