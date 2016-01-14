<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ruang */

$this->title = 'Update Ruang #' . $model->id . ' - ' . Yii::$app->name;
$this->params['breadcrumbs'][] = ['label' => 'Ruang', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->nama]];
$this->params['breadcrumbs'][] = 'Update Ruang';
?>
<div class="ruang-update">

    <h1>Update Ruang #<?php echo $model->id; ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
