<?php

namespace app\controllers;

use yii\rest\ActiveController;

class ItemController extends ActiveController
{
    public $modelClass = 'app\models\todo\Item';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => 'yii\web\AccessControl',
                'rules' => [['allow' => true,]],
            ],
        ];
    }

}