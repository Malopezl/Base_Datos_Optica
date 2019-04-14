<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AccesoriosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

<<<<<<< Updated upstream
$this->title = 'Accesorios';
=======
$this->title = Yii::t('app', 'Accesorios');
>>>>>>> Stashed changes
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accesorios-index">

    <h1><?= Html::encode($this->title) ?></h1>
<<<<<<< Updated upstream
    <?php Pjax::begin(); ?>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>
=======
>>>>>>> Stashed changes

    <p>
        <?= Html::a(Yii::t('app', 'Create Accesorios'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idAccesorio',
            'Nombre',
            'Descripcion:ntext',
            'Precio_Costo',
            'Existencia',
            //'Precio_Venta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
