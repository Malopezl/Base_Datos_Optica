<?php

namespace app\controllers;

use Yii;
use app\models\Accesorios;
use app\models\AccesoriosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AccesoriosController implements the CRUD actions for Accesorios model.
 */
class AccesoriosController extends Controller
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
     * Lists all Accesorios models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this-> goHome();
        }
        else 
        {
            $searchModel = new AccesoriosSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }

    }

    /**
     * Displays a single Accesorios model.
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
     * Creates a new Accesorios model.
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
                    $model = new Accesorios();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->idAccesorio]);
            }

            return $this->render('create', [
                'model' => $model,
            ]);
        }

    }

    /**
     * Updates an existing Accesorios model.
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
                return $this->redirect(['view', 'id' => $model->idAccesorio]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        }

    }

    /**
     * Deletes an existing Accesorios model.
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
     * Finds the Accesorios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Accesorios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
      
        if (($model = Accesorios::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
