<?php

namespace app\widgets\news;

use Yii;
use yii\base\Widget;

class NewsList extends Widget
{
    public $showLimit = null;

    public function run(){
        $max = 5;
        if ($this->showLimit){
            $max = $this->showLimit;
        }
        
        return $this->render('block', ['max' => $max]);
    }
}