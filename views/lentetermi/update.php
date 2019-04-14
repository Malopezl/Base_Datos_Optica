<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lentetermi */

$this->title = 'Update Lentetermi: ' . $model->idLente_Terminado;
$this->params['breadcrumbs'][] = ['label' => 'Lentetermis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idLente_Terminado, 'url' => ['view', 'id' => $model->idLente_Terminado]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lentetermi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
