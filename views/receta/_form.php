<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datetimepicker\DateTimePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Receta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="receta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Fecha')->widget(DateTimePicker::className(), [
                                                                        'language' => 'es',
                                                                        'size' => 'ms',
                                                                        //'template' => '{input}',
                                                                        'pickButtonIcon' => 'glyphicon glyphicon-time',
                                                                        'inline' => false,
                                                                        'clientOptions' => [
                                                                          //'startView' => 1,
                                                                           // 'minView' => 0,
                                                                            //'maxView' => 1,
                                                                            'autoclose' => true,
                                                                            'linkFormat' => 'HH:ii P', // if inline = true
                                                                            // 'format' => 'HH:ii P', // if inline = false
                                                                            'todayBtn' => true
                                                                        ]]) ?>

    <?= $form->field($model, 'Esfera_OD')->textInput() ?>

    <?= $form->field($model, 'Esfera_OI')->textInput() ?>

    <?= $form->field($model, 'Eje_OD')->textInput() ?>

    <?= $form->field($model, 'Eje_OI')->textInput() ?>

    <?= $form->field($model, 'Cilindro_OD')->textInput() ?>

    <?= $form->field($model, 'Cilindro_OI')->textInput() ?>

    <?= $form->field($model, 'AdicionOD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AdicionOI')->textInput(['maxlength' => true]) ?>

    
<!--
    <?= $form->field($model, 'idPaciente')->textInput() ?>
-->
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Registrar'), ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Cancelar'), ['venta/creates','id'=>$id], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
