<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idAro') ?>

    <?= $form->field($model, 'Color') ?>

    <?= $form->field($model, 'Existencia') ?>

    <?= $form->field($model, 'Material') ?>

    <?= $form->field($model, 'Precio_Compra') ?>

    <?php // echo $form->field($model, 'Precio_Venta') ?>

    <?php // echo $form->field($model, 'Codigo') ?>

    <?php // echo $form->field($model, 'Marca') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
