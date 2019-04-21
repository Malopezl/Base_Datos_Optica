<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lente-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'Material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'graduacion_base')->textInput() ?>

    <?= $form->field($model, 'Graduacion_Ecxedente')->textInput(['maxlength' => true]) ?>

    
    <?= $form->field($model, 'Precio_Compra')->textInput() ?>

    <?= $form->field($model, 'Precio_Venta')->textInput() ?>
        
    <?= $form->field($model, 'Existencia')->textInput() ?>
    <!--
    <?= $form->field($model, 'Terminado')->textInput() ?>
    -->
    

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Agregar'), ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Cancelar'), ['index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
