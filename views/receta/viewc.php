<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Receta */

$this->title = $model->idReceta;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Recetas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="receta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Regresar'), ['cliente/view', 'id' => $model->idPaciente], ['class' => 'btn btn-success']) ?>
        
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'idReceta',
            'Fecha',
            'Esfera_OD',
            'Eje_OD',
            'Cilindro_OD',
            'AdicionOD',
            'Esfera_OI',
            'Eje_OI',
            'Cilindro_OI',
            'AdicionOI',
            //'idPaciente',
        ],
    ]) ?>

</div>
