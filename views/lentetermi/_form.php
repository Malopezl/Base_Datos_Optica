<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lentetermi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lentetermi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Graduacion_Excedente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Graduacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tipo_segun_material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Precio_Compra')->textInput() ?>

    <?= $form->field($model, 'Existencia')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
