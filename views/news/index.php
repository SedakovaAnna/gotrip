<?php 
use app\assets\GalleryAsset;

GalleryAsset::register($this);
$this->registerJsFile('@web/js/gellary/scripts.js', ['depends' => [
    GalleryAsset::className()
    ]]);
?>

<form method="post">
    <p>Email:</p>
    <input type="text" name="email" />
    <br><br>
    <input type="submit" />
</form>