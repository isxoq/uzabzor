<?php

namespace common\models;

use Yii;

use yeesoft\multilingual\behaviors\MultilingualBehavior;
use yeesoft\multilingual\db\MultilingualLabelsTrait;
use yeesoft\multilingual\db\MultilingualQuery;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string|null $slug
 * @property string|null $logo
 * @property string|null $phone_1
 * @property string|null $phone_2
 * @property string|null $email
 * @property string|null $telegram
 * @property string|null $youtube
 * @property string|null $instagram
 * @property string|null $facebook
 * @property string|null $twitter
 * @property string|null $odnoklassniki
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property AboutLang[] $aboutLangs
 */
class About extends \yii\db\ActiveRecord
{
    use MultilingualLabelsTrait;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }
     
    public function behaviors()
    {
        return [
            'multilingual' => [
                'class' => MultilingualBehavior::className(),
                'languages' => [
                    'en' => 'English',
                    'uz' => 'Uzbek',
                    'ru' => 'Русский',
                ],
                'attributes' => [
                    'address', 'about_us',
                ]
            ],
        
            [
                'class'=>yii\behaviors\TimestampBehavior::className(),
            ],

            [
                'class' => SluggableBehavior::class,
                'attribute' => 'address_uz',
                'slugAttribute'=>"slug",
            ],
    ];
    }

   

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address','about_us'],'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['slug'], 'string', 'max' => 127],
            [['logo'], 'string', 'max' => 200],
            [['phone_1', 'phone_2', 'telegram', 'youtube', 'instagram', 'facebook', 'twitter', 'odnoklassniki'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function find()
    {
        $mm = new MultilingualQuery(get_called_class());
        return $mm;
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'slug' => Yii::t('app', 'Slug'),
            'logo' => Yii::t('app', 'Logo'),
            'phone_1' => Yii::t('app', 'Phone 1'),
            'phone_2' => Yii::t('app', 'Phone 2'),
            'email' => Yii::t('app', 'Email'),
            'telegram' => Yii::t('app', 'Telegram'),
            'youtube' => Yii::t('app', 'Youtube'),
            'instagram' => Yii::t('app', 'Instagram'),
            'facebook' => Yii::t('app', 'Facebook'),
            'twitter' => Yii::t('app', 'Twitter'),
            'odnoklassniki' => Yii::t('app', 'Odnoklassniki'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAboutLangs()
    {
        return $this->hasMany(AboutLang::className(), ['owner_id' => 'id']);
    }
}
