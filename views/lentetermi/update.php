<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lentetermi */

<<<<<<< HEAD:views/lentetermi/update.php
$this->title = 'Update Lentetermi: ' . $model->idLente_Terminado;
$this->params['breadcrumbs'][] = ['label' => 'Lentetermis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idLente_Terminado, 'url' => ['view', 'id' => $model->idLente_Terminado]];
$this->params['breadcrumbs'][] = 'Update';
=======
$this->title = Yii::t('app', 'Update Orden: {name}', [
    'name' => $model->Orden,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ordens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Orden, 'url' => ['view', 'id' => $model->Orden]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
>>>>>>> rama:views/orden/update.php
?>
<div class="lentetermi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
