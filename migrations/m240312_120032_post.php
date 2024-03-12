<?php

use yii\behaviors\TimestampBehavior;
use yii\db\Migration;

/**
 * Class m240312_120032_post
 */
class m240312_120032_post extends Migration
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
        echo "m240312_120032_post cannot be reverted.\n";

        return false;
    }

    public function behaviors()
    {
        TimestampBehavior::class;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this ->createTable('post', [
            'id' => $this ->primaryKey(),
            'category_id' => $this ->integer(),
            'title' => $this ->string(),
            'exerpt' => $this ->text(),
            'content' => $this ->text(),
            'img' => $this ->string(),
            'created_at' => $this ->timestamp(),
            'keywords' => $this ->string(),
            'description' => $this ->string(),
        ]);
    }

    public function down()
    {
        $this ->dropTable('post');
    }
    
}
