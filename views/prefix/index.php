<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PrefixSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prefixes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prefix-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="fa fa-plus"></i> เพิ่มคำนำหน้า', ['create'], ['class' => 'btn btn-success']) ?>
      </p>

            <h2>Prefix <small>คำนำหน้า</small></h2>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
