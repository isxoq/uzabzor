<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        'https://fonts.googleapis.com/css?family=Poppins:300,400,500,700',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/pgwslider.min.css',
        'css/owl.carousel.min.css',
        'css/pgwslideshow.min.css',
        'css/megamenu.css',
        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
        'js/jquery-3.3.1.min.js',
        'js/popper.min.js',
        'js/jquery.easing.min.js',
        'js/bootstrap.min.js',
        'js/pgwslideshow.min.js',
        'js/pgwslider.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.lazy.min.js',
        'js/jquery.lazy.plugins.min.js',
        'js/megamenu.js',
        'js/main.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapPluginAsset',
    ];
}
