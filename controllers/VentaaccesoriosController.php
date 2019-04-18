<?php

namespace app\controllers;

use Yii;
use app\models\Ventaaccesorios;
use app\models\VentaaccesoriosSearch;
use app\models\Accesorios;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * VentaaccesoriosController implements the CRUD actions for Ventaaccesorios model.
 */
class VentaaccesoriosController extends Controller
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
     * Lists all Ventaaccesorios models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VentaaccesoriosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ventaaccesorios model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Ventaaccesorios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Ventaaccesorios();
        $model->ID_Venta = $id;
         $accesorioss = [];
        $tmp = Accesorios::find()->all();
        foreach($tmp as $accesorio){
            $accesorioss[$accesorio->idAccesorio]="Nombre: ".$accesorio->Nombre.";  Descripcion: ".$accesorio->Descripcion.";  Existencia: ".$accesorio->Existencia;

        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['venta/creates','id' => $model->ID_Venta]);
        }

        return $this->render('create', [
            'model' => $model,
            'accesorioss' => $accesorioss,
            'id'=>$id,
        ]);
    }

    /**
     * Updates an existing Ventaaccesorios model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $accesorioss = [];
        $tmp = Accesorios::find()->all();
        foreach($tmp as $accesorio){
            $accesorioss[$accesorio->idAccesorio]="Nombre: ".$accesorio->Nombre.";  Descripcion: ".$accesorio->Descripcion.";  Existencia: ".$accesorio->Existencia;

        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('update', [
            'model' => $model,
            'accesorioss' => $accesorioss,
            'id'=>$id,
        ]);
    }

    /**
     * Deletes an existing Ventaaccesorios model.
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
     * Finds the Ventaaccesorios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Ventaaccesorios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ventaaccesorios::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
