<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\News;

class NewsController extends Controller {
   
    public function actionIndex()
    {   

        
        $formData = Yii::$app->request->post();
        $news = new News();
       
        if (Yii::$app->request->isPost) {
            $news->email = $formData['email'];
            if ($news->validate() && $news->save()) {
                Yii::$app->session->setFlash('success', 'Вы подписаны на рассылку');
            }

        }

        return $this->render('index', [
            'model' => $news,
        ]);
    }
}