<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
        <div class="header-top hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-top-area">
                            <div class="site-info left">
                                <div class="mail-address">
                                    <i class="fa fa-envelope-o"></i>
                                    <a href="mailto:nfo@themeix.com">bkhurvaliev@gmail.com </a>
                                    <span class="sepator">|</span>
                                </div>
                                <div class="server-time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>Server time : 12.00am</span>
                                </div>
                            </div>
                            <div class="user-info right">
                                <div class="upload-opt">
                                    <i class="fa fa-upload"></i>
                                    <a href="#upload-options" data-toggle="modal">upload video</a>
                                    <span class="sepator">|</span>
                                </div>
                                <div class="login-info">
                                    <i class="fa fa-lock"></i>
                                    <a href="#login-info" data-toggle="modal">login</a>
                                </div>
                            </div>
                            <div id="upload-options" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Upload Your Video</h3>
                                            <button class="btn btn-sm btn-default close-btn" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="#" method="post" class="upload-form" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="video_title">Video Title</label>
                                                    <input type="text" class="form-control" id="video_title" placeholder="Video Title">
                                                </div>
                                                <div class="form-group">
                                                    <label for="video-desc">Video Description</label>
                                                    <textarea name="video-desc" id="video-desc" class="form-control" placeholder="Video Description"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_file" class="custom-file-upload">Select Your File
                                                        <input type="file" name="upload_file" id="upload_file">
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-lg">Upload</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="login-info" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Login Here..</h3>
                                            <button data-dismiss="modal" class="btn btn-sm btn-default close-btn">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="#" method="post" class="login-form">
                                                <div class="form-group">
                                                    <label for="user_name">Username :</label>
                                                    <input type="text" name="user_name" class="form-control" id="user_name" placeholder="username">
                                                </div>
                                                <div class="form-group">
                                                    <label for="user_password">Password :</label>
                                                    <input type="password" name="user_password" class="form-control" id="user_password" placeholder="password">
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation area starts -->
        <div class="main-menu">
            <!-- Start Navigation -->
            <nav class="header-section pin-style">
                <div class="container">
                       <div class="mod-menu">
                        <div class="row">
                            <div class="col-3">
                                <a href="<?=yii\helpers\Url::to(['index']);?>" title="logo" class="logo"><img src="/images/uzabzor_logo.png" alt="logo"></a>
                            </div>
                            <div class="col-9 nopadding">
                                <div class="main-nav rightnav">
                                    <ul class="top-nav">
                                        <li class="visible-this d-md-none menu-icon">
                                            <a href="#" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"><i class="fa fa-bars"></i></a>
                                        </li>
                                    </ul>
                                    <div id="menu" class="collapse header-menu">
                                        <ul class="nav themeix-nav">
                                            <li><a href="<?=yii\helpers\Url::to(['index']);?>">Bosh Sahifa</a><span class="arrow"></span>
                                                <!-- <ul class="dm-align-2 mega-list">
                                                    <li><a href="index.html">Home One</a></li>
                                                    <li><a href="index-2.html">Home Two</a></li>
                                                    <li><a href="index-3.html">Home Three</a></li>
                                                    <li><a href="index-4.html">Home Four</a></li>
                                                </ul> -->
                                            </li>
                                            <li><a href="#">Pages</a> <span class="arrow"></span>
                                                <!-- <ul class="dm-align-2 mega-list">
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="index-2.html">Home 2</a></li>
                                                    <li><a href="index-3.html">Home 3</a></li>
                                                    <li><a href="blog.html">Blog<span class="sub-arrow dark right"><i class="fa fa-angle-right"></i></span></a><span class="arrow"></span>
                                                        <ul>
                                                           <li><a href="single-blog.html">Single Blog</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="videos.html">All Videos<span class="sub-arrow dark right"><i class="fa fa-angle-right"></i></span></a><span class="arrow"></span>
                                                        <ul>
                                                            <li><a href="single-video.html">Single Video</a></li>
                                                            <li><a href="single-video-2.html">Single Video 2</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="404.html">404</a></li>
                                                </ul> -->
                                            </li>                                           
                                            <li><a href="<?=yii\helpers\Url::to(['blog']);?>">O'zimizning musiqa</a> </li>
                                            <!-- <li class="mega-menu remove-border active"><a href="#">Mega Menu</a><span class="arrow"></span>
                                                <ul>
                                                    <li><span class="subtitle">Home Pages</span> <span class="arrow"></span>
                                                        <ul class="mega-list">
                                                            <li><a href="index.html"><i class="fa fa-home"></i>Home One</a></li>
                                                            <li><a href="index-2.html"><i class="fa fa-home"></i>Home Two</a></li>
                                                            <li><a href="index-3.html"><i class="fa fa-home"></i>Home Three</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><span class="subtitle">Blog Pages</span> <span class="arrow"></span>
                                                        <ul class="mega-list">
                                                            <li><a href="blog.html"><i class="fa fa-angle-right"></i>Blog Grid Style</a></li>
                                                            <li><a href="single-blog.html"><i class="fa fa-angle-right"></i>Blog Single Page</a></li>
                                                            <li><a href="single-video.html"><i class="fa fa-angle-right"></i>Single Video</a></li>
                                                            
                                                        </ul>
                                                    </li>
                                                    <li><span class="subtitle">Video Pages</span><span class="arrow"></span>
                                                        <ul class="mega-list">
                                                            <li><a href="videos.html"><i class="fa fa-angle-right"></i>All Videos</a></li>
                                                            <li><a href="single-video.html"><i class="fa fa-angle-right"></i>Single Video V1</a></li>
                                                            <li><a href="single-video-2.html"><i class="fa fa-angle-right"></i>Single Video V2</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><span class="subtitle">Extra Pages</span> <span class="arrow"></span>
                                                        <ul class="mega-list">
                                                            <li><a href="single-blog.html"><i class="fa fa-angle-right"></i>Single Blog</a></li>
                                                            <li><a href="contact.html"><i class="fa fa-angle-right"></i>Contact</a></li>
                                                            <li><a href="single-video.html"><i class="fa fa-angle-right"></i>Single Video</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li> -->
                                            <li><a href="<?=yii\helpers\Url::to(['contact']);?>" title="contact">Contact</a></li>
                                            <li><a href="single-blog.html" title="single blog">Single Blog</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </nav>
            <!-- end navigation -->
        </div>
        <!-- Navigation area ends -->
