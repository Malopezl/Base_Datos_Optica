<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\Detallecompra */
/* @var $form yii\widgets\ActiveForm */
?>
    
<div class="detallecompra-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--<?= $form->field($model, 'ID_Compra')->textInput() ?>

    <?= $form->field($model, 'ID_Accesorio')->textInput() ?>
-->
    <?= $form->field($model, 'Lente_idLente')->Widget(Select2::classname(),[
        'data' => $lentes,
        'options'=>['placeholder'=>'Seleccione el tipo de lente'],
        'pluginOptions'=>['allowClear=>true'],
    ]) ?>
<!--
    <?= $form->field($model, 'ID_Aro')->textInput() ?>
-->
    <?= $form->field($model, 'Precio_Compra')->textInput() ?>

    <?= $form->field($model, 'Cantidad')->textInput() ?>

    <?= $form->field($model, 'Precio_Venta')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Agregar'), ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Registrar nuevo producto'), ['lente/create','id'=>$id], ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
