
<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Member';
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = 'Create';
?>

        <div class="panel panel-warning">
          <div class="panel-heading">กรอกข้อมูล</div>
          <div class="panel-body">

            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'username') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'firstname') ?>

                <?= $form->field($model, 'lastname') ?>

                <div class="form-group">
                    <?= Html::submitButton('ตกลง', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>


          </div>
        </div>
