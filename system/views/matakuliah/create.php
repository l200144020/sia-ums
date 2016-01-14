<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Matakuliah */

$this->title = 'Create Matakuliah - ' . Yii::$app->name;;
$this->params['breadcrumbs'][] = ['label' => 'Matakuliah', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Create Matakuliah';
?>
<div class="matakuliah-create">

    <h1>Create Matakuliah</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
