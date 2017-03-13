<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Member */

$this->title = 'กรอกข้อมูลส่วนตัว';
$this->params['breadcrumbs'][] = ['label' => 'Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-create">
  <p>

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</p>
</div>
