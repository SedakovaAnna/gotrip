<?php
$this->beginBlock('block1');
?>
<h1>Show</h1>
<?php
$this->endBlock();
?>

<?php
$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']);
?>
<?php
$this->registerJs("$('.container').append('<p>hi</p>')");
?>
<?php $this->registerCss("body { background: #fff;}");?>

<button class="btn btn-success">Click</button>

<?php
// $js = <<<JS 
//     $('#btn').on('click', function(){
//         $.ajax({
//             url: 'index.php?r=admin/user/index',
//             data: {test: '123'},
//             type: 'GET',
//             success: function(res) {
//                 console.log(res);
//             },
//             error: function(){
//                 alert('Error');
//             }
//         });
//     });
// JS;

//$this->registerJs("$js");
// $this->registerJs("$('#btn').on('click', function(){
//     $.ajax({
//         url: 'index.php?r=admin/user/index',
//         data: {test: '123'},
//         type: 'GET',
//         success: function() {
//             alert('Ok');
//         },
//         error: function(){
//             alert('Error');
//         }
//     });
// });");
?>