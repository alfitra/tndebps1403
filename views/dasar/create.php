<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dasar */

$this->title = 'Create Dasar';
$this->params['breadcrumbs'][] = ['label' => 'Dasars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dasar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
