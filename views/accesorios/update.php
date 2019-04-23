<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Accesorios */

$this->title = Yii::t('app', 'Update Accesorios: {name}', [
    'name' => $model->idAccesorio,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Accesorios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idAccesorio, 'url' => ['view', 'id' => $model->idAccesorio]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="accesorios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
