<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Member;
use yii\data\ActiveDataProvider;


class MemberController extends Controller
{

  public function actionIndex()
  {

    $dataProvider = new ActiveDataProvider([
      'query' => Member::find(),
      'pagination' => [
          'pageSize' => 15,
      ],
      'sort' => [
          'defaultOrder' => [
              'id' => SORT_DESC,
          ]
      ],
    ]);

    return $this->render('index',['provider'=>$dataProvider]);
  }

  public function actionCreate()
  {
      $model = new Member;

      if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
      } else {
          return $this->render('create',['model'=>$model]);
      }

  }


  public function actionUpdate($id)
  {
      echo $id;

  }

}
