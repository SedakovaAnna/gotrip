<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;


$form = ActiveForm::begin();
echo $form->field($model, 'name')->hint('Заполните имя');
echo $form->field($model, 'lastname')->passwordInput();
//echo $form->field($model, 'email');
echo $form->field($model, 'email')->dropDownList($model->getList());
echo '<br>';
echo Html::submitButton('Send', ['class' => 'btn btn-primary']);
ActiveForm::end();
?>


<!-- <form method="post">
    <p>Имя:</p>
    <input type="text" name="name" />
    <br><br>

    <p>Фамилия:</p>
    <input type="text" name="lastname" />
    <br><br>

    <p>Email:</p>
    <input type="text" name="email" />
    <br><br>
    <input type="submit" />
</form> -->