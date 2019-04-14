<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RecetaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Recetas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="receta-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Receta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idReceta',
            'ID_Paciente',
            'Fecha',
            'Esfera_OD',
            'Esfera_OI',
            //'Eje_OD',
            //'Eje_OI',
            //'Cilindro_OD',
            //'Cilindro_OI',
            //'AdicionOD',
            //'AdicionOI',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
