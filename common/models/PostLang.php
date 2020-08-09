<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post_lang".
 *
 * @property int $id
 * @property int $owner_id
 * @property string $language
 * @property string $title
 * @property string|null $content
 *
 * @property Post $owner
 */
class PostLang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post_lang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['owner_id', 'language', 'title'], 'required'],
            [['owner_id'], 'integer'],
            [['content'], 'string'],
            [['language'], 'string', 'max' => 6],
            [['title'], 'string', 'max' => 255],
            [['owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => Post::className(), 'targetAttribute' => ['owner_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'owner_id' => Yii::t('app', 'Owner ID'),
            'language' => Yii::t('app', 'Language'),
            'title' => Yii::t('app', 'Title'),
            'content' => Yii::t('app', 'Content'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(Post::className(), ['id' => 'owner_id']);
    }
}
