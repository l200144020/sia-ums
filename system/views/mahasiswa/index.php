<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MahasiswaCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mahasiswa - ' . Yii::$app->name;
$this->params['breadcrumbs'][] = 'Mahasiswa';
?>
<div class="mahasiswa-index">

    <h1>Mahasiswa</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mahasiswa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama',
            'kata_sandi',
            'nomor_induk_mahasiswa',
            'fakultas_program_studi',
            // 'tempat_tanggal_lahir',
            // 'jenis_kelamin',
            // 'alamat:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
