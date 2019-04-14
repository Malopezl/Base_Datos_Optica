<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\LentesemiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ingreso Lente Semiterminado';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lentesemi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ingreasar Lentesemi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

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
            //'Lente_Semiterminadocol',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
