<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Accesorios */

<<<<<<< HEAD
$this->title = 'Update Accesorios: ' . $model->idAccesorio;
=======
<<<<<<< Updated upstream
$this->title = 'Actualización Accesorios: ' . $model->idAccesorio;
>>>>>>> rama
$this->params['breadcrumbs'][] = ['label' => 'Accesorios', 'url' => ['index']];
=======
$this->title = Yii::t('app', 'Update Accesorios: {name}', [
    'name' => $model->idAccesorio,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Accesorios'), 'url' => ['index']];
>>>>>>> Stashed changes
$this->params['breadcrumbs'][] = ['label' => $model->idAccesorio, 'url' => ['view', 'id' => $model->idAccesorio]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="accesorios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
