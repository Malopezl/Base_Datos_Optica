<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\Compra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_proveedores')->Widget(Select2::classname(),[
        'data' => $proveedoress,
        'options'=>['placeholder'=>'Seleccione el proveedor'],
        'pluginOptions'=>['allowClear=>true'],
    ]) ?>


    <?= $form->field($model, 'No_Factura')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Monto_Efectivo')->textInput() ?>

    <?= $form->field($model, 'Credito')->textInput() ?>

    <?= $form->field($model, 'Total')->textInput() ?>
<!--
    <?= $form->field($model, 'Fecha')->textInput() ?>

    <?= $form->field($model, 'Finalizado')->textInput() ?>
-->
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Siguiente'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
