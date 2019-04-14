<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Accesorios */

$this->title = $model->idAccesorio;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Accesorios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="accesorios-view">

    <h1>Accesorio</h1>
    <h1>ID: <?= Html::encode($this->title) ?></h1>
    <p>
<<<<<<< Updated upstream
        <?= Html::a('Actualizar', ['update', 'id' => $model->idAccesorio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->idAccesorio], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de que quieres borrar este elemento?',
=======
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idAccesorio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idAccesorio], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
>>>>>>> Stashed changes
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="table1"><?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idAccesorio',
            'Nombre',
            'Descripcion:ntext',
            'Precio_Costo',
            'Existencia',
            'Precio_Venta',
        ],
    ]) ?></div>

</div>
