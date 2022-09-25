<?php

namespace app\models;

use yii\base\Model;
use Yii;
use yii\helpers\ArrayHelper;

class Employee extends Model{

    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';

    public $name;
    public $lastname;
	public $email;

    public function scenarios()
    {
        return[
            self::SCENARIO_EMPLOYEE_REGISTER => ['name', 'lastname', 'email'],
            self::SCENARIO_EMPLOYEE_UPDATE => ['name', 'lastname']
        ];
    }

	public function rules(){
        return [
            [['name', 'lastname', 'email'], 'required'],
            [['email'], 'email'],
            [['name', 'lastname'], 'string', 'min' => 2, 'on' => self::SCENARIO_EMPLOYEE_UPDATE],
        ];
    }
    
    public function save(){
        return true;
    }

    public function getList(){
        $sql = 'SELECT * FROM news';
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return ArrayHelper::map($result, 'email', 'email');
    }

}

?>