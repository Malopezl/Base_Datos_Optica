<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Detallecompra */

$this->title = Yii::t('app', 'Agregar Lente Terminado');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Detallecompras'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detallecompra-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formlt', [
        'model' => $model,
        'lentes' => $lentes,
        'id' => $id,
    ]) ?>

</div>
