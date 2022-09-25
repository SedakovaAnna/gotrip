<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use app\models\Data;


class Database extends ActiveRecord{

    public static function tableName(){
        return '{{news}}';
    }

    public function rules(){
        return [
            [['email'], 'required'],
            [['email'], 'email'],
        ];
    }

    public function getEmail(){
        return ($this->email) ? $this->email : "No set";
    }

    public function getStatus(){
        return $this->hasOne(Data::className(), ['id' => 'id_status'])->one();
    }

public function getStatusName(){
    if ($status = $this->getStatus()) {
        return $status->status;
    }
    return "No set";
}
//связь М-М
// public function getBookToAuthorRelations(){
//     return $this->hasMany(BookToAuthor::className(), ['book_id' => 'id']);
// }
// public function getAuthor(){
//     return $this->hasMany(Author::className(), ['id' => 'author_id'])->via('bookToAuthorRelations')->all();
// }

}