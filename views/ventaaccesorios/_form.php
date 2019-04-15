<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VentaAccesorios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="venta-accesorios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Accessorio')->textInput() ?>

    <?= $form->field($model, 'ID_Venta')->textInput() ?>

    <?= $form->field($model, 'Cantidad')->textInput() ?>

    <?= $form->field($model, 'Precio_Venta')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
