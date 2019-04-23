<?php

namespace app\controllers;

use Yii;
use app\models\Aro;
use app\models\AroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AroController implements the CRUD actions for Aro model.
 */
class AroController extends Controller
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
     * Lists all Aro models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this-> goHome();
        }
        else 
        {
            $searchModel = new AroSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
            
    }

    /**
     * Displays a single Aro model.
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
     * Creates a new Aro model.
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
            $model = new Aro();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->idAro]);
            }

            return $this->render('create', [
                'model' => $model,
            ]);
        }
            
    }
    public function actionCreatec($id)
    {
        if (Yii::$app->user->isGuest) {
            return $this-> goHome();
        }
        else 
        {
            $model = new Aro();
            $model->Existencia=0;
            $model->Precio_Compra=0;
            $model->Precio_Venta=0;
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['detallecompra/createa','id'=>$id , 'ida' => $model->idAro]);
            }

            return $this->render('createc', [
                'model' => $model,
                'id' => $id,
            ]);
        }
        
    }
    /**
     * Updates an existing Aro model.
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
                return $this->redirect(['view', 'id' => $model->idAro]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);
        }
            
    }

    /**
     * Deletes an existing Aro model.
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
     * Finds the Aro model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Aro the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Aro::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
