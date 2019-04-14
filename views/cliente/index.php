<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ClienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

<<<<<<< Updated upstream
$this->title = 'Clientes';
=======
$this->title = Yii::t('app', 'Clientes');
>>>>>>> Stashed changes
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-index">

    <h1><?= Html::encode($this->title) ?></h1>
<<<<<<< Updated upstream
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cliente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

=======

    <p>
        <?= Html::a(Yii::t('app', 'Create Cliente'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

>>>>>>> Stashed changes
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idPaciente',
            'Correo_Electronico',
            'Nombre',
            'NIT',
<<<<<<< Updated upstream
=======
            'Telefono1',
            //'Telefono2',
            //'Correo',
>>>>>>> Stashed changes

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<<<<<<< Updated upstream
    <?php Pjax::end(); ?>
=======

    <?php Pjax::end(); ?>

>>>>>>> Stashed changes
</div>
