<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LentesemiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lentesemi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idLente_Semiterminado') ?>

    <?= $form->field($model, 'Tipo_Lente') ?>

    <?= $form->field($model, 'Graduacion_Base') ?>

    <?= $form->field($model, 'Material') ?>

    <?= $form->field($model, 'Precio_Compra') ?>

    <?= $form->field($model, 'Existencia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
