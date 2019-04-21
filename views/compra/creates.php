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


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'ID_proveedores',
            'No_Factura',
            'Fecha',
            'Monto_Efectivo',
            'Credito',
            'Total',
            'Finalizado',
        ],
    ]) ?>
    <p>
    <?= Html::a(Yii::t('app', 'Agregar Aros'), ['detallecompra/createa', 'id' => $model->ID,'ida'=>$idlen], ['class' => 'btn btn-primary']) ?>
    <?= Html::a(Yii::t('app', 'Agregar Lente Terminado'), ['detallecompra/createlt', 'id' => $model->ID, 'idlen'=>$idlen], ['class' => 'btn btn-primary']) ?>
    <?= Html::a(Yii::t('app', 'Agregar Lente Semiterminado'), ['detallecompra/createls', 'id' => $model->ID, 'idlen'=>$idlen], ['class' => 'btn btn-primary']) ?>
    <?= Html::a(Yii::t('app', 'Agregar Accesorio'), ['detallecompra/create', 'id' => $model->ID,'ida'=>$idlen], ['class' => 'btn btn-primary']) ?>
    </p>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'ID_Compra',
            'ID_Accesorio',
            'Lente_idLente',
            //'ID_Aro',
            //'Precio_Compra',
            //'Cantidad',

            ['class' => 'yii\grid\ActionColumn',
            'template'=>'{view} {update} {delete}',
            'buttons'=>[
             'view' => function ($url, $model) {
                $url = '/detallecompra/view?id='.$model->ID;
                return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                            'title' =>'lead-view'
                ]);
            },

            'update' => function ($url, $model) {
                $url = '/detallecompra/update?id='.$model->ID;
                return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                            'title' => Yii::t('app', 'lead-update'),
                ]);
            },
            'delete' => function ($url, $model) {
                $url = '/detallecompra/delete?id='.$model->ID;
                return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                    'title'        => 'delete',
            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
            'data-method'  => 'post',
            ]);
            }

          ],

        ],
        ],
        

    ]); ?>

    <?php Pjax::end(); ?>


    <p>
       <!-- <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
       -->
       <?= Html::a(Yii::t('app', 'Finalizar compra'), ['createf', 'id' => $model->ID], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Cancelar'), ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to cancel this buy?'),
                'method' => 'post',
            ],
        ]) ?> 
    </p>
</div>
