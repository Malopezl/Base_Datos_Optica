<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

<<<<<<< Updated upstream
$this->title = 'Aros';
=======
$this->title = Yii::t('app', 'Aros');
>>>>>>> Stashed changes
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aro-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Aro'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idAro',
            'Color',
            'Existencia',
            'Material',
            'Precio_Costo',
<<<<<<< Updated upstream
            'Precio_Venta',
=======
            //'Precio_Venta',
            //'Codigo',
>>>>>>> Stashed changes

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
