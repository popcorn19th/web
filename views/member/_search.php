<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MemberSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'photo') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'student_id') ?>

    <?php // echo $form->field($model, 'citizen_id') ?>

    <?php // echo $form->field($model, 'prefix_id') ?>

    <?php // echo $form->field($model, 'firstname') ?>

    <?php // echo $form->field($model, 'lastname') ?>

    <?php // echo $form->field($model, 'nickname') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'graduate_year') ?>

    <?php // echo $form->field($model, 'generation') ?>

    <?php // echo $form->field($model, 'occupation') ?>

    <?php // echo $form->field($model, 'position') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'study') ?>

    <?php // echo $form->field($model, 'level') ?>

    <?php // echo $form->field($model, 'class') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'work') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
