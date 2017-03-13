<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GalleryUploads */

$this->title = 'Create Gallery Uploads';
$this->params['breadcrumbs'][] = ['label' => 'Gallery Uploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-uploads-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
