<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */

$this->title = Yii::t('app', 'Update Cliente: {name}', [
    'name' => $model->idPaciente,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Clientes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPaciente, 'url' => ['view', 'id' => $model->idPaciente]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cliente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formc', [
        'model' => $model,
    ]) ?>

</div>
