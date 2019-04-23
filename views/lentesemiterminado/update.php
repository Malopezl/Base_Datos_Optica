<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LenteSemiterminado */

$this->title = Yii::t('app', 'Update Lente Semiterminado: {name}', [
    'name' => $model->idLente_Semiterminado,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lente Semiterminados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idLente_Semiterminado, 'url' => ['view', 'id' => $model->idLente_Semiterminado]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="lente-semiterminado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
