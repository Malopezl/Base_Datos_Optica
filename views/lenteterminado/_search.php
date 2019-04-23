<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LenteTerminadoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lente-terminado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idLente_Terminado') ?>

    <?= $form->field($model, 'Graduacion_Excedente') ?>

    <?= $form->field($model, 'Material') ?>

    <?= $form->field($model, 'Graduacion') ?>

    <?= $form->field($model, 'Tipo_segun_material') ?>

    <?php // echo $form->field($model, 'Precio_Compra') ?>

    <?php // echo $form->field($model, 'Existencia') ?>

    <?php // echo $form->field($model, 'Precio_Venta') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
