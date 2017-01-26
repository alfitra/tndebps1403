<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DasarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dasar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'jenis') ?>

    <?= $form->field($model, 'nomor') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'perihal') ?>

    <?php // echo $form->field($model, 'isi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
