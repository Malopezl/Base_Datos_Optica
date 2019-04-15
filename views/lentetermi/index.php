<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\LentetermiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

<<<<<<< HEAD:views/lentetermi/index.php
$this->title = 'Ingreso Lente Terminado';
=======
$this->title = Yii::t('app', 'Ordens');
>>>>>>> rama:views/orden/index.php
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lentetermi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< HEAD:views/lentetermi/index.php
        <?= Html::a('Ingresar Lentetermi', ['create'], ['class' => 'btn btn-success']) ?>
=======
        <?= Html::a(Yii::t('app', 'Create Orden'), ['create'], ['class' => 'btn btn-success']) ?>
>>>>>>> rama:views/orden/index.php
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

<<<<<<< HEAD:views/lentetermi/index.php
            'idLente_Terminado',
            'Graduacion_Excedente',
            'Material',
            'Graduacion',
            'Tipo_segun_material',
            //'Precio_Compra',
            //'Existencia',
=======
            'Orden',
            'idVenta',
            'idReceta',
            'idLente',
            'Cantidad_Lentes',
            //'Fecha_Entrega',
            //'Total_orden',
            //'idAro',
            //'Anotaciones:ntext',
            //'No_Caja',
>>>>>>> rama:views/orden/index.php

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
