<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RuangCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ruangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ruang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
