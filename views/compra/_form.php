<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Compra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compra-form">

    <?php $form = ActiveForm::begin(); ?>


    <div class="col-sm-4"><?= $form->field($model, 'No_Factura')->textInput(['maxlength' => true]) ?></div>
    <div class="col-sm-4"><?= $form->field($model, 'ID_proveedores')->textInput(['maxlength' => true]) ?></div>
    <div class="col-sm-4"><?= $form->field($model, 'Fecha')->textInput() ?></div>
    <div class="col-sm-4"><?= $form->field($model, 'Monto_Efectivo')->textInput() ?></div>  
    <div class="col-sm-4"><?= $form->field($model, 'Credito')->textInput() ?></div>
    <div class="col-sm-4"><?= $form->field($model, 'Total')->textInput() ?></div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

