<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;


class Data extends ActiveRecord{

    public static function tableName(){
        return '{{status}}';
    }

    public function rules(){
        return [
            [['status'], 'required'],
        ];
    }

    public function getStatus(){
        return ($this->status) ? $this->status : "No set";
    }

}