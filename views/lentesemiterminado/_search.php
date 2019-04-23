<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LenteSemiterminadoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lente-semiterminado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idLente_Semiterminado') ?>

    <?= $form->field($model, 'Tipo_Lente') ?>

    <?= $form->field($model, 'Graduacion_Base') ?>

    <?= $form->field($model, 'Material') ?>

    <?= $form->field($model, 'Precio_Compra') ?>

    <?php // echo $form->field($model, 'Existencia') ?>

    <?php // echo $form->field($model, 'Precio_Venta') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
