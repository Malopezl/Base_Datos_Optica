<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LenteTerminadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lente Terminados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lente-terminado-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lente Terminado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idLente_Terminado',
            'Graduacion_Excedente',
            'Material',
            'Graduacion',
            'Tipo_segun_material',
            //'Precio_Compra',
            //'Existencia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
