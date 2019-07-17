<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%subscribers}}`.
 */
class m190717_124830_create_subscribers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subscribers}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->unique()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%subscribers}}');
    }
}
