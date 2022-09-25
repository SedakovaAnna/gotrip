<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>
    <?php Html::submitButton('Отправить', ['class' => 'btn btn-success']); ?>
    <code><?= __FILE__ ?></code>
</div>

<?php 
//print_r($model1);
           
?>

<?php //$form1 = ActiveForm::begin() ?>
<?php //$form1->field($model1, 'name') ?>
<?php //$form1->field($model1, 'email') ?>
<?php //$form1->field($model1, 'text') ?>


