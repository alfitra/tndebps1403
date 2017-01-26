<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dasar */

$this->title = 'Update Dasar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Dasars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dasar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
