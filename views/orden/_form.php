<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model app\models\Orden */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orden-form">

    <?php $form = ActiveForm::begin(); ?>

   
        <?= $form->field($model, 'idLentei')->Widget(Select2::classname(),[
        'data' => $lentes,
        'options'=>['placeholder'=>'Seleccione el Lente'],
        'pluginOptions'=>['allowClear=>true'],
    ]) ?>

    <?= $form->field($model, 'Preciolentei')->textInput() ?>

    <?= $form->field($model, 'idLented')->Widget(Select2::classname(),[
        'data' => $lentes,
        'options'=>['placeholder'=>'Seleccione el Lente'],
        'pluginOptions'=>['allowClear=>true'],
    ]) ?>

    <?= $form->field($model, 'Preciolented')->textInput() ?>

    <?= $form->field($model, 'idAro')->Widget(Select2::classname(),[
        'data' => $aros,
        'options'=>['placeholder'=>'Seleccione el Aro'],
        'pluginOptions'=>['allowClear=>true'],
    ]) ?>

    <?= $form->field($model, 'PrecioVentaAros')->textInput() ?>

    <?= $form->field($model, 'No_Caja')->textInput() ?>

    <?= $form->field($model, 'Anotaciones')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Fecha_Entrega')->textInput() ?>
    <!--
     <?= $form->field($model, 'idReceta')->textInput() ?>

        
    <?= $form->field($model, 'Total_orden')->textInput() ?>
    
    <?= $form->field($model, 'idVenta')->textInput() ?>
    
    <?= $form->field($model, 'Entregada')->textInput() ?>
    -->

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Registrar'), ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Cancelar'), ['venta/creates','id'=>$model->idVenta], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
