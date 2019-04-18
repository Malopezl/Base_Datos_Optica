<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProveedoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<<<<<<< HEAD
<div class="proveedores-buscar"> // proveedores-search
=======
<div class="proveedores-search">
>>>>>>> develop

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Direccion') ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'NIT') ?>

<<<<<<< HEAD
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Buscar'), ['class' => 'btn btn-primary']) ?> //app, search
        <?= Html::resetButton(Yii::t('app', 'Eliminar'), ['class' => 'btn btn-default']) ?> // reset
=======
    <?= $form->field($model, 'Correo_electronico') ?>

    <?php // echo $form->field($model, 'Telefono1') ?>

    <?php // echo $form->field($model, 'Telefono2') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
