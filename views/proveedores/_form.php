<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proveedores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NIT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Correo_electronico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefono1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefono2')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
