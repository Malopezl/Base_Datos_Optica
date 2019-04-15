<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lentesemi */

<<<<<<< HEAD:views/lentesemi/create.php
$this->title = 'Create Lentesemi';
$this->params['breadcrumbs'][] = ['label' => 'Lentesemis', 'url' => ['index']];
=======
$this->title = Yii::t('app', 'Create Orden');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ordens'), 'url' => ['index']];
>>>>>>> rama:views/orden/create.php
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lentesemi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
