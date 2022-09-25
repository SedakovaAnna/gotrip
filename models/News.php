<?php

namespace app\models;

use yii\base\Model;
use Yii;

class News extends Model{

	public $email;

	public function rules(){
        return [
            [['email'], 'required'],
            [['email'], 'email'],
        ];
    }
    
    public function save(){
        $sql = "INSERT INTO news (id, email) VALUES (null, '{$this->email}')";
        return Yii::$app->db->createCommand($sql)->execute();
    }

}

?>