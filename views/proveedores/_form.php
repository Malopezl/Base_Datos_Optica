<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proveedores-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
     <div class="col-sm-8"><?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?></div>
     <div class="col-sm-4"><?= $form->field($model, 'NIT')->textInput() ?></div>
	 <div class="col-sm-12"><?= $form->field($model, 'Direccion')->textInput(['maxlength' => true]) ?></div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Guardar'), ['class' => 'btn btn-success']) ?>
=======
    <?= $form->field($model, 'Direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Correo_electronico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefono1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefono2')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Registrar'), ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Regresar'),['compra/create', 'id'=>0], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
