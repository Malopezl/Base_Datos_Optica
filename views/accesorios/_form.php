<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Accesorios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accesorios-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-fo-1"><?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?></div>

    <div class="col-fo-1"><?= $form->field($model, 'Precio_Costo')->textInput() ?></div>

    <div class="col-fo-1"><?= $form->field($model, 'Existencia')->textInput(['maxlength' => true]) ?></div><br><br><br><br>

    <div><?= $form->field($model, 'Descripcion')->textarea(['rows' => 3]) ?></div>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
