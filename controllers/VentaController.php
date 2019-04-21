<?php

namespace app\controllers;

use Yii;
use app\models\Venta;
use app\models\VentaSearch;
use app\models\Orden;
use app\models\Ventaaccesorios;
use app\models\VentaaccesoriosSearch;
use app\models\OrdenSearch;
use app\models\Cliente;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VentaController implements the CRUD actions for Venta model.
 */
class VentaController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Venta models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VentaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Venta model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $model1 = Cliente::findOne($model->ID_Paciente);
         $searchModel = new VentaaccesoriosSearch();
         $searchModel->ID_Venta = $id;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $searchModelo = new OrdenSearch();
        $searchModelo->idVenta = $id;
        $dataProvidero = $searchModelo->search(Yii::$app->request->queryParams);
        return $this->render('view', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'searchModelo' => $searchModelo,
            'dataProvidero' => $dataProvidero,
            'model1'=>$model1,
        ]);
    }
    public function actionViewc($id)
    {
        $model = $this->findModel($id);
        $model1 = Cliente::findOne($model->ID_Paciente);
         $searchModel = new VentaaccesoriosSearch();
         $searchModel->ID_Venta = $id;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $searchModelo = new OrdenSearch();
        $searchModelo->idVenta = $id;
        $dataProvidero = $searchModelo->search(Yii::$app->request->queryParams);
        return $this->render('viewc', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'searchModelo' => $searchModelo,
            'dataProvidero' => $dataProvidero,
            'model1'=>$model1,
        ]);
    }

    /**
     * Creates a new Venta model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Venta();
        if($id != 0)
        {
            $model->ID_Paciente=$id;
        }
        $model->Entregado=0;
        $model->Finalizado=0;
        $model->Adelanto=0;
        $clientes = [];
        $tmp = Cliente::find()->all();
        foreach($tmp as $cliente){
            $clientes[$cliente->idPaciente]="Nit: ".$cliente->NIT.";  Nombre: ".$cliente->Nombre;

        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['creates', 'id' => $model->idVenta]);
        }

        return $this->render('create', [
            'model' => $model,
            'clientes'=>$clientes,
        ]);
    }

    public function actionCreates($id)
    {   $total=0.0;
        $var1=Orden::find()->all();
        foreach($var1 as $var)
        {
            if($var->idVenta == $id){
                $total=$total+$var->Preciolentei;
                $total=$total+$var->Preciolented;
                $total=$total+$var->PrecioVentaAros;
            }
        }
        $var2=Ventaaccesorios::find()->all();
        foreach($var2 as $var)
        {
            if($var->ID_Venta == $id){
                $val1 = $var->Cantidad;
                $val2=$var->Precio_Venta;
                $val3=$val1 * $val2;
                $total=$total+$val3;

            }
        }
         $searchModel = new VentaaccesoriosSearch();
         $searchModel->ID_Venta = $id;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
         //$dataProvider->pagination->pageParam = 'ID_Venta';
        //$dataProvider->pagination->pageSizeParam=10;

        $searchModelo = new OrdenSearch();
        $searchModelo->idVenta = $id;
        $dataProvidero = $searchModelo->search(Yii::$app->request->queryParams);
        //$dataProvidero->pagination->pageParam = 'orden';
        //$dataProvidero->pagination->pageSizeParam=10;
        return $this->render('creates', [
            'model' => $this->findModel($id),
             'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'searchModelo' => $searchModelo,
            'dataProvidero' => $dataProvidero,
            'total'=>$total,
        ]);

    }
    public function actionCreatef($id)
    {   
         $model = $this->findModel($id);
         $model->Entregado=0;
        $model->Finalizado=1;
        $model->Adelanto=0;
          $clientes = [];
        $tmp = Cliente::find()->all();
        $total = 0.0;
        foreach($tmp as $cliente){
            $clientes[$cliente->idPaciente]="Nit: ".$cliente->NIT.";  Nombre: ".$cliente->Nombre;

        }
        $var1=Orden::find()->all();
        foreach($var1 as $var)
        {
            if($var->idVenta == $id){
                $total=$total+$var->Preciolentei;
                $total=$total+$var->Preciolented;
                $total=$total+$var->PrecioVentaAros;
            }
        }
        $var2=Ventaaccesorios::find()->all();
        foreach($var2 as $var)
        {
            if($var->ID_Venta == $id){
                $val1 = $var->Cantidad;
                $val2=$var->Precio_Venta;
                $val3=$val1 * $val2;
                $total=$total+$val3;

            }
        }
        $model->Total = $total;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idVenta]);
        }

        return $this->render('createf', [
            'model' => $model,
            'clientes'=>$clientes,
        ]);

    }


    /**
     * Updates an existing Venta model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idVenta]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Venta model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Venta model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Venta the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Venta::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
