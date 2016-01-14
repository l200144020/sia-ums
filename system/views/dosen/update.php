<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dosen */

$this->title = 'Update Dosen #' . $model->id . '- ' . Yii::$app->name;;
$this->params['breadcrumbs'][] = ['label' => 'Dosen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->nama]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dosen-update">

    <h1>Update Dosen #<?php echo $model->id; ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
