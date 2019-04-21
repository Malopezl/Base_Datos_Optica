<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ventaaccesorios */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ventaaccesorios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ventaaccesorios-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Regresar'), ['venta/viewc', 'id' => $model->ID_Venta], ['class' => 'btn btn-success'])?>
    </p>
<p><li><label>Detalle Venta:</label>:</li> </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'ID',
            //'ID_Accessorio',
            //'ID_Venta',
            'Cantidad',
            'Precio_Venta',
        ],
    ]) ?>
<p><li><label>Informacion del Accesorio:</label>:</li> </p>
    <?= DetailView::widget([
        'model' => $model1,
        'attributes' => [
            //'idAccesorio',
            'Nombre',
            'Descripcion:ntext',
            'Precio_Compra',
            'Existencia',
            'Precio_Venta',
        ],
    ]) ?>
</div>