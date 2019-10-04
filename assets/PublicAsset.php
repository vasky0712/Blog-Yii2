<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'public/css/cssmedia_query.css',
        'public/css/bootstrap.css',
        'public/css/animate.css',
        'public/css/owl.carousel.css',
        'public/css/owl.theme.default.css',
        'public/css/style_1.css',
    ];
    public $js = [
        'public/js/js/owl.carousel.min.js',
        'public/js/jquery.waypoints.min.js',
        'public/js/js/main.js',
        'public/js/js/jquery.stellar.min.js',
        'public/js/js/bootstrap.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
