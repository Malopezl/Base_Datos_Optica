<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Aro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Existencia')->textInput() ?>

    <?= $form->field($model, 'Material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Precio_Costo')->textInput() ?>

    <?= $form->field($model, 'Precio_Venta')->textInput() ?>

    <?= $form->field($model, 'Codigo')->textInput(['maxlength' => true]) ?>

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
