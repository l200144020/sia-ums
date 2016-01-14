<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ruang */

$this->title = 'Ruang #' . $model->id . ' - ' . Yii::$app->name;;
$this->params['breadcrumbs'][] = ['label' => 'Ruang', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Ruang #' . $model->id;
?>
<div class="ruang-view">

    <h1>Ruang #<?php echo $model->id;?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nama], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nama], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
        ],
    ]) ?>

</div>
