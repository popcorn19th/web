<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MemberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Members';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
      <p>
        <?= Html::a('<i class="fa fa-plus"></i> เพิ่มสมาชิก', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="x_panel">
        <div class="x_title">
          <h2>Member <small>รายการสมาชิก</small></h2>

          <div class="clearfix"></div>
        </div>
        <div class="x_content">

    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'photo',
            //'username',
            //'password',
            'student_id',
            // 'citizen_id',
            // 'prefix_id',
             'firstname',
             'lastname',
            // 'nickname',
            // 'birthday',
            // 'age',
            // 'gender',
            // 'graduate_year',
            // 'generation',
            // 'occupation',
            // 'position',
             'status_id',
            // 'study',
            // 'level',
            // 'class',
            // 'address:ntext',
            // 'work:ntext',
            // 'email:email',
            // 'tel',
            // 'create_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
