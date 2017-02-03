<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MemberTest */

$this->title = 'Create Member Test';
$this->params['breadcrumbs'][] = ['label' => 'Member Test', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-test-create">

    <div class="x_panel">
        <div class="x_title">
          <h2>Member <small>รายการสมาชิก</small></h2>

          <div class="clearfix"></div>
        </div>
        <div class="x_content">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

  </div>
</div>

</div>
