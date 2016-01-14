<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */

$this->title = 'Update Mahasiswa #' . $model->id . ' - ' . Yii::$app->name;;
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->nama]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mahasiswa-update">

    <h1>Update Mahasiswa #<?php echo $model->id; ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
