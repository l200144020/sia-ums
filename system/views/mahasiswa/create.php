<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */

$this->title = 'Create Mahasiswa - ' . Yii::$app->name;
$this->params['breadcrumbs'][] = ['label' => 'Mahasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Create Mahasiswa';
?>
<div class="mahasiswa-create">

    <h1>Create Mahasiswa</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
