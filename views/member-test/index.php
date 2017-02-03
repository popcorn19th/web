<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MemberTestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Member Test';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-test-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="fa fa-plus"></i> เพิ่มสมาชิก', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="x_panel">
        <div class="x_title">
          <h2>Member <small>รายการสมาชิก</small></h2>

          <div class="clearfix"></div>
        </div>
        <div class="x_content">



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'username',
            'password',
            'firstname',
            'lastname',
            // 'nickname',
            // 'age',
            // 'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

  </div>
</div>
</div>
