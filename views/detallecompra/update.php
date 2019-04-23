<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Detallecompra */

$this->title = Yii::t('app', 'Update Detallecompra: {name}', [
    'name' => $model->ID,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Detallecompras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="detallecompra-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if($model->ID_Accesorio != null)
    	{
    		echo $this->render('_form', [
        	'model' => $model,
        	'accesorioss'=>$accesorioss,
        	'id'=>$id,
    		]);
    	}
    	else if($model->Lente_idLente!= null)
    	{
    		echo $this->render('_formls', [
        	'model' => $model,
        	'lentes'=>$lentes,
        	'id'=>$id,
    		]);
    	}

    	else if($model->ID_Aro!= null)
    	{
    		echo $this->render('_forma', [
        	'model' => $model,
        	'aros'=>$aros,
        	'id'=>$id,
    		]);
    	}
    	?>

</div>
