<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $model app\models\Compra */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Compras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="compra-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       <!-- <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>-->
        <?= Html::a(Yii::t('app', 'Regresar'), ['index'], ['class' => 'btn btn-success']) ?>
    </p>
<p><li><label>Informacion de la compra:</label>:</li> </p>
    <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'ID',
            //'ID_proveedores',
            'No_Factura',
            'Fecha',
            'Monto_Efectivo',
            'Credito',
            'Total',
            //'Finalizado',
        ],
    ]);
     ?>
     <p><li><label>Informacion del Proveedor:</label>:</li> </p>
     <?php
     if($model->ID_proveedores!=null)
        {
        echo DetailView::widget([
        'model' => $model1,
        'attributes' => [
            //'ID',
            
            'Nombre',
            'NIT',
            'Direccion',
            'Correo_electronico',
            'Telefono1',
            'Telefono2',
        ],
    ]);
    } ?>

 <p><li><label>Detalles de la Factura:</label>:</li> </p>
     <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'ID_Compra',
            'ID_Accesorio',
            'Lente_idLente',
            'ID_Aro',
            'Precio_Compra',
            'Cantidad',

            ['class' => 'yii\grid\ActionColumn',
            'template'=>'{view}',
            'buttons'=>[
             'view' => function ($url, $model) {
                $url = '/detallecompra/viewi?id='.$model->ID;
                return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                            'title' =>'Ver detalle'
                ]);
            },

          ],

        ],
        ],
        

    ]); ?>

    <?php Pjax::end(); ?>

</div>
