<?php

namespace app\controllers;

use Yii;
use app\models\LenteTerminado;
use app\models\LenteTerminadoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LenteTerminadoController implements the CRUD actions for LenteTerminado model.
 */
class LenteTerminadoController extends Controller
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
     * Lists all LenteTerminado models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this-> goHome();
        }
        else 
        {
             $searchModel = new LenteTerminadoSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
       
    }

    /**
     * Displays a single LenteTerminado model.
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
     * Creates a new LenteTerminado model.
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
              $model = new LenteTerminado();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->idLente_Terminado]);
            }

            return $this->render('create', [
                'model' => $model,
            ]);
        }
      
    }

    /**
     * Updates an existing LenteTerminado model.
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
                return $this->redirect(['view', 'id' => $model->idLente_Terminado]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        }
       
    }

    /**
     * Deletes an existing LenteTerminado model.
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
     * Finds the LenteTerminado model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return LenteTerminado the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {

        if (($model = LenteTerminado::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
