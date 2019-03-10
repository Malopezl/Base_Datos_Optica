<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VentaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="venta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idVenta') ?>

    <?= $form->field($model, 'ID_Paciente') ?>

    <?= $form->field($model, 'ID_Orden') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'No_Factura') ?>

    <?php // echo $form->field($model, 'Total') ?>

    <?php // echo $form->field($model, 'Adelanto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
