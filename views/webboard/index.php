<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WebboardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Webboard : กระดานสนทนา';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="webboard-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="fa fa-plus"></i>ตั้งกระทู้', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="x_panel">
        <div class="x_title">
          <h2>Webboard<small>กระดานสนทนา</small></h2>

          <div class="clearfix"></div>
        </div>
        <div class="x_content">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'question_id',
            'detail:ntext',
            'create_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
