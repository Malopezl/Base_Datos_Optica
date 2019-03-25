<?php

namespace app\controllers;

use Yii;
use app\models\DetalleCompra;
use app\models\DetalleCompraSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetalleCompraController implements the CRUD actions for DetalleCompra model.
 */
class DetalleCompraController extends Controller
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
     * Lists all DetalleCompra models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this-> goHome();
        }
        else 
        {
            $searchModel = new DetalleCompraSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
        
    }

    /**
     * Displays a single DetalleCompra model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this-> goHome();
        }
        else 
        {
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }
        
    }

    /**
     * Creates a new DetalleCompra model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if (Yii::$app->user->isGuest) {
            return $this-> goHome();
        }
        else 
        {
             $model = new DetalleCompra();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->ID]);
            }

            return $this->render('create', [
                'model' => $model,
            ]);
        }
       
    }

    /**
     * Updates an existing DetalleCompra model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this-> goHome();
        }
        else 
        {
            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->ID]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        }
        
    }

    /**
     * Deletes an existing DetalleCompra model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this-> goHome();
        }
        else 
        {
             $this->findModel($id)->delete();

            return $this->redirect(['index']);
        }
       
    }

    /**
     * Finds the DetalleCompra model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DetalleCompra the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DetalleCompra::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
