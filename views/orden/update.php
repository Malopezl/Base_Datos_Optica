<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model app\models\Orden */

$this->title = Yii::t('app', 'Entregar Orden: {name}', [
    'name' => $model->Orden,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pendientes'), 'url' => ['pendientes']];
$this->params['breadcrumbs'][] = ['label' => $model->Orden, 'url' => ['view', 'id' => $model->Orden]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="orden-update">
	  <h1><?= Html::encode($this->title) ?></h1>
<p><li><label>Informacion Orden:</label>:</li> </p>
	 <?= DetailView::widget([

        'model' => $model,
        'attributes' => [
            //'Orden',
            //'idReceta',
            //'idLentei',
            'Fecha_Entrega',
            //'Total_orden',
            //'idAro',
            'Anotaciones:ntext',
            'No_Caja',
            //'idVenta',
            //'Preciolentei',
            //'PrecioVentaAros',
            'Entregada',
            //'Preciolented',
            //'idLented',
        ],
    ]) ?>


    <?= $this->render('_form', [
        'model' => $model,
        'aros'=>$aros,
        'lentes'=>$lentes,
    ]) ?>

</div>
