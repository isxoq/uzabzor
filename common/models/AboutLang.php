<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about_lang".
 *
 * @property int $id
 * @property int $owner_id
 * @property string $language
 * @property string|null $address
 * @property string|null $about_us
 *
 * @property About $owner
 */
class AboutLang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about_lang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['owner_id', 'language'], 'required'],
            [['owner_id'], 'integer'],
            [['language'], 'string', 'max' => 6],
            [['address', 'about_us'], 'string', 'max' => 255],
            [['owner_id'], 'exist', 'skipOnError' => true, 'targetClass' => About::className(), 'targetAttribute' => ['owner_id' => 'id']],
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
            'address' => Yii::t('app', 'Address'),
            'about_us' => Yii::t('app', 'About Us'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwner()
    {
        return $this->hasOne(About::className(), ['id' => 'owner_id']);
    }
}
