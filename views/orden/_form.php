<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Orden */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orden-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idVenta')->textInput() ?>

    <?= $form->field($model, 'idReceta')->textInput() ?>

    <?= $form->field($model, 'idLente')->textInput() ?>

    <?= $form->field($model, 'Cantidad_Lentes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fecha_Entrega')->textInput() ?>

    <?= $form->field($model, 'Total_orden')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idAro')->textInput() ?>

    <?= $form->field($model, 'Anotaciones')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'No_Caja')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
