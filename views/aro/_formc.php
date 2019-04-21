<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Aro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Codigo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Color')->textInput(['maxlength' => true]) ?>
<!--
    <?= $form->field($model, 'Existencia')->textInput() ?>    

    <?= $form->field($model, 'Precio_Compra')->textInput() ?>

    <?= $form->field($model, 'Precio_Venta')->textInput() ?>
-->
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Registar'), ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Cancelar'), ['detallecompra/createa','id'=>$id, 'ida'=>0], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
