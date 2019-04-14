<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Orden */

$this->title = 'Update Orden: ' . $model->idOrden;
$this->params['breadcrumbs'][] = ['label' => 'Ordens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idOrden, 'url' => ['view', 'id' => $model->idOrden]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="orden-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
