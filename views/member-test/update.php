<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MemberTest */

$this->title = 'Update Member Test: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Member Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="member-test-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
