<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedores */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Proveedores'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="proveedores-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Editar Informacion'), ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Eliminar Proveedor'), ['delete', 'id' => $model->ID], [
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
            'ID',
            'Direccion',
            'Nombre',
            'NIT',
            'Correo_electronico',
            'Telefono1',
            'Telefono2',
        ],
    ]) ?>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            //'ID_proveedores',
            'No_Factura',
            'Fecha',
            'Monto_Efectivo',
            'Credito',
            'Total',
            //'Finalizado',

            ['class' => 'yii\grid\ActionColumn',
            'template'=>'{view}',
            'buttons'=>[
             'view' => function ($url, $model) {
                $url = '/compra/viewip?id='.$model->ID;
                return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                            'title' =>'Ver compra'
                ]);
            },
            

          ],],
        ],
    ]); ?>

    <?php Pjax::end(); ?>
    <p>
        <?= Html::a(Yii::t('app', 'Regresar'), ['index'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
