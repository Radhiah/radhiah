<?php

use yii\db\Migration;

/**
 * Class m230526_025746_mahasiswa028
 */
class m230526_025746_mahasiswa028 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa028}}', [
            'id' => $this->primarykey(),
            'nim' => $this->string(15)->notNull()->unique(),
            'nama' => $this->string(50)->notNull(),
            'jurusan' => $this->string()->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa028}}');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230526_025746_mahasiswa028 cannot be reverted.\n";

        return false;
    }
    */
}
