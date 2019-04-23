<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Lente */

$this->title = $model->idLente;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lentes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lente-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idLente], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idLente], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'idLente',
            'Material',
            'Tipo',
            'graduacion_base',
            //'Graduacion_Ecxedente',
            'Precio_Compra',
            'Precio_Venta',
            'Existencia',
            //'Terminado',
            
        ],
    ]) ?>
    <p>
     <?= Html::a(Yii::t('app', 'Regresar'), ['index'], ['class' => 'btn btn-success']) ?>
    </p>

</div>
