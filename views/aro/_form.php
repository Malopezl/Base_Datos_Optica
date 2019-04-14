<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Aro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aro-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-fo-2"><?= $form->field($model, 'Color')->textInput(['maxlength' => true]) ?></div>

    <div class="col-fo-1"><?= $form->field($model, 'Existencia')->textInput() ?></div>

    <div class="col-fo-1"><?= $form->field($model, 'Material')->textInput(['maxlength' => true]) ?></div><br><br><br><br>

    <div class="col-fo-1"><?= $form->field($model, 'Precio_Costo')->textInput() ?></div>

    <div class="col-fo-1"><?= $form->field($model, 'Precio_Venta')->textInput() ?></div></div><br><br><br><br>

    <?= $form->field($model, 'Codigo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
<<<<<<< Updated upstream
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
=======
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
>>>>>>> Stashed changes
    </div>

    <?php ActiveForm::end(); ?>

</div>