</header>


    <?=$content;?>

    <footer>
        <div class="footer-area themeix-ptb">
            <div class="footer-wrapper">
            <div class="container">
                <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="single-footer">
                                <div class="footer-heading-wrap">
                                    <span class="heading-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
                                    <h3 class="footer-heading">About Us</h3>
                                </div>
                                <div class="single-footer-text">
                                    <p>Vestibulum quis cursus mi, vitae mollis metus.Nulam eu lects gravida, bibendum enim in, vulputate erat. Vestibulum ullamcorper ornare magna</p>
                                </div>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li class="fb-link"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="gp-link"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="single-footer">
                                <div class="footer-heading-wrap">
                                    <span class="heading-icon"><i class="fa fa fa-link" aria-hidden="true"></i></span>
                                    <h3 class="footer-heading">Important links</h3>
                                </div>
                                <div class="footer-list">
                                    <ul>
                                        <li><a href="#">Submit New Video</a></li>
                                        <li><a href="#">Popular Videos</a></li>
                                        <li><a href="#">Trending Videos</a></li>
                                        <li><a href="#">Most watched Videos</a></li>
                                        <li><a href="#">Latest Videos</a></li>
                                        <li><a href="#">Video Authors</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="single-footer">
                                <div class="footer-heading-wrap">
                                    <span class="heading-icon"><i class="fa fa-life-ring" aria-hidden="true"></i></span>
                                    <h3 class="footer-heading">get support</h3>
                                </div>
                                <div class="footer-list">
                                    <ul>
                                        <li><a href="#">Our Forum</a></li>
                                        <li><a href="#">Facebook Page</a></li>
                                        <li><a href="#">Live Chat</a></li>
                                        <li><a href="#">Toll Free Number</a></li>
                                        <li><a href="#">Support Agent</a></li>
                                        <li><a href="#">Tickets</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="single-footer">
                                <div class="footer-heading-wrap">
                                    <span class="heading-icon"><i class="fa fa-plane" aria-hidden="true"></i></span>
                                    <h3 class="footer-heading">contact us</h3>
                                </div>
                                <p>4100 S Choctaw Rd, Choctaw, OK, 73020</p>
                                <div class="footer-list">
                                    <ul>
                                        <li><a href="tel:+11231231234">T : +1 123 123 1234</a></li>
                                        <li><a href="tel:+11231234321">F : +1 123 123 4321</a></li>
                                        <li><a href="mailto:info@themeix.com">E : info@themeix.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom Area -->
        <div class="footer-bottom-area pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="footer-bottom">
                            <div class="footer-logo">
                                <a href="#"><img src="/images/logo.png" alt="logo"></a>
                            </div>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="#">Disclaimer</a></li>
                                </ul>
                            </div>
                            <div class="copyright-text">
                                <p>All content Etube &copy; 2019 - All rights reserved. - Proudly made with <a href="https://themeix.com">Themeix</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom Area -->
        <div class="scroll-top">
            <div class="scroll-icon">
                <i class="fa fa-angle-up"></i>
            </div>
        </div>
    </footer>









<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
