<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetallesVentaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Detalles Ventas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalles-venta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Detalles Venta'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'ID_Aro',
            'ID_Accessorio',
            'ID_Venta',
            'Cantidad',
            //'Precio_Venta',
            //'idLente_Terminado',
            //'idLente_Semiterminado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
