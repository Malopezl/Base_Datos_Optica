<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\Ventaaccesorios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ventaaccesorios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Accessorio')->Widget(Select2::classname(),[
        'data' => $accesorioss,
        'options'=>['placeholder'=>'Seleccione el accesorio'],
        'pluginOptions'=>['allowClear=>true'],
    ]) ?>

    <?= $form->field($model, 'ID_Venta')->textInput() ?>

    <?= $form->field($model, 'Cantidad')->textInput() ?>

    <?= $form->field($model, 'Precio_Venta')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Agregar'), ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Cancelar'), ['venta/creates','id'=>$id], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
