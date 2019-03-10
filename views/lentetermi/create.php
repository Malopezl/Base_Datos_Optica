<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lentetermi */

$this->title = 'Create Lentetermi';
$this->params['breadcrumbs'][] = ['label' => 'Lentetermis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lentetermi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
