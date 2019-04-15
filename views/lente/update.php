<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lente */

$this->title = Yii::t('app', 'Update Lente: {name}', [
    'name' => $model->idLente,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lentes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idLente, 'url' => ['view', 'id' => $model->idLente]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="lente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
