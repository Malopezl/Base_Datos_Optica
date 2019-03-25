<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProveedoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proveedores-buscar"> // proveedores-search

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

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Buscar'), ['class' => 'btn btn-primary']) ?> //app, search
        <?= Html::resetButton(Yii::t('app', 'Eliminar'), ['class' => 'btn btn-default']) ?> // reset
    </div>

    <?php ActiveForm::end(); ?>

</div>
