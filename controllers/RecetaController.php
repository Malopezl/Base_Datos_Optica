<?php

namespace app\controllers;

use Yii;
use app\models\Receta;
use app\models\RecetaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RecetaController implements the CRUD actions for Receta model.
 */
class RecetaController extends Controller
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
     * Lists all Receta models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RecetaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Receta model.
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
    public function actionViewc($id)
    {
        return $this->render('viewc', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Receta model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Receta();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idReceta]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    public function actionCreatev($id, $idc)
    {
        $model = new Receta();
        $model->Esfera_OD=0;
        $model->Esfera_OI=0;
        $model->Eje_OD=0;
        $model->Eje_OI=0;
        $model->Cilindro_OD=0;
        $model->Cilindro_OI=0;
        $model->AdicionOD="0";
        $model->AdicionOI="0";
        $model->idPaciente=$idc;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['orden/create', 'idrec' => $model->idReceta,'id'=>$id]);
        }

        return $this->render('createv', [
            'model' => $model,
            'id'=>$id,
        ]);
    }

    /**
     * Updates an existing Receta model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idReceta]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }
    public function actionUpdateco($idrec, $id)
    {
        $model = $this->findModel($idrec);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['orden/create', 'idrec' => $idrec, 'id'=>$id]);
        }

        return $this->render('updateco', [
            'model' => $model,
            'id'=>$id,
            'idrec'=>$idrec,
        ]);
    }

    /**
     * Deletes an existing Receta model.
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
     * Finds the Receta model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Receta the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Receta::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
