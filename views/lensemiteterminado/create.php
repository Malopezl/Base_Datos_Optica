<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LenteSemiterminado */

$this->title = 'Create Lente Semiterminado';
$this->params['breadcrumbs'][] = ['label' => 'Lente Semiterminados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lente-semiterminado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
