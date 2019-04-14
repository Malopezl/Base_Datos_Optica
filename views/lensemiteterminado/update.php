<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LenteSemiterminado */

$this->title = 'Update Lente Semiterminado: ' . $model->idLente_Semiterminado;
$this->params['breadcrumbs'][] = ['label' => 'Lente Semiterminados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idLente_Semiterminado, 'url' => ['view', 'id' => $model->idLente_Semiterminado]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lente-semiterminado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
