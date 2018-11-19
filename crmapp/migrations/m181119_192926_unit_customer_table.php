<?php

use yii\db\Migration;

/**
 * Class m181119_192926_unit_customer_table
 */
class m181119_192926_unit_customer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'customer',
            [
                'id' => 'pk',
                'name' => 'string',
                'birth_date' => 'date',
                'notes' => 'text',
            ],
            'ENGINE=InnoDB'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181119_192926_unit_customer_table cannot be reverted.\n";
        $this->dropTable('customer');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181119_192926_unit_customer_table cannot be reverted.\n";

        return false;
    }
    */
}
