<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Student */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Back', ['back', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
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
            'prefix_id',
            'firstname',
            'lastname',
            'gender',
            'nickname',
            'citizen_id',
            'birthday',
            'age',
            'address:ntext',
            'status_id',
            'class',
            'work:ntext',
            'email:email',
            'tel',
        ],
    ]) ?>

</div>
