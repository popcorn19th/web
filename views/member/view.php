<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\base\Model;
use yii\web\UploadedFile;


/* @var $this yii\web\View */
/* @var $model app\models\Member */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-view">

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
                //'photo',
                [
                  'attribute'=>'photo',
                  'value'=>'uploads/'.$model->photo,
                  'format' => ['image',['width'=>'100','height'=>'100']],
                ],
            'id',
            'username',
            'password',
            'student_id',
            'citizen_id',
            'prefix_id',
            'firstname',
            'lastname',
            'nickname',
            'birthday',
            'age',
            'gender',
            'graduate_year',
            'generation',
            'occupation',
            'position',
            'status_id',
            'study',
            'level',
            'class',
            'address:ntext',
            'work:ntext',
            'email:email',
            'tel',

        ],
    ]) ?>

</div>
