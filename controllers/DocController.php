<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class DocController extends Controller
{
    public $layout = 'docs';

    public function actionIndex()
    {

        return $this->render('index');
    }

   

}