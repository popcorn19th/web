<?php

namespace app\controllers;

class MainController extends \yii\web\Controller {

      public function init()
      {
          parent::init();
          if (isset(\Yii::$app->user->identity->username) && \Yii::$app->user->identity->username === 'admin') {
            // \Yii::$app->view->theme->pathMap = ['@app/views' => '@app/views'];
          } else {
            \Yii::$app->view->theme->pathMap = ['@app/views' => '@app/views'];
          }
      }

}
