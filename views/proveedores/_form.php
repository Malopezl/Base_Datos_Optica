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

    <?= $form->field($model, 'NIT')->textInput() ?>
<<<<<<< Updated upstream
=======

    <?= $form->field($model, 'Correo_electronico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefono1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefono2')->textInput(['maxlength' => true]) ?>
>>>>>>> Stashed changes

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
>>>>>>> develop
    </div>

    <?php ActiveForm::end(); ?>

</div>
