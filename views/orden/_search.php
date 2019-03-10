<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrdenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orden-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idOrden') ?>

    <?= $form->field($model, 'ID_Receta') ?>

    <?= $form->field($model, 'Fecha_Entrega') ?>

    <?= $form->field($model, 'Precio_Total') ?>

    <?= $form->field($model, 'No_Caja') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
