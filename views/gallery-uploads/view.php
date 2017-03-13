<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GalleryUploads */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Gallery Uploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-uploads-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
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
            'name',
            'details',
            //'photoViewer:image',
        [
            'format'=>'raw',
            'attribute'=>'photo',
            'value'=>Html::img($model->photo,['class'=>'img-thumbnail','style'=>'width:200px;'])
        ],
        [
            'format'=>'raw',
            'attribute'=>'photos',
            'value'=>$model->getPhotosViewer()
        ]
    ],
]) ?>
</div>
