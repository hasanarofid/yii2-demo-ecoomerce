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
   
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
    public $css = [
        'crypto/css/animate.css',
        'crypto/css/style.css',
        'crypto/css/bootstrap.min.css',
        'crypto/css/font-awesome.min.css',
        'crypto/css/owl.carousel.css',
        'crypto/css/themify-icons.css',
        // 'css/site.css',
    ];
}
