<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idAro') ?>

    <?= $form->field($model, 'Color') ?>

    <?= $form->field($model, 'Existencia') ?>

    <?= $form->field($model, 'Material') ?>

    <?= $form->field($model, 'Precio_Costo') ?>

    <?php // echo $form->field($model, 'Precio_Venta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
