<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GalleryUploads */

$this->title = 'Update Gallery Uploads: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Gallery Uploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gallery-uploads-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
