<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
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

    <?= DetailView::widget([
        'model' => $model1,
        'attributes' => [
            //'idReceta',
            //'Fecha',
            'Esfera_OD',
            'Eje_OD',
            'Cilindro_OD',
            'AdicionOD',
            'Esfera_OI',
            'Eje_OI',
            'Cilindro_OI',
            'AdicionOI',
        ],
    ]) ?>

    <?= $this->render('_form', [
        'model' => $model,
         'aros'=>$aros,
         'lentes'=>$lentes,
    ]) ?>

</div>
