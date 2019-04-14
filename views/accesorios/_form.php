<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Accesorios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accesorios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Precio_Costo')->textInput() ?>

    <?= $form->field($model, 'Existencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Precio_Venta')->textInput() ?>

    <div class="form-group">
<<<<<<< HEAD
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
=======
<<<<<<< Updated upstream
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
=======
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
>>>>>>> Stashed changes
>>>>>>> rama
    </div>

    <?php ActiveForm::end(); ?>

</div>
