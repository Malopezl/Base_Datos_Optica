<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DetalleOrden */

$this->title = Yii::t('app', 'Create Detalle Orden');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Detalle Ordens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-orden-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
