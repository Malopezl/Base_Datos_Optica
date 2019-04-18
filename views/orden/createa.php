<?php

use yii\helpers\Html;
use yii\web\View;
/* @var $this yii\web\View */
/* @var $model app\models\Orden */

$this->title = Yii::t('app', 'Registrar Orden');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ordens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="orden-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_forma', [
        'model' => $model,
         'aros'=>$aros,
    ]) ?>

</div>