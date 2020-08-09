<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;


$this->registerJsFile("https://maps.googleapis.com/maps/api/js?key=AIzaSyDnh74UN6BKgq9U5fMNGhdZOSpmM_QnZqs");

?>


<!-- <div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div> -->

   <!-- Start Page Banner -->
   <div class="page-banner-area page-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-banner">
                        <div class="page-title">
                            <h2>Contact</h2>
                        </div>
                        <div class="page-breadcrumb">
                            <p><a href="index.html">home</a> / Contact</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->
    <!-- Start Contat Page -->
    <div class="contact-page-area themeix-ptb themeix-info"> 
    <div class="container">
        <div class="row">
         <div class="col-md-6">
         <div class="row">
             <div class="col-md-12">
              <div class="themeix-section-h">
                  <span class="heading-icon"><i class="fa fa-envelope"></i></span>
                  <h3>send Message</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
              </div>
             </div>
         </div>

          <div class="contact-form">
              <form action="#" method="post" class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="text" name="name" id="name" class="form-control" placeholder="name" required>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="email" name="email" id="email" class="form-control" placeholder="Email *" required>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone *" required >
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="text" name="website" id="website" class="form-control" placeholder="Website *" required>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="form-group">
                          <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
                      </div>
                  </div>
                  <div class="col-md-4">
                       <div class="form-group">
                           <button type="submit" class="themeix-btn-danger text-uppercase">Send Message</button>
                       </div>
                  </div>
              </form> 
          </div>
         
         </div>
         <!-- Start Contact Page Video -->
         <div class="col-md-6">
             <div class="contact-video">
                <div id="map-id"></div>
             </div>
         </div>
         <!-- End Contact Page Video -->
        </div>
    </div>

    </div>

    <!-- End Contact Page -->
    <!-- Start Video Carousel -->
    <div class="video-carousel-area themeix-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="themeix-section-h">
                        <span class="heading-icon"><i class="fa fa-copy"></i></span>
                        <h3>Related Videos</h3>
                    </div>
                    <div class="video-carousel owl-carousel">
                        <div class="single-video">
                            <div class="video-img">
                                <a href="single-video.html">
                                    <img class="lazy" data-src="<?=Url::base('http')?>/frontend/web/images/thumbnails/28.jpg" alt="Video" />
                                     <noscript>
                                        <img src="<?=Url::base('http')?>/frontend/web/images/thumbnails/28.jpg" alt="video" />
                                    </noscript>
                                </a>
                                <span class="video-duration">5.28</span>
                            </div>
                            <div class="video-content">
                                <h4><a href="single-video.html" class="video-title">Funny videos 2016 funny pranks try not to laugh challenge</a></h4>
                                <div class="video-counter">
                                    <div class="video-viewers">
                                        <span class="fa fa-eye view-icon"></span>
                                        <span>241,021</span>
                                    </div>
                                    <div class="video-feedback">
                                        <div class="video-like-counter">
                                            <span class="far fa-thumbs-up like-icon"></span>
                                            <span>2140</span>
                                        </div>
                                        <div class="video-like-counter">
                                            <span class="far fa-thumbs-down dislike-icon"></span>
                                            <span>2140</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-video">
                            <div class="video-img">
                                <a href="single-video.html">
                                <img class="lazy" data-src="<?=Url::base('http')?>/frontend/web/images/thumbnails/2.jpg" alt="Video" />
                                 <noscript>
                                    <img src="<?=Url::base('http')?>/frontend/web/images/thumbnails/2.jpg" alt="video" />
                                </noscript>
                                </a>
                                <span class="video-duration">3.11</span>
                            </div>
                            <div class="video-content">
                                <h4><a href="single-video.html" class="video-title">Double Chocolate-Stuffed Mini Churros </a></h4>
                                <div class="video-counter">
                                    <div class="video-viewers">
                                        <span class="fa fa-eye view-icon"></span>
                                        <span>241,021</span>
                                    </div>
                                    <div class="video-feedback">
                                        <div class="video-like-counter">
                                            <span class="far fa-thumbs-up like-icon"></span>
                                            <span>996</span>
                                        </div>
                                        <div class="video-like-counter">
                                           <span class="far fa-thumbs-down dislike-icon"></span>
                                            <span>2140</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-video">
                            <div class="video-img">
                                <a href="single-video.html">
                                <img class="lazy" data-src="<?=Url::base('http')?>/frontend/web/images/thumbnails/23.jpg" alt="Video" />
                                 <noscript>
                                    <img src="<?=Url::base('http')?>/frontend/web/images/thumbnails/23.jpg" alt="video" />
                                </noscript>
                                </a>
                                <span class="video-duration">5.10</span>
                            </div>
                            <div class="video-content">
                                <h4><a href="single-video.html" class="video-title">Greek-Style Pasta Bake (Pasticcio - English Recipe)</a></h4>
                                <div class="video-counter">
                                    <div class="video-viewers">
                                        <span class="fa fa-eye view-icon"></span>
                                        <span>241,021</span>
                                    </div>
                                    <div class="video-feedback">
                                        <div class="video-like-counter">
                                            <span class="far fa-thumbs-up like-icon"></span>
                                            <span>785</span>
                                        </div>
                                        <div class="video-like-counter">
                                            <span class="far fa-thumbs-down dislike-icon"></span>
                                            <span>2140</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-video">
                            <div class="video-img">
                                <a href="single-video.html">
                                <img class="lazy" data-src="<?=Url::base('http')?>/frontend/web/images/thumbnails/4.jpg" alt="Video" />
                                 <noscript>
                                    <img src="<?=Url::base('http')?>/frontend/web/images/thumbnails/4.jpg" alt="video" />
                                </noscript>
                                </a>
                                <span class="video-duration">2.29</span>
                            </div>
                            <div class="video-content">
                                <h4><a href="single-video.html" class="video-title">Rainbow Sprinkle Cinnamon Rolls (Gougeres Video)</a></h4>
                                <div class="video-counter">
                                    <div class="video-viewers">
                                        <span class="fa fa-eye view-icon"></span>
                                        <span>991,021</span>
                                    </div>
                                    <div class="video-feedback">
                                        <div class="video-like-counter">
                                            <span class="far fa-thumbs-up like-icon"></span>
                                            <span>7456</span>
                                        </div>
                                        <div class="video-like-counter">
                                            <span class="far fa-thumbs-down dislike-icon"></span>
                                            <span>2140</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-video">
                            <div class="video-img">
                                <a href="single-video.html">
                                <img class="lazy" data-src="<?=Url::base('http')?>/frontend/web/images/thumbnails/5.jpg" alt="Video" />
                                </a>
                                <span class="video-duration">5.28</span>
                            </div>
                            <div class="video-content">
                                <h4><a href="single-video.html" class="video-title">Buffalo Chicken Potato Skins  (Gougeres English Video)</a></h4>
                                <div class="video-counter">
                                    <div class="video-viewers">
                                        <span class="fa fa-eye view-icon"></span>
                                        <span>241,021</span>
                                    </div>
                                    <div class="video-feedback">
                                        <div class="video-like-counter">
                                            <span class="far fa-thumbs-up like-icon"></span>
                                            <span>2140</span>
                                        </div>
                                        <div class="video-like-counter">
                                           <span class="far fa-thumbs-down dislike-icon"></span>
                                            <span>2140</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Video Carousel --> 
    <!-- Start Call To Action Area -->
    <div class="call-to-action-area hover-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="action-content">
                        <h2>Enough imporessed to get own video blog?</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="purchase-link text-right text-sm-center text-xs-center">
                        <a href="#" class="themeix-purchase-btn-3">purchase now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Call To Action Area -->