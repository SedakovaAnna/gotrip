<?php
namespace app\assets;

use yii\web\AssetBundle;

class GalleryAsset extends AssetBundle {

    public $css = [
        'css/gallery/style.css',
    ];
    public $js = [
        'js/gallery.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}


?>