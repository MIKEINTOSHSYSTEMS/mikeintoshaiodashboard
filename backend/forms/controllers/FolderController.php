<?php

namespace app\controllers;

use app\models\Folder;
use Yii;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;

class FolderController extends ActiveController
{
    public $modelClass = 'app\models\Folder';

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = function () {

            /** @var \app\components\User $currentUser */
            $currentUser = Yii::$app->user;
            $query = $currentUser
                ->folders()
                ->orderBy(['name' => 'ASC', 'id' => 'ASC']);

            return new ActiveDataProvider([
                'query' => $query,
                'pagination' => false,
            ]);
        };

        return $actions;
    }
}