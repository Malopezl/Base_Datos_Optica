<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AccesoriosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accesorios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <div class="col-fo-2"><?= $form->field($model, 'idAccesorio') ?></div>

    <div class="col-fo-2"><?= $form->field($model, 'Nombre') ?></div>

    <div class="col-fo-2"><?= $form->field($model, 'Precio_Costo') ?></div>

    <div class="col-fo-2"><?= $form->field($model, 'Existencia') ?></div><br><br><br><br>

    <div class="col-xs-12"><?= $form->field($model, 'Descripcion') ?></div>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Borrar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
