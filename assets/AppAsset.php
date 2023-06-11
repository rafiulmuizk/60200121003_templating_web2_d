<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'template/css/owl.carousel.min.css',
        'template/css/slicknav.css',
        'template/css/animate.min.css',
        'template/css/magnific-popup.css',
        'template/css/fontawesome-all.min.css',
        'template/css/themify-icons.css',
        'template/css/slick.css',
        'template/css/nice-select.css',
        'template/css/style.css',
    ];
    public $js = [
        'template/js/vendor/modernizr-3.5.0.min.js',
        'template/js/popper.min.js',
        'template/js/bootstrap.min.js',
        'template/js/owl.carousel.min.js',
        'template/js/slick.min.js',
        'template/js/jquery.slicknav.min.js',
        'template/js/countdown.min.js',
        'template/js/wow.min.js',
        'template/js/jquery.magnific-popup.js',
        'template/js/jquery.nice-select.min.js',
        'template/js/jquery.counterup.min.js',
        'template/js/waypoints.min.js',
        'template/js/contact.js',
        'template/js/jquery.form.js',
        'template/js/jquery.validate.min.js',
        'template/js/mail-script.js',
        'template/js/jquery.ajaxchimp.min.js',
        'template/js/plugins.js',
        'template/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
