<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetallecompraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detallecompra-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'ID_Compra') ?>

    <?= $form->field($model, 'ID_Accesorio') ?>

    <?= $form->field($model, 'Lente_idLente') ?>

    <?= $form->field($model, 'ID_Aro') ?>

    <?php // echo $form->field($model, 'Precio_Compra') ?>

    <?php // echo $form->field($model, 'Cantidad') ?>

    <?php // echo $form->field($model, 'Precio_Venta') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
