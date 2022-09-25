<h1>ADMIN</h1>
<?php 

use yii\helpers\Html;

//Парный тег
echo Html::tag('p', 'text');
//Одиночные теги
echo Html::beginTag('div');
echo 'Привет!';
echo Html::EndTag('div');

$array = [
    '1' => 'Один',
    '2' => 'Два',
    '3' => 'Три',
    '4' => 'Четыре',
    ];
    //Выпадающий список
echo Html::dropDownList('city_id', [], $array);
//radio список
echo Html::radioList('city_id', [], $array);
//checkbox список
echo Html::checkboxList('city_id', [], $array);
//Подключение картинок
echo Html::img('/files/photos/123.jpg', ['alt' => 'Pic']);
echo '<br>';

//Экранирование символов от XSS-атак (скрипт в сообщении)
$string = '<script>alert("Hello");</script>';
echo $string;//не экранированная строка
echo Html::encode($string); //экранированная строка


use yii\helpers\ArrayHelper;

//$emails = ArrayHelper::getColumn($employees, 'email');
?>

<?php //$form = ActiveForm::begin() ?>
<?php //$form->field($model, 'name') ?>
<?php //$form->field($model, 'email') ?>
<?php //$form->field($model, 'text') ?>
<?php //Html::submitButton('Отправить', ['class' => 'btn btn-success']); ?>



