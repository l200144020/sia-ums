<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MatakuliahCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Matakuliah  - ' . Yii::$app->name;;
$this->params['breadcrumbs'][] = 'Matakuliah';
?>
<div class="matakuliah-index">

    <h1>Matakuliah</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Matakuliah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama',
            'semester',
            'dosen.nama',
            'kelas.nama',
            'ruang.nama',
            'jam',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
