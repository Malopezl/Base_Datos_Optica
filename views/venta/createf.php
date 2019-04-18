<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model app\models\Venta */

$this->title = Yii::t('app', 'Finalizar Venta: {name}', [
    'name' => $model->idVenta,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ventas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idVenta, 'url' => ['view', 'id' => $model->idVenta]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="venta-update">

    <h1><?= Html::encode($this->title) ?></h1>
	<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'idVenta',
            //'ID_Paciente',
            'Fecha',
            //'No_Factura',
            'Total',
            //'Entregado',
            //'Adelanto',
            //'Finalizado',
        ],
    ]) ?>
    <?= $this->render('_formf', [
        'model' => $model,
        'clientes'=>$clientes,
    ]) ?>

</div>
