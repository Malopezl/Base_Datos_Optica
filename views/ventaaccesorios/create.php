<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VentaAccesorios */

$this->title = Yii::t('app', 'Create Venta Accesorios');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Venta Accesorios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="venta-accesorios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
