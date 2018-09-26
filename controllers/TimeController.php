<?php

namespace app\controllers;

use Yii;
use app\models\Time;
use app\models\TimeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TimeController implements the CRUD actions for Time model.
 */
class TimeController extends Controller
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
     * Lists all Time models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TimeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Time model.
     * @param integer $idTime
     * @param integer $grupo_idGrupo
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idTime, $grupo_idGrupo)
    {
        return $this->render('view', [
            'model' => $this->findModel($idTime, $grupo_idGrupo),
        ]);
    }

    /**
     * Creates a new Time model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Time();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idTime' => $model->idTime, 'grupo_idGrupo' => $model->grupo_idGrupo]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    public function actionMostrar($id){
        $model=new Time();
        $model =Time::Classifi_grupo($id);

        return $this->render('teste' ,[
        'model'=>$model ,
        ]);
    }

    /**
     * Updates an existing Time model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idTime
     * @param integer $grupo_idGrupo
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idTime, $grupo_idGrupo)
    {
        $model = $this->findModel($idTime, $grupo_idGrupo);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idTime' => $model->idTime, 'grupo_idGrupo' => $model->grupo_idGrupo]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Time model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idTime
     * @param integer $grupo_idGrupo
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idTime, $grupo_idGrupo)
    {
        $this->findModel($idTime, $grupo_idGrupo)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Time model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idTime
     * @param integer $grupo_idGrupo
     * @return Time the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idTime, $grupo_idGrupo)
    {
        if (($model = Time::findOne(['idTime' => $idTime, 'grupo_idGrupo' => $grupo_idGrupo])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
