<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Matakuliah */

$this->title = 'Update Matakuliah #' . $model->nama . ' - ' . Yii::$app->name;;
$this->params['breadcrumbs'][] = ['label' => 'Matakuliah', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->nama]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="matakuliah-update">

    <h1>Update Matakuliah #<?php echo $model->id; ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
