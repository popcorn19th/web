<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WebboardTopic */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Webboard Topics', 'url' => ['list']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="webboard-topic-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Back', ['index', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'subject',
            'user',
            'detail:ntext',
            'create_date',
        ],
    ]) ?>

</div>
