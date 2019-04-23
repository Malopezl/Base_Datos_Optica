<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LenteTerminado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lente-terminado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Graduacion_Excedente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Graduacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tipo_segun_material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Precio_Compra')->textInput() ?>

    <?= $form->field($model, 'Existencia')->textInput() ?>

    <?= $form->field($model, 'Precio_Venta')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
