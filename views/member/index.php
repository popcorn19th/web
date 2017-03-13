<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Status;
use yii\helpers\ArrayHelper;
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
        <?= Html::a('<i class="fa fa-plus"></i> เพิ่มสมาชิก', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'prefix.name',
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
            // 'status.name',
             [
                'attribute'=>'status_id',
                'value' => 'status.name',
                'filter'=>ArrayHelper::map(Status::find()->asArray()->all(), 'id', 'name'),
            ],
            // 'study',
            // 'level',
            // 'class',
            // 'address:ntext',
            // 'work:ntext',
            // 'email:email',
             //'tel',
            // 'create_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
