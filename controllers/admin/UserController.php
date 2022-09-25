<?php
namespace app\controllers\admin;

use Yii;
use yii\web\Controller;
use app\models\TestForm;

class UserController extends Controller {
   
    //public $layout = 'basic';

    public function actionExample()
    {
        //$result = mkdir('/var/www/project/frontend/web/files/test1');
        //Использование псевдонима
        //Yii::setAlias('@files', '/var/www/project/frontend/web/files');
        //$result = mkdir(Yii::getAlias('@files').'/test2');
        echo Yii::getAlias('@photos');
    }
        
    
    public function actionIndex()
    {    
       
       
       
        $model = new TestForm();

        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'Ключевые слова']);
        $this->view->title = 'Статьи';
        //echo Yii::$app->params['adminEmail'];
        //return $this->render('index', ['model' => $model,]);

        return $this->render('index', compact('model'));
    }

    public function actionShow()
    {
        $this->view->title = 'Одна статья';
        //$this->layout = 'basic';
        return $this->render('show');
    }
}
?>