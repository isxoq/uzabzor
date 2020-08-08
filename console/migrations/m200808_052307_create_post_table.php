<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m200808_052307_create_post_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'slug' => $this->string(127),
            'youtube_link'=>$this->string(255),
            'video_link'=>$this->string(255),
            'views' => $this->integer(3),
            'image' => $this->string(200),
            'type' =>$this->smallInteger(),
            'sponsored' =>$this->smallInteger(),
            'trending' =>$this->smallInteger(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%post_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),

            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_post_lang', '{{%post_lang}}', 'owner_id', '{{%post}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_post_lang', '{{%post_lang}}');
        $this->dropTable('{{%post_lang}}');
        $this->dropTable('{{%post}}');
    }
}
