<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Employee;

class EmployeeController extends Controller {


    public function actionIndex()
    {
        $db = new \yii\db\Connection([
            'dsn' => 'mysql:host=localhost;dbname=basic',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ]);
        $sql = 'SELECT * FROM news;';
        $command = new \yii\db\Command([
            'db' => $db,
            'sql' => $sql,
        ]);
        $arrayWithResults = $command->queryAll();

print_r($arrayWithResults);

        $array = Yii::$app->db->createCommand($sql)->queryAll();
        
        print_r($array);
        return $this->render('index', [
          'array' => $array,
        ]);
    }

   
    public function actionRegister()
    {   
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;
        
        //$formData = Yii::$app->request->post();
        
        if ($model->load(Yii::$app->request->post())) {
            //$model->attributes = $formData;

            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Вы зарегистрированы');
            }

        }

        return $this->render('register', [
            'model' => $model,
        ]);
    }


    public function actionUpdate()
    {   
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;
        
        //$formData = Yii::$app->request->post();
        
        if ($model->load(Yii::$app->request->post())) {
           // $model->attributes = $formData['Employee'];
           

            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Данные обновлены');
            }

        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


}