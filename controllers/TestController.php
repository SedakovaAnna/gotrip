<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\TestForm;

class TestController extends Controller {
   
    public function actionIndex()
    {    
        $model = new TestForm();
        $model->name = 'Ann';
        $model->email = 'ek@kms.ru';
        $model->text = 'skljd';

        //Обращение к свойствам объекта, как к массиву
        echo $model['email'];
        foreach ($model as $attrs => $value) {
            echo "$attrs: $value <br>"; 
        }
        echo '<hr>';

        //Преобразование свойств объекта в массив
        $array = $model->toArray();
        print_r($array);
        echo '<hr>';

//Получить все свойства объекта в массиве
print_r($model->getAttributes());
print_r($model->attributes);//свойство
print_r($model->attributes()); //метод - все свойства
echo '<hr>';









        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Ключевые слова']);
        $this->view->title = 'Users';
        //return $this->render('index', compact('model'));
    }

    
}
?>