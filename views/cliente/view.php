<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */

$this->title = $model->idPaciente;
<<<<<<< Updated upstream
$this->params['breadcrumbs'][] = ['label' => 'Clientes', 'url' => ['index']];
=======
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Clientes'), 'url' => ['index']];
>>>>>>> Stashed changes
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cliente-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< Updated upstream
        <?= Html::a('Update', ['update', 'id' => $model->idPaciente], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idPaciente], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
=======
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idPaciente], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idPaciente], [
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
            'idPaciente',
            'Correo_Electronico',
            'Nombre',
            'NIT',
<<<<<<< Updated upstream
=======
            'Telefono1',
            'Telefono2',
            'Correo',
>>>>>>> Stashed changes
        ],
    ]) ?>

</div>
