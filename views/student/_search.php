<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= //$form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'prefix_id') ?>

    <?php //echo $form->field($model, 'firstname') ?>

    <?php //echo $form->field($model, 'lastname') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'nickname') ?>

    <?php // echo $form->field($model, 'citizen_id') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php //echo $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'class') ?>

    <?php // echo $form->field($model, 'work') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <div style="text-align:center;">
          <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
          </div>


    <?php ActiveForm::end(); ?>

</div>
