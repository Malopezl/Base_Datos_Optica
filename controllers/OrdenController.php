<?php

namespace app\controllers;

use Yii;
use app\models\Orden;
use app\models\OrdenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Lente;
use app\models\Aro;    
use app\models\Receta;
/**
 * OrdenController implements the CRUD actions for Orden model.
 */
class OrdenController extends Controller
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
     * Lists all Orden models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrdenSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionPendientes()
    {
        $searchModel = new OrdenSearch();
        $searchModel->Entregada = 0;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('pendientes', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single Orden model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $model1 = Lente::findOne($model->idLentei);
        $model2 = Lente::findOne($model->idLented);
        $model3 = Aro::findOne($model->idAro);
        $model4 = Receta::findOne($model->idReceta);
        return $this->render('view', [
            'model' => $model,
            'model1' => $model1,
            'model2' => $model2,
            'model3' => $model3,
            'model4' => $model4,
        ]);
    }

    /**
     * Creates a new Orden model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($idrec, $id)
    {
        $model = new Orden();
        $boo=false;
        $model->idReceta = $idrec;
        $model->idVenta = $id;
        $model->Entregada = 0;
        $lentes =[];
        $tmp = Lente::find()->all();
        foreach($tmp as $len){
            $lentes[$len->idLente]="Precio: ".$len->Precio_Venta."; Graduacion: ".$len->graduacion_base."; Excedente: ".$len->Graduacion_Ecxedente." Material:".$len->Material."; Tipo:".$len->Tipo;
        }
        $aros =[];
        $tmp1 = Aro::find()->all();
        foreach($tmp1 as $ar){
            $aros[$ar->idAro]="Marca: ".$ar->Marca."; Material: ".$ar->Material."; Precio: ".$ar->Precio_Venta."; Codigo: ".$ar->Codigo;
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['venta/creates', 'id' => $id]);
        }
        $model1 = Receta::findOne($idrec);
        return $this->render('create', [
            'model1' => $model1,
            'model' => $model,
            'aros'=>$aros,
            'lentes'=>$lentes,
        ]);
    }

    public function actionCreatea($id)
    {
        $model = new Orden();
        $model->idVenta = $id;
        $model->Entregada = 1;
        $model->Preciolentei = 1;
        $model->Preciolented = 1;
        $model->No_caja = 1;
        $aros =[];
        $tmp1 = Aro::find()->all();
        foreach($tmp1 as $ar){
            $aros[$ar->idAro]="Marca: ".$ar->Marca."; Material: ".$ar->Material."; Precio: ".$ar->Precio_Venta."; Codigo: ".$ar->Codigo;
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['venta/creates', 'id' => $id]);
        }

        return $this->render('createa', [
            'model' => $model,
            'aros'=>$aros,
        ]);
    }

    /**
     * Updates an existing Orden model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $lentes =[];
        $tmp = Lente::find()->all();
        foreach($tmp as $len){
            $lentes[$len->idLente]="Precio: ".$len->Precio_Venta."; Graduacion: ".$len->graduacion_base."; Excedente: ".$len->Graduacion_Ecxedente." Material:".$len->Material."; Tipo:".$len->Tipo;
            }
        $aros =[];
        $tmp1 = Aro::find()->all();
        $model1 = Lente::findOne($model->idLentei);
        $model2 = Lente::findOne($model->idLented);
        $model3 = Aro::findOne($model->idAro);
        $model4 = Receta::findOne($model->idReceta);
        foreach($tmp1 as $ar){
            $aros[$ar->idAro]="Marca: ".$ar->Marca."; Material: ".$ar->Material."; Precio: ".$ar->Precio_Venta."; Codigo: ".$ar->Codigo;
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Orden]);
        }

        return $this->render('update', [
            'model' => $model,
            'model1' => $model1,
            'model2' => $model2,
            'model3' => $model3,
            'model4' => $model4,
            'aros'=>$aros,
            'lentes'=>$lentes,
        ]);
    }
    public function actionUpdate1($id)
    {
        $model = $this->findModel($id);
        $model->Entregada=1;
        $lentes =[];
        $tmp = Lente::find()->all();
        foreach($tmp as $len){
            $lentes[$len->idLente]="Precio: ".$len->Precio_Venta."; Graduacion: ".$len->graduacion_base."; Excedente: ".$len->Graduacion_Ecxedente." Material:".$len->Material."; Tipo:".$len->Tipo;
            }
        $aros =[];
        $tmp1 = Aro::find()->all();
        $model1 = Lente::findOne($model->idLentei);
        $model2 = Lente::findOne($model->idLented);
        $model3 = Aro::findOne($model->idAro);
        $model4 = Receta::findOne($model->idReceta);
        foreach($tmp1 as $ar){
            $aros[$ar->idAro]="Marca: ".$ar->Marca."; Material: ".$ar->Material."; Precio: ".$ar->Precio_Venta."; Codigo: ".$ar->Codigo;
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->Orden]);
        }

        return $this->render('update', [
            'model' => $model,
            'model1' => $model1,
            'model2' => $model2,
            'model3' => $model3,
            'model4' => $model4,
            'aros'=>$aros,
            'lentes'=>$lentes,
        ]);
    }
    /**
     * Deletes an existing Orden model.
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
     * Finds the Orden model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Orden the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Orden::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
