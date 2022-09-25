<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;



?>

<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($data, 'email'); ?>
<?php echo '<br>'; ?>
<?php echo Html::submitButton('Create', ['class' => 'btn btn-primary',]); ?>



<?php ActiveForm::end(); ?>