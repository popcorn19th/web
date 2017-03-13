<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Prefix;
use app\models\Status;


/* @var $this yii\web\View */
/* @var $model app\models\Member */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-form">
    <div style="text-align:center;">
    <?php $form = ActiveForm::begin(['layout' => 'horizontal','options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php
     if($model->photo != "") {
       echo '<img src="uploads/'.$model->photo.'" align=center width="150" />';
     }
     ?>
    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'citizen_id')->textInput(['maxlength' => true]) ?>

    <?php
      $prefixs=Prefix::find()->all();
      $listData=ArrayHelper::map($prefixs,'id','name');

      echo $form->field($model, 'prefix_id')->dropDownList(
      								$listData,
      								['prompt'=>'เลือกคำนำหน้า']);
    ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')->textInput() ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'gender')->radioList(['ชาย'=>'ชาย','หญิง'=>'หญิง']); ?>

    <?= $form->field($model, 'graduate_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'generation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?php
        $Status=Status::find()->all();
        $listData=ArrayHelper::map($Status,'id','name');

        echo $form->field($model, 'status_id')->dropDownList(
        								$listData,
        								['prompt'=>'เลือกสถานะ']);
      ?>

    <?= $form->field($model, 'study')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'work')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

</div>

    <div style="text-align:center;">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>
