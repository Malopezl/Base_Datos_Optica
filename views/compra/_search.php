<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CompraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compra-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'ID_proveedores') ?>

    <?= $form->field($model, 'No_Factura') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'Monto_Efectivo') ?>

    <?php // echo $form->field($model, 'Credito') ?>

    <?php // echo $form->field($model, 'Total') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Buscar'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Eliminar'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
