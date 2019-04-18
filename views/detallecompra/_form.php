<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Detallecompra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detallecompra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_Compra')->textInput() ?>

    <?= $form->field($model, 'ID_Accesorio')->textInput() ?>

    <?= $form->field($model, 'ID_L_Terminado')->textInput() ?>

    <?= $form->field($model, 'ID_L_STerminado')->textInput() ?>

    <?= $form->field($model, 'Lente_idLente')->textInput() ?>

    <?= $form->field($model, 'ID_Aro')->textInput() ?>

    <?= $form->field($model, 'Precio_Compra')->textInput() ?>

    <?= $form->field($model, 'Cantidad')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
