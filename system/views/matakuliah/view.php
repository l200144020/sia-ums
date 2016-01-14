<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Matakuliah */

$this->title = 'Matakuliah #' . $model->nama . ' - ' . Yii::$app->name;
$this->params['breadcrumbs'][] = ['label' => 'Matakuliah', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Matakuliah #' . $model->nama;
?>
<div class="matakuliah-view">

    <h1>Matakuliah #<?php echo $model->nama; ?></h1>

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
            'semester',
            'dosen_id',
            'kelas_id',
            'ruang_id',
            'jam',
        ],
    ]) ?>

</div>
