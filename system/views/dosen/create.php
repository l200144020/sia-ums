<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dosen */

$this->title = 'Create Dosen - ' . Yii::$app->name;
$this->params['breadcrumbs'][] = ['label' => 'Dosen', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Create Dosen';
?>
<div class="dosen-create">

    <h1>Create Dosen</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
