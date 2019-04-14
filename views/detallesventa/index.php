<?php

use yii\helpers\Html;
use yii\grid\GridView;
<<<<<<< Updated upstream
use yii\widgets\Pjax;
=======

>>>>>>> Stashed changes
/* @var $this yii\web\View */
/* @var $searchModel app\models\DetallesVentaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Detalles Ventas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalles-venta-index">

    <h1><?= Html::encode($this->title) ?></h1>
<<<<<<< Updated upstream
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
=======
>>>>>>> Stashed changes

    <p>
        <?= Html::a(Yii::t('app', 'Create Detalles Venta'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<<<<<<< Updated upstream
=======
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
            //'idLente_Terminado',
            //'idLente_Semiterminado',
>>>>>>> Stashed changes

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<<<<<<< Updated upstream
    <?php Pjax::end(); ?>
=======


>>>>>>> Stashed changes
</div>
