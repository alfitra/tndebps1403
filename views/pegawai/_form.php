<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip_lama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>
    <?php $data = ArrayHelper::map($model->getPangkatGolongan(), 'id', 'pangkat') ?>
    <?= $form->field($model, 'pangkat')->dropDownList([$data], ['prompt' => '-Pilih Pangkat-']) ?>

    <?= $form->field($model, 'golongan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tmt_golongan')->textInput() ?>

    <?= $form->field($model, 'pendidikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lulus')->textInput() ?>

    <?= $form->field($model, 'jenis_kelamin')->radioList(['1' => 'Laki-Laki', '2' => 'Perempuan']); ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
