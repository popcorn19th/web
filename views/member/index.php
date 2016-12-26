<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;

$this->title = 'Member';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">


  <p>
    <a href="index.php?r=member/create" class="btn btn-success">Add Member</a>
  </p>
  <?= GridView::widget([
    'dataProvider' => $provider,
    'columns' => [
        'id',
        'username',
        'firstname',
        'lastname',
        'nickname',
        'age',
        'email',
        [
        'class' => ActionColumn::className(),
        ],
    ],
]) ?>

</div>
