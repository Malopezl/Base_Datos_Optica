<?php

namespace app\controllers;

use Yii;
use app\models\Orden;
use app\models\OrdenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
           if (Yii::$app->user->isGuest) {
            return $this-> goHome();
        }
        else 
        {
            $searchModel = new OrdenSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
        
    }

    /**
     * Displays a single Orden model.
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
     * Creates a new Orden model.
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
            $model = new Orden();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->idOrden]);
            }

            return $this->render('create', [
                'model' => $model,
            ]);
        }
        
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
           if (Yii::$app->user->isGuest) {
            return $this-> goHome();
        }
        else 
        {
            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->idOrden]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        }
        
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

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
