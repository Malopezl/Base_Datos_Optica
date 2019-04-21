<?php

namespace app\controllers;

use Yii;
use app\models\Lente;
use app\models\LenteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LenteController implements the CRUD actions for Lente model.
 */
class LenteController extends Controller
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
     * Lists all Lente models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LenteSearch();
        $searchModel->Terminado=0;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $searchModelo = new LenteSearch();
        $searchModelo->Terminado=1;
        $dataProvidero = $searchModelo->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'searchModelo' => $searchModelo,
            'dataProvidero' => $dataProvidero,
        ]);
    }

    /**
     * Displays a single Lente model.
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
     public function actionViewls($id)
    {
        return $this->render('viewls', [
            'model' => $this->findModel($id),
        ]);
    }
     public function actionViewlt($id)
    {
        return $this->render('viewlt', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Lente model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new Lente();
        $model->Precio_Compra=0;
        $model->Precio_Venta =0;
        $model->Existencia=0;
        $model->Terminado= 1;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['detallecompra/createlt', 'id' => $id, 'idlen'=>$model->idLente]);
        }

        return $this->render('create', [
            'model' => $model,
            'id'=>$id,
        ]);
    }
    public function actionCreatels($id)
    {
        $model = new Lente();
        $model->Precio_Compra=0;
        $model->Precio_Venta =0;
        $model->Existencia=0;
        $model->Graduacion_Ecxedente = "0";
        $model->Terminado=0;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['detallecompra/createls', 'id' => $id, 'idlen'=>$model->idLente]);
        }

        return $this->render('createls', [
            'model' => $model,
            'id' => $id,
        ]);
    }
    public function actionCreateils()
    {
        $model = new Lente();
        $model->Precio_Compra=0;
        $model->Precio_Venta =0;
        $model->Existencia=0;
        $model->Graduacion_Ecxedente = "0";
        $model->Terminado=0;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['viewls','id'=>$model->idLente]);
        }

        return $this->render('createils', [
            'model' => $model,
        ]);
    }
    public function actionCreateilt()
    {
        $model = new Lente();
        $model->Precio_Compra=0;
        $model->Precio_Venta =0;
        $model->Existencia=0;
        $model->Graduacion_Ecxedente = "0";
        $model->Terminado=1;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['viewlt', 'id'=>$model->idLente]);
        }

        return $this->render('createilt', [
            'model' => $model,
        ]);
    }


    /**
     * Updates an existing Lente model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['viewls', 'id' => $model->idLente]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }
    public function actionUpdatelt($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['viewlt', 'id' => $model->idLente]);
        }

        return $this->render('updatelt', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Lente model.
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
     * Finds the Lente model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Lente the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Lente::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
