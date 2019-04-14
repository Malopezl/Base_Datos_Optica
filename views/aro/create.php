<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aro */

<<<<<<< Updated upstream
$this->title = 'Ingreso Aro';
$this->params['breadcrumbs'][] = ['label' => 'Aros', 'url' => ['index']];
=======
$this->title = Yii::t('app', 'Create Aro');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aros'), 'url' => ['index']];
>>>>>>> Stashed changes
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
