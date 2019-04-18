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

    <?= $form->field($model, 'Orden') ?>

    <?= $form->field($model, 'idReceta') ?>

    <?= $form->field($model, 'idLentei') ?>

    <?= $form->field($model, 'Fecha_Entrega') ?>

    <?= $form->field($model, 'Total_orden') ?>

    <?php // echo $form->field($model, 'idAro') ?>

    <?php // echo $form->field($model, 'Anotaciones') ?>

    <?php // echo $form->field($model, 'No_Caja') ?>

    <?php // echo $form->field($model, 'idVenta') ?>

    <?php // echo $form->field($model, 'Preciolentei') ?>

    <?php // echo $form->field($model, 'PrecioVentaAros') ?>

    <?php // echo $form->field($model, 'Entregada') ?>

    <?php // echo $form->field($model, 'Preciolented') ?>

    <?php // echo $form->field($model, 'idLented') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
