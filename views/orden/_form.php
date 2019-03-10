<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Orden */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orden-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Receta')->textInput() ?>

    <?= $form->field($model, 'Fecha_Entrega')->textInput() ?>

    <?= $form->field($model, 'Precio_Total')->textInput() ?>

    <?= $form->field($model, 'No_Caja')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
