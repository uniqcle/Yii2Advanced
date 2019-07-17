<?php

use yii\db\Migration;

/**
 * Class m190717_141805_change_columns_subscribers
 */
class m190717_141805_change_columns_subscribers extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('subscribers', 'name', $this->string(255));
        $this->alterColumn('subscribers', 'email', $this->string(255)->notNull() );
        $this->addColumn('subscribers', 'status', $this->integer(3) );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190717_141805_change_columns_subscribers cannot be reverted.\n";

        return false;
    }
 
}
