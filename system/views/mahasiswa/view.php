<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */

$this->title = 'Mahasiswa #' . $model->id . ' - ' . Yii::$app->name;;
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->id;
?>
<div class="mahasiswa-view">

    <h1>Mahasiswa #<?php echo $model->id; ?></h1>

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
            'kata_sandi',
            'nomor_induk_mahasiswa',
            'fakultas_program_studi',
            'tempat_tanggal_lahir',
            'jenis_kelamin',
            'alamat:ntext',
        ],
    ]) ?>

</div>
