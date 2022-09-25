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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/reset.css',
        'css/main.css',

    ];
    public $js = [
        //'js/scripts.js',
    ];
    public $jsOptions = [
        //'position' => \yii\web\View::POS_HEAD
    ];
    
    public $depends = [
        'app\assets\FontAwesomeAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}