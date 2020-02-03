<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%magadres}}`.
 */
class m191004_092655_create_magadres_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%magadres}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%magadres}}');
    }
}
