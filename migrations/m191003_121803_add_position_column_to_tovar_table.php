<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%tovar}}`.
 */
class m191003_121803_add_position_column_to_tovar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%tovar}}', 'position', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%tovar}}', 'position');
    }
}
