<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LentetermiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lentetermi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

<<<<<<< HEAD:views/lentetermi/_search.php
    <?= $form->field($model, 'idLente_Terminado') ?>

    <?= $form->field($model, 'Graduacion_Excedente') ?>

    <?= $form->field($model, 'Material') ?>

    <?= $form->field($model, 'Graduacion') ?>

    <?= $form->field($model, 'Tipo_segun_material') ?>

    <?php // echo $form->field($model, 'Precio_Compra') ?>

    <?php // echo $form->field($model, 'Existencia') ?>
=======
    <?= $form->field($model, 'Orden') ?>

    <?= $form->field($model, 'idVenta') ?>

    <?= $form->field($model, 'idReceta') ?>

    <?= $form->field($model, 'idLente') ?>

    <?= $form->field($model, 'Cantidad_Lentes') ?>

    <?php // echo $form->field($model, 'Fecha_Entrega') ?>

    <?php // echo $form->field($model, 'Total_orden') ?>

    <?php // echo $form->field($model, 'idAro') ?>

    <?php // echo $form->field($model, 'Anotaciones') ?>

    <?php // echo $form->field($model, 'No_Caja') ?>
>>>>>>> rama:views/orden/_search.php

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
