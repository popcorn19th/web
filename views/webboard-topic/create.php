<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\WebboardTopic */

$this->title = 'Create Webboard Topic';
$this->params['breadcrumbs'][] = ['label' => 'Webboard Topics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="webboard-topic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
