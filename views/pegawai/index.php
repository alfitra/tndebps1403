<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pegawai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">

    <!--<h1>
<?= Html::encode($this->title) ?>
    </h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
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
//             'email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
