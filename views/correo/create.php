<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Correo */

$this->title = Yii::t('app', 'Create Correo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Correos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="correo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
