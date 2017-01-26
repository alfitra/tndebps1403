<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pegawai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->
<?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Tambah Pegawai', ['value' => Url::to(['create']), 'class' => 'btn btn-success', 'id' => 'modalButton']) ?>
        <?php
//     =Html::a('Tambah Pegawai', ['create'], ['class' => 'btn btn-success']) 
        ?>
    </p>
    <?php
        Modal::begin([
                'header'=>'<h4>Tambah Pegawai</h4>',
                'id' => 'modal',
                'size'=>'modal-lg',
            'options'=>[
                 'tabindex' => false,
            ],
            ]);
     
        echo "<div id='modalContent'></div>";
     
        Modal::end();
    ?>
    <?php Pjax::begin(); ?>    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
//            'id',
            'nama',
//            'nip_lama',
            'nip',
            'jabatan',
            // 'pangkat',
            // 'golongan',
            // 'tmt_golongan',
            // 'pendidikan',
            // 'tgl_lulus',
            // 'jenis_kelamin',
            // 'tgl_lahir',
            // 'email:email',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
<?php Pjax::end(); ?></div>
