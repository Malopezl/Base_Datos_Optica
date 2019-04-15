<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Orden */

$this->title = Yii::t('app', 'Update Orden: {name}', [
    'name' => $model->Orden,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ordens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Orden, 'url' => ['view', 'id' => $model->Orden]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="orden-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
