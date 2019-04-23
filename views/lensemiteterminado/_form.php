<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LenteSemiterminado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lente-semiterminado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Tipo_Lente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Graduacion_Base')->textInput() ?>

    <?= $form->field($model, 'Material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Precio_Compra')->textInput() ?>

    <?= $form->field($model, 'Existencia')->textInput() ?>

    <?= $form->field($model, 'Lente_Semiterminadocol')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
