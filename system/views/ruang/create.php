<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ruang */

$this->title = 'Create Ruang - ' . Yii::$app->name;
$this->params['breadcrumbs'][] = ['label' => 'Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Create Ruang';
?>
<div class="ruang-create">

    <h1>Create Ruang</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
