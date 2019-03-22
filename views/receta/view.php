<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Receta */

$this->title = $model->idReceta;
$this->params['breadcrumbs'][] = ['label' => 'Recetas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="receta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idReceta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idReceta], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idReceta',
            'ID_Paciente',
            'Fecha',
            'Esfera_OD',
            'Esfera_OI',
            'Eje_OD',
            'Eje_OI',
            'Cilindro_OD',
            'Cilindro_OI',
            'AdicionOD',
            'AdicionOI',
        ],
    ]) ?>

</div>
