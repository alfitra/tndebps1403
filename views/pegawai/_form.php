<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;

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

    <?=
    $form->field($model, 'pangkat')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($model->getPangkatGolongan(), 'id', 'pangkat'),
        'options' => [
            'placeholder' => 'Pilih Pangkat...',
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>
    <?=  $form->field($model, 'golongan')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($model->getPangkatGolongan(), 'id', 'golongan'),
        'options' => [
            'placeholder' => 'Pilih Golongan...',
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?=
    $form->field($model, 'tmt_golongan')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Masukan TMT Golongan ...'],
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]);
    ?>
    <?= $form->field($model, 'pendidikan')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'tgl_lulus')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Masukan Tanggal Lulus ...'],
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]);
    ?>
    <?= $form->field($model, 'jenis_kelamin')->radioList(['1' => 'Laki-Laki', '2' => 'Perempuan']); ?>
    <?=
    $form->field($model, 'tgl_lahir')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Masukan Tanggal Lahir ...'],
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]);
    ?>
        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
