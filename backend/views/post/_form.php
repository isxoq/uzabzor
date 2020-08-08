<?php

use yii\helpers\Html;
use yeesoft\multilingual\widgets\ActiveForm;
use mihaildev\elfinder\InputFile;
use mihaildev\elfinder\ElFinder;

use kartik\date\DatePicker;


/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php if (Yii::$app->session->hasFlash('message')) : ?>
        <div class="alert alert-info" role="alert">
            <?= Yii::$app->session->getFlash('message') ?>
        </div>
    <?php endif; ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->languageSwitcher($model); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea() ?>

    <?= $form->field($model, 'youtube_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'views')->textInput() ?>



    <?=  $form->field($model, 'image')->widget(InputFile::className(), [
    'language'      => 'ru',
    'controller'    => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
    'path' => 'image', // будет открыта папка из настроек контроллера с добавлением указанной под деритории 
    'filter'        => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
    'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
    'options'       => ['class' => 'form-control'],
    'buttonOptions' => ['class' => 'btn btn-default'],
    'multiple'      => false       // возможность выбора нескольких файлов
]); ?>

    

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'sponsored')->textInput() ?>

    <?= $form->field($model, 'trending')->textInput() ?>

    <!-- <?= $form->field($model, 'created_at')->textInput() ?> -->

    <!-- <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>