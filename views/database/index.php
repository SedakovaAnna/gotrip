<?php
/* @var $this yii\web\View */
?>
<h1>database/index</h1>

<div><?php 
foreach ($result as $id):
    echo $id->id;
    echo $id->getEmail();
    echo $id->getStatusName();
//print_r($status);

endforeach;

?></div>
<p>

    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
