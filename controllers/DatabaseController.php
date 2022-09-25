<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

use app\models\Database;
use app\models\Data;

class DatabaseController extends Controller
{
    public function actionIndex()
    {
        // $query = Database::find();
        // $query->where(['id' => 1]);
        // $result = $query->all();
        //print_r($result);//массив с объектами
//die;
        $conditions = ['id' => 1];
        $result = Database::find()->where($conditions)->all();
        return $this->render('index', ['result' => $result,]);
    }

    public function actionCreate()
    {
        $data = new Database();
        if ($data->load(Yii::$app->request->post()) && $data->save()){
            Yii::$app->session->setFlash('success', 'Save!');
            //return $this->redirect(['database/index']); //перейти на дргую страницу
            return $this->refresh();
        }

        return $this->render('create', ['data' => $data,]);
    }


}
