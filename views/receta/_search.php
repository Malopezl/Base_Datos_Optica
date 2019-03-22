<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RecetaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="receta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idReceta') ?>

    <?= $form->field($model, 'ID_Paciente') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'Esfera_OD') ?>

    <?= $form->field($model, 'Esfera_OI') ?>

    <?php // echo $form->field($model, 'Eje_OD') ?>

    <?php // echo $form->field($model, 'Eje_OI') ?>

    <?php // echo $form->field($model, 'Cilindro_OD') ?>

    <?php // echo $form->field($model, 'Cilindro_OI') ?>

    <?php // echo $form->field($model, 'AdicionOD') ?>

    <?php // echo $form->field($model, 'AdicionOI') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
