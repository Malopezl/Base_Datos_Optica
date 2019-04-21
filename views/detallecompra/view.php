<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Detallecompra */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Detallecompras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="detallecompra-view">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        <!--<?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>-->
        <?= Html::a(Yii::t('app', 'Regresar'), ['compra/creates', 'id' => $model->ID_Compra], ['class' => 'btn btn-success'])?>
    </p>
<p><li><label>Informacion Nueva del Producto:</label>:</li> </p>
    <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'ID',
           // 'ID_Compra',
           // 'ID_Accesorio',
           // 'Lente_idLente',
           //'ID_Aro',
            'Precio_Compra',
            'Cantidad',
            'Precio_Venta',
        ],
    ]);
    ?>
    <p><li><label>Informacion Producto:</label>:</li> </p>
    <p>
    <?php
         if($model->ID_Accesorio != null)
        {
            echo DetailView::widget([
        'model' => $model2,
        'attributes' => [
            //'idAccesorio',
            'Nombre',
            'Descripcion:ntext',
            'Precio_Compra',
            'Existencia',
            'Precio_Venta',
        ],
        ]);
        }
        else if($model->Lente_idLente!= null)
        {
            echo DetailView::widget([
        'model' => $model1,
        'attributes' => [
            //'idLente',
            'graduacion_base',
            'Graduacion_Ecxedente',
            'Tipo',
            'Material',
            'Terminado',
            'Precio_Compra',
            'Precio_Venta',
            'Existencia',
            
            
        ],
    ]);
        }

        else if($model->ID_Aro!= null)
        {
            echo DetailView::widget([
        'model' => $model3,
        'attributes' => [
            'idAro',
            'Color',
            'Existencia',
            'Material',
            'Precio_Compra',
            'Precio_Venta',
            'Codigo',
            'Marca',
        ],
    ]) ;
        }
         ?>
         </p>

</div>
