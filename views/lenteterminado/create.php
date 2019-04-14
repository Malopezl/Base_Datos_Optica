<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LenteTerminado */

$this->title = 'Create Lente Terminado';
$this->params['breadcrumbs'][] = ['label' => 'Lente Terminados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lente-terminado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
