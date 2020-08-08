<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about}}`.
 */
class m200808_132105_create_about_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%about}}', [
            'id' => $this->primaryKey(),
            'slug' => $this->string(127),
            'logo' => $this->string(200),
            'phone_1' => $this->string(100),
            'phone_2' => $this->string(100),
            'email' => $this->string(),
            'telegram' => $this->string(100),
            'youtube' => $this->string(100),
            'instagram' => $this->string(100),
            'facebook' => $this->string(100),
            'twitter' => $this->string(100),
            'odnoklassniki' => $this->string(100),




            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%about_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),


            'address' => $this->string(255),
            'about_us' => $this->string(255),
        ], $tableOptions);

        $this->addForeignKey('fk_about_lang', '{{%about_lang}}', 'owner_id', '{{%about}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_about_lang', '{{%about_lang}}');
        $this->dropTable('{{%about_lang}}');
        $this->dropTable('{{%about}}');
    }

}
