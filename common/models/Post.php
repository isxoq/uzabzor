<?php

namespace common\models;

use Yii;

use yeesoft\multilingual\behaviors\MultilingualBehavior;
use yeesoft\multilingual\db\MultilingualLabelsTrait;
use yeesoft\multilingual\db\MultilingualQuery;



/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string|null $slug
 * @property string|null $youtube_link
 * @property string|null $video_link
 * @property int|null $views
 * @property string|null $image
 * @property int|null $type
 * @property int|null $sponsored
 * @property int|null $trending
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property PostLang[] $postLangs
 */
class Post extends \yii\db\ActiveRecord
{
    use MultilingualLabelsTrait;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
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
                    'title', 'content',
                ]
            ],
            
            [
                'class' => \yii\behaviors\SluggableBehavior::class,
                'attribute' => 'title_uz',
                'slugAttribute'=>"slug",
            ],
            // multilanguage uchun yuqori va pastdagilar 
            [
            'class'=>yii\behaviors\TimestampBehavior::className(),
            ],
                
           









        ];
    }



    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'title', 'content'],'string'],
            [['views', 'type', 'sponsored', 'trending', 'created_at', 'updated_at'], 'integer'],
            [['slug'], 'string', 'max' => 127],
            [['youtube_link', 'video_link'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 200],
        ];
    }

   


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'slug' => Yii::t('app', 'Slug'),
            'youtube_link' => Yii::t('app', 'Youtube Link'),
            'video_link' => Yii::t('app', 'Video Link'),
            'views' => Yii::t('app', 'Views'),
            'image' => Yii::t('app', 'Image'),
            'type' => Yii::t('app', 'Type'),
            'sponsored' => Yii::t('app', 'Sponsored'),
            'trending' => Yii::t('app', 'Trending'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    public static function find()
    {
        $nn = new MultilingualQuery(get_called_class());
        return $nn;
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPostLangs()
    {
        return $this->hasMany(PostLang::className(), ['owner_id' => 'id']);
    }
}
