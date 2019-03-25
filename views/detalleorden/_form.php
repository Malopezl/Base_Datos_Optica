<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetalleOrden */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalle-orden-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Semiterminado')->textInput() ?>

    <?= $form->field($model, 'ID_Terminado')->textInput() ?>

    <?= $form->field($model, 'ID_Orden')->textInput() ?>

    <?= $form->field($model, 'precio')->textInput() ?>

    <?= $form->field($model, 'cantidad')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
