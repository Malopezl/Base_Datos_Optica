<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProveedoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Proveedores');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proveedores-index">

    <h1><?= Html::encode($this->title) ?></h1>
<<<<<<< HEAD
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Crear Proveedor'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
/
=======

    <p>
        <?= Html::a(Yii::t('app', 'Create Proveedores'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<<<<<<< Updated upstream
=======
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

>>>>>>> Stashed changes
>>>>>>> develop
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Direccion',
            'Nombre',
            'NIT',
<<<<<<< HEAD
=======
            'Correo_electronico',
            //'Telefono1',
            //'Telefono2',
>>>>>>> develop

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<<<<<<< HEAD
    <?php Pjax::end(); ?>
=======

    <?php Pjax::end(); ?>

>>>>>>> develop
</div>
