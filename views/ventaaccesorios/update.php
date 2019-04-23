<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ventaaccesorios */

$this->title = Yii::t('app', 'Editar Venta: {name}', [
    'name' => $model->ID,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ventaaccesorios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ventaaccesorios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'accesorioss' => $accesorioss,
            'id'=>$id,
    ]) ?>

</div>
