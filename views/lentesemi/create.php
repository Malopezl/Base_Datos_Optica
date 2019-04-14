<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lentesemi */

$this->title = 'Create Lentesemi';
$this->params['breadcrumbs'][] = ['label' => 'Lentesemis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lentesemi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
