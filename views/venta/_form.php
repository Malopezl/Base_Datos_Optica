<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Venta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="venta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Paciente')->textInput() ?>

<<<<<<< Updated upstream
    <?= $form->field($model, 'ID_Orden')->textInput() ?>

=======
>>>>>>> Stashed changes
    <?= $form->field($model, 'Fecha')->textInput() ?>

    <?= $form->field($model, 'No_Factura')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Total')->textInput() ?>

<<<<<<< Updated upstream
    <?= $form->field($model, 'Adelanto')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
=======
    <?= $form->field($model, 'Entregado')->textInput() ?>

    <?= $form->field($model, 'No_caja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idReceta')->textInput() ?>

    <?= $form->field($model, 'Adelanto')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
>>>>>>> Stashed changes
    </div>

    <?php ActiveForm::end(); ?>

</div>
