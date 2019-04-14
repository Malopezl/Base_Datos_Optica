<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Accesorios */

<<<<<<< HEAD
$this->title = 'Create Accesorios';
=======
<<<<<<< Updated upstream
$this->title = 'Ingreso Accesorios';
>>>>>>> rama
$this->params['breadcrumbs'][] = ['label' => 'Accesorios', 'url' => ['index']];
=======
$this->title = Yii::t('app', 'Create Accesorios');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Accesorios'), 'url' => ['index']];
>>>>>>> Stashed changes
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accesorios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
