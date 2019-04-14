<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LenteSemiterminadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Lente Semiterminados');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lente-semiterminado-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Lente Semiterminado'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idLente_Semiterminado',
            'Tipo_Lente',
            'Graduacion_Base',
            'Material',
            'Precio_Compra',
            //'Existencia',
            //'Precio_Venta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
