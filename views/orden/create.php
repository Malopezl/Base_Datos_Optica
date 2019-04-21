<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model app\models\Orden */

$this->title = Yii::t('app', 'Create Orden');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ordens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orden-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
       <?= Html::a(Yii::t('app', 'Editar Receta'), ['receta/updateco','idrec'=>$idrec,'id'=>$id], ['class' => 'btn btn-success'])?>
    </p>
    <?= DetailView::widget([
        'model' => $model1,
        'attributes' => [
            //'idReceta',
            //'Fecha',
            'Esfera_OD',
            'Eje_OD',
            'Cilindro_OD',
            'AdicionOD',
            'Esfera_OI',
            'Eje_OI',
            'Cilindro_OI',
            'AdicionOI',
        ],
    ]) ?>

    <?= $this->render('_form', [
        'model' => $model,
         'aros'=>$aros,
         'lentes'=>$lentes,
         'id'=>$id,
    ]) ?>

</div>
