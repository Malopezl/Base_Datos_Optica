<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Correo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="correo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Correo_Proveedor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_Proveedor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
