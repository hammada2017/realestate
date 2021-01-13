<?php

use yii\db\Migration;

/**
 * Class m201227_131610_add_column_expire_at_to_user
 */
class m201227_131610_add_column_expire_at_to_user extends Migration
{
    public function up()
    {
        $ret = $this->db->createCommand("SELECT * FROM information_schema.columns WHERE table_schema = DATABASE()  AND table_name = 'user' AND column_name = 'expire_at'")->queryOne();
        if (empty($ret)) {
            $this->addColumn('user', 'expire_at', $this->integer(11)->defaultValue(NULL)->comment('token expiration time'));
        }
    }

    public function down()
    {
        $this->dropColumn('user', 'expire_at');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201227_131610_add_column_expire_at_to_user cannot be reverted.\n";

        return false;
    }
    */
}
