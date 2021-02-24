<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 * https://www.yiiframework.com/doc/api/2.0/yii-db-schemabuildertrait
 */
class m210224_121649_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
