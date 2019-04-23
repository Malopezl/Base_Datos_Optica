<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lentetermi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lentetermi-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD:views/lentetermi/_form.php
    <?= $form->field($model, 'Graduacion_Excedente')->textInput(['maxlength' => true]) ?>
=======
    <?= $form->field($model, 'idVenta')->textInput() ?>

    <?= $form->field($model, 'idReceta')->textInput() ?>

    <?= $form->field($model, 'idLente')->textInput() ?>

    <?= $form->field($model, 'Cantidad_Lentes')->textInput(['maxlength' => true]) ?>
>>>>>>> rama:views/orden/_form.php

    <?= $form->field($model, 'Material')->textInput(['maxlength' => true]) ?>

<<<<<<< HEAD:views/lentetermi/_form.php
    <?= $form->field($model, 'Graduacion')->textInput(['maxlength' => true]) ?>
=======
    <?= $form->field($model, 'Total_orden')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idAro')->textInput() ?>

    <?= $form->field($model, 'Anotaciones')->textarea(['rows' => 6]) ?>
>>>>>>> rama:views/orden/_form.php

    <?= $form->field($model, 'Tipo_segun_material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Precio_Compra')->textInput() ?>

    <?= $form->field($model, 'Existencia')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
