<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Venta */

$this->title = $model->idVenta
;$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ventas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="venta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idVenta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idVenta], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idVenta',
            'ID_Paciente',
            'Fecha',
            'No_Factura',
            'Total',
            'Entregado',
            'Adelanto',
        ],
    ]) ?>
    <p><li><label>Subtotal:</label>:<?= Html::encode($total)?></li> </p>
    <p>
        <?= Html::a(Yii::t('app', 'Agregar Accesorio'), ['ventaaccesorios/create', 'id' => $model->idVenta], ['class' => 'btn btn-primary']) ?>
    </p>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            //'ID_Accessorio',
            //'ID_Venta',
            'Cantidad',
            'Precio_Venta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    


    <?php Pjax::end(); ?>
    <p>
        <?= Html::a(Yii::t('app', 'Agregar Lentes/Aros'), ['receta/createv', 'id' => $model->idVenta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Agregar Aros'), ['orden/createa', 'id' =>$model->idVenta], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvidero,
        'filterModel' => $searchModelo,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'Orden',
            //'idVenta',
            //'idReceta',
            //'idLente',
            'Fecha_Entrega',
            'Total_orden',
            //'idAro',
            'Anotaciones:ntext',
            'No_Caja',


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


    

    <?php Pjax::end(); ?>
    <p>
        <?= Html::a(Yii::t('app', 'Finalizar Venta'), ['venta/createf', 'id' => $model->idVenta], ['class' => 'btn btn-success']) ?>
    </p>


</div>