<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VentaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="venta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idVenta') ?>

    <?= $form->field($model, 'ID_Paciente') ?>

<<<<<<< Updated upstream
    <?= $form->field($model, 'ID_Orden') ?>

=======
>>>>>>> Stashed changes
    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'No_Factura') ?>

<<<<<<< Updated upstream
    <?php // echo $form->field($model, 'Total') ?>
=======
    <?= $form->field($model, 'Total') ?>

    <?php // echo $form->field($model, 'Entregado') ?>

    <?php // echo $form->field($model, 'No_caja') ?>

    <?php // echo $form->field($model, 'idReceta') ?>
>>>>>>> Stashed changes

    <?php // echo $form->field($model, 'Adelanto') ?>

    <div class="form-group">
<<<<<<< Updated upstream
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
=======
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
>>>>>>> Stashed changes
    </div>

    <?php ActiveForm::end(); ?>

</div>
