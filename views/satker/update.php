<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Satker */

$this->title = 'Update Satker: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Satkers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'id' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="satker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
