<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ventaaccesorios */

$this->title = Yii::t('app', 'Agregar Accesorio a la Venta');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ventaaccesorios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ventaaccesorios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'accesorioss' => $accesorioss,
        'id'=>$id
    ]) ?>

</div>
