<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model app\models\Orden */

$this->title = Yii::t('app', 'Editar Orden: {name}', [
    'name' => $model->Orden,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pendientes'), 'url' => ['pendientes']];
$this->params['breadcrumbs'][] = ['label' => $model->Orden, 'url' => ['view', 'id' => $model->Orden]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="orden-update">
	  <h1><?= Html::encode($this->title) ?></h1>
<p><li><label>Informacion Orden:</label>:</li> </p>
	 <?php if($model->idReceta !=null)
     {


     echo DetailView::widget([
        'model' => $model4,
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
    ]);
     echo $this->render('_form', [
        'model' => $model,
        'aros'=>$aros,
        'lentes'=>$lentes,
        'id'=>$id,
        ]);
    }
    else{
        echo $this->render('_forma', [
        'model' => $model,
        'aros'=>$aros,
        'id'=>$id,
        ]) ;
    } ?>



</div>
