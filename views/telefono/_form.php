<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Telefono */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="telefono-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Telefono_Proveedor')->textInput() ?>

    <?= $form->field($model, 'ID_Proveedor')->textInput() ?>

    <?= $form->field($model, 'ID_Cliente')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
