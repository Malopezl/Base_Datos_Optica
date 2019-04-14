<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetallesVentaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detalles-venta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
<<<<<<< Updated upstream
        'options' => [
            'data-pjax' => 1
        ],
=======
>>>>>>> Stashed changes
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'ID_Aro') ?>

    <?= $form->field($model, 'ID_Accessorio') ?>

    <?= $form->field($model, 'ID_Venta') ?>

    <?= $form->field($model, 'Cantidad') ?>

    <?php // echo $form->field($model, 'Precio_Venta') ?>

<<<<<<< Updated upstream
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
=======
    <?php // echo $form->field($model, 'idLente_Terminado') ?>

    <?php // echo $form->field($model, 'idLente_Semiterminado') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
>>>>>>> Stashed changes
    </div>

    <?php ActiveForm::end(); ?>

</div>
