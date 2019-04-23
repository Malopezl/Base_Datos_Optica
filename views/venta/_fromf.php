<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Venta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="venta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Paciente')->Widget(Select2::classname(),[
        'data' => $clientes,
        'options'=>['placeholder'=>'Seleccione el paciente'],
        'pluginOptions'=>['allowClear=>true'],
    ]) ?>

    <?= $form->field($model, 'Fecha')->textInput() ?>

    <?= $form->field($model, 'No_Factura')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Total')->textInput() ?>

    <?= $form->field($model, 'Entregado')->textInput() ?>

    <?= $form->field($model, 'Adelanto')->textInput() ?>

    <?= $form->field($model, 'Finalizado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Finalizar'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
