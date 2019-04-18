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

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Siguiente'), ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Registrar nuevo cliente'), ['cliente/createc'], ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
