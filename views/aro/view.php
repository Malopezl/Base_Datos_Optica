<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aro */

$this->title = $model->idAro;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="aro-view">

    <h1>Aro</h1>
    <h1>ID: <?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< Updated upstream
        <?= Html::a('Actualizar', ['update', 'id' => $model->idAro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->idAro], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de que quieres borrar este elemento?',
=======
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idAro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idAro], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
>>>>>>> Stashed changes
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idAro',
            'Color',
            'Existencia',
            'Material',
            'Precio_Costo',
            'Precio_Venta',
            'Codigo',
        ],
    ]) ?>

</div>
