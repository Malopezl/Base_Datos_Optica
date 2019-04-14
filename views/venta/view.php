<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Venta */

$this->title = $model->idVenta;
<<<<<<< Updated upstream
$this->params['breadcrumbs'][] = ['label' => 'Ventas', 'url' => ['index']];
=======
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ventas'), 'url' => ['index']];
>>>>>>> Stashed changes
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="venta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< Updated upstream
        <?= Html::a('Update', ['update', 'id' => $model->idVenta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idVenta], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
=======
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idVenta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idVenta], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
>>>>>>> Stashed changes
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idVenta',
            'ID_Paciente',
<<<<<<< Updated upstream
            'ID_Orden',
            'Fecha',
            'No_Factura',
            'Total',
=======
            'Fecha',
            'No_Factura',
            'Total',
            'Entregado',
            'No_caja',
            'idReceta',
>>>>>>> Stashed changes
            'Adelanto',
        ],
    ]) ?>

</div>
