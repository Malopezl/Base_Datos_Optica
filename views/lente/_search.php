<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LenteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idLente') ?>

    <?= $form->field($model, 'graduacion_base') ?>

    <?= $form->field($model, 'Graduacion_Ecxedente') ?>

    <?= $form->field($model, 'Precio_Compra') ?>

    <?= $form->field($model, 'Precio_Venta') ?>

    <?php // echo $form->field($model, 'Existencia') ?>

    <?php // echo $form->field($model, 'Terminado') ?>

    <?php // echo $form->field($model, 'Tipo') ?>

    <?php // echo $form->field($model, 'Material') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
