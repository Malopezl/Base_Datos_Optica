<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Ordenes Pendientes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orden-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       <!-- <?= Html::a(Yii::t('app', 'Create Orden'), ['create'], ['class' => 'btn btn-success']) ?>-->
       <?= Html::a(Yii::t('app', 'Regresar'), ['index'], ['class' => 'btn btn-danger']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Orden',
            //'idReceta',
            //'idLentei',
            'Fecha_Entrega',
            //'Total_orden',
            //'idAro',
            //'Anotaciones:ntext',
            'No_Caja',
            //'idVenta',
            //'Preciolentei',
            //'PrecioVentaAros',
            //'Entregada',
            //'Preciolented',
            //'idLented',

            ['class' => 'yii\grid\ActionColumn',
            'template'=>'{view} {update}',
            'buttons'=>[
             'view' => function ($url, $model) {
                $url = '/orden/viewp?id='.$model->Orden;
                return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                            'title' =>'Ver orden'
                ]);
            },

            'update' => function ($url, $model) {
                $url = '/orden/update1?id='.$model->Orden;
                return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                            'title' => Yii::t('app', 'Entregar Orden'),
                ]);
            },

          ],],
        ],
    ]); ?>

    <?php Pjax::end(); ?>
</div>
