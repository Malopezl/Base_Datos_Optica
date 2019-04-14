<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\VentaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

<<<<<<< Updated upstream
$this->title = 'Ventas';
=======
$this->title = Yii::t('app', 'Ventas');
>>>>>>> Stashed changes
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="venta-index">

    <h1><?= Html::encode($this->title) ?></h1>
<<<<<<< Updated upstream
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Venta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

=======

    <p>
        <?= Html::a(Yii::t('app', 'Create Venta'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

>>>>>>> Stashed changes
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idVenta',
            'ID_Paciente',
<<<<<<< Updated upstream
            'ID_Orden',
            'Fecha',
            'No_Factura',
            //'Total',
=======
            'Fecha',
            'No_Factura',
            'Total',
            //'Entregado',
            //'No_caja',
            //'idReceta',
>>>>>>> Stashed changes
            //'Adelanto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<<<<<<< Updated upstream
    <?php Pjax::end(); ?>
=======

    <?php Pjax::end(); ?>

>>>>>>> Stashed changes
</div>
