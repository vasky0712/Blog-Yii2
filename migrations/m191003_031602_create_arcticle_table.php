<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%arcticle}}`.
 */
class m191003_031602_create_arcticle_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%arcticle}}', [
            'id' => $this->primaryKey(),
            'date' => $this->date(),
            'title' => $this->string(),
            'content' => $this->string(),
            'user_id' => $this->integer(),
            'author' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%arcticle}}');
    }
}
