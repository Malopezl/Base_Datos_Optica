<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\LenteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Lentes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lente-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Registrar Lente Semiterminado'), ['createils'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idLente',
            'Material',
            'Tipo',
            'graduacion_base',
            'Graduacion_Ecxedente',
            'Precio_Compra',
            'Precio_Venta',
            //'Existencia',
            //'Terminado',

            ['class' => 'yii\grid\ActionColumn',
            'template'=>'{view} {update} {delete}',
            'buttons'=>[
             'view' => function ($url, $model) {
                $url = '/lente/viewls?id='.$model->idLente;
                return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                            'title' =>'Ver accesorio'
                ]);
            },

            'update' => function ($url, $model) {
                $url = '/lente/update?id='.$model->idLente;
                return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                            'title' => Yii::t('app', 'Editar'),
                ]);
            },
            'delete' => function ($url, $model) {
                $url = '/lente/delete?id='.$model->idLente;
                return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                    'title'        => 'delete',
            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
            'data-method'  => 'post',
            ]);
            }

          ],],
        ],
    ]); ?>

    <?php Pjax::end(); ?>
     <p>
        <?= Html::a(Yii::t('app', 'Registrar Lente Terminado'), ['createilt'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvidero,
        'filterModel' => $searchModelo,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idLente',
            'Material',
            'Tipo',
            'graduacion_base',
            //'Graduacion_Ecxedente',
            'Precio_Compra',
            'Precio_Venta',
            //'Existencia',
            //'Terminado',
            
            

            ['class' => 'yii\grid\ActionColumn',
            'template'=>'{view} {update} {delete}',
            'buttons'=>[
             'view' => function ($url, $model) {
                $url = '/lente/viewlt?id='.$model->idLente;
                return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                            'title' =>'Ver accesorio'
                ]);
            },

            'update' => function ($url, $model) {
                $url = '/lente/updatelt?id='.$model->idLente;
                return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                            'title' => Yii::t('app', 'Editar'),
                ]);
            },
            'delete' => function ($url, $model) {
                $url = '/lente/delete?id='.$model->idLente;
                return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                    'title'        => 'delete',
            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
            'data-method'  => 'post',
            ]);
            }

          ],],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
