<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LenteTerminado */

$this->title = Yii::t('app', 'Update Lente Terminado: {name}', [
    'name' => $model->idLente_Terminado,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lente Terminados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idLente_Terminado, 'url' => ['view', 'id' => $model->idLente_Terminado]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="lente-terminado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
