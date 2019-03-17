<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Accesorios */

$this->title = $model->idAccesorio;
$this->params['breadcrumbs'][] = ['label' => 'Accesorios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="accesorios-view">

    <h1>Accesorio</h1>
    <h1>ID: <?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->idAccesorio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->idAccesorio], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de que quieres borrar este elemento?',
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
        ],
    ]) ?></div>

</div>
