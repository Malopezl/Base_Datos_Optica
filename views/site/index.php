<?php

use yii\helpers\Html;
/* @var $this yii\web\View <a class="btn btn-default" href="http://www.yiiframework.com/doc/"></a>*/

$this->title = 'Óptica Diaz';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1 style="color: #0000cc">Óptica Diaz</h1>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3">
                <h2>Registrar Venta</h2>

                <p style="text-align: right;width:140px"><?= Html::a('Ventas &raquo', ['venta/index'], ['class' => 'btn btn-success']) ?></p>
            </div>
            <div class="col-lg-3">
                <h2>Registrar Compra</h2>

                <p style="text-align: right;width:160px"><?= Html::a('Compras &raquo', ['compra/index'], ['class' => 'btn btn-success']) ?></p>
            </div>
            <div class="col-lg-3">
                <h2>Consultar Cliente</h2>

                <p style="text-align: right;width:160px"><?= Html::a('Clientes &raquo', ['clientes/index'], ['class' => 'btn btn-success']) ?></p>
            </div>
            <div class="col-lg-3">
                <h2>Inventario</h2>

                <p style="text-align: right;width:120px"><?= Html::a('Inventario &raquo', ['compra/index'], ['class' => 'btn btn-success']) ?></p>
            </div>
        </div>

    </div>
</div>
