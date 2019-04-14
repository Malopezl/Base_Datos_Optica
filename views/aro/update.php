<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aro */

<<<<<<< Updated upstream
$this->title = 'Actualización Aro: ' . $model->idAro;
$this->params['breadcrumbs'][] = ['label' => 'Aros', 'url' => ['index']];
=======
$this->title = Yii::t('app', 'Update Aro: {name}', [
    'name' => $model->idAro,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aros'), 'url' => ['index']];
>>>>>>> Stashed changes
$this->params['breadcrumbs'][] = ['label' => $model->idAro, 'url' => ['view', 'id' => $model->idAro]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="aro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
