<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'ข้อมูลการติดต่อ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

    <?php else: ?>

        <p>
            ข้อมลการติดต่อ สาขาวิชาการจัดการเทคโนโลยีสารสนเทศ คณะเทคโนโลยีสารสนเทศ มหาวิทยาลัยราชภัฎมหาสารคาม
        </p>

        <div class="row">
            <div class="col-xs-2 col-sm-3 col-md-7">
              <align=center hspace="10" vspace="10"/>
<p align="justify" style="text-indent: 1in">ที่อยู่ : 80 ถนนนครสวรรค์ ตำบลตลาด อำเภอเมือง จังหวัดมหาสารคาม 44000
<p align="justify" style="text-indent: 1in">Facebook : สาขาวิชาการจัดการเทคโนโลยีสารสนเทศ มรม.
<p align="justify" style="text-indent: 1in">E-Mail : itm.rmu@gmail.com
<p align="justify" style="text-indent: 1in">เว็บไซค์สาขา : http://it.rmu.ac.th/itm/ <br clear=center>
<p align="justify" style="text-indent: 1in">เบอร์โทร.043-020227

            </div>
        </div>

    <?php endif; ?>
</div>
