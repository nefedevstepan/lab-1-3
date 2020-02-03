<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tovar}}`.
 */
class m191003_121519_create_tovar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tovar}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'body' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tovar}}');
    }
}
