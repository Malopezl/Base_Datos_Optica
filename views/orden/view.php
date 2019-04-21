<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Orden */

$this->title = $model->Orden;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ordens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="orden-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       <?= Html::a(Yii::t('app', 'Regresar'), ['index'], ['class' => 'btn btn-success'])?>
    </p>

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
            //'Entregada',
            //'Preciolented',
            //'idLented',
        ],
    ]) ?>

<p><li><label>Informacion Aro:</label>:</li> </p>
    <?php
    if($model->idAro != null)
    {
        echo
            DetailView::widget([
        'model' => $model3,
        'attributes' => [
            //'idAro',
            'Codigo',
            'Marca',
            'Color',
            'Material',
            'Existencia',
            'Precio_Compra',
            'Precio_Venta',
            
        ],
    ])
        ;
    }
    ?>
<p><li><label>Informacion Receta:</label>:</li> </p>
     <?php 
     if($model->idReceta != null)
     {
        echo DetailView::widget([
        'model' => $model4,
        'attributes' => [
            //'idReceta',
            'Fecha',
            'Esfera_OD',
            'Eje_OD',
            'Cilindro_OD',
            'AdicionOD',
            'Esfera_OI',
            'Eje_OI',
            'Cilindro_OI',
            'AdicionOI',
        ],
    ]);

        
     }

      ?>
<p><li><label>Informacion Lente Izquierdo:</label>:</li> </p>
    <?php
    if($model->idLentei != null)
    {
        echo DetailView::widget([
        'model' => $model1,
        'attributes' => [
            //'idLente',
            'Terminado',
            'Tipo',
            'Material',
            'graduacion_base',
            'Graduacion_Ecxedente',
            'Precio_Compra',
            'Precio_Venta',
            'Existencia',
        ],
    ])

        ;
    }
    ?>
<p><li><label>Informacion Lente Derecho:</label>:</li> </p>
    <?php
    if($model->idLented != null)
    {
        echo DetailView::widget([
        'model' => $model2,
        'attributes' => [
            'idLente',
            'graduacion_base',
            'Graduacion_Ecxedente',
            'Precio_Compra',
            'Precio_Venta',
            'Existencia',
            'Terminado',
            'Tipo',
            'Material',
        ],
    ])

        ;
    }
    ?>


</div>
