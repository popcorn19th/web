<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\UploadedFile::getInstance();

/* @var $this yii\web\View */
/* @var $model app\models\GalleryUploads */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-uploads-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'details')->textInput(['maxlength' => true]) ?>

    <div class="col-md-2">
        <div class="well text-center">
          <?= Html::img($model->getPhotoViewer(),['style'=>'width:100px;','class'=>'img-rounded']); ?>
        </div>
      </div>
      <div class="col-md-10">

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photos[]')->fileInput(['multiple' => true]) ?>
    
<div class="well">
  <?= $model->getPhotosViewer(); ?>
</div>

  </div>
  </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
