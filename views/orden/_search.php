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

    <?= $form->field($model, 'idVenta') ?>

    <?= $form->field($model, 'idReceta') ?>

    <?= $form->field($model, 'idLente') ?>

    <?= $form->field($model, 'Cantidad_Lentes') ?>

    <?php // echo $form->field($model, 'Fecha_Entrega') ?>

    <?php // echo $form->field($model, 'Total_orden') ?>

    <?php // echo $form->field($model, 'idAro') ?>

    <?php // echo $form->field($model, 'Anotaciones') ?>

    <?php // echo $form->field($model, 'No_Caja') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
