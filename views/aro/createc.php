<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aro */

$this->title = Yii::t('app', 'Create Aro');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formc', [
        'model' => $model,
    ]) ?>