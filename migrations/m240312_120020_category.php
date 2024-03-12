<?php

use yii\db\Migration;

/**
 * Class m240312_120020_category
 */
class m240312_120020_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240312_120020_category cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'alias' => $this->string(),
        ]);
    }

    public function down()
    {
        $this->dropTable('category');
    }
    
}
