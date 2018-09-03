<?php

namespace app\controllers;

use Yii;
use app\models\AlunoHasTime;
use app\models\AlunoHasTimeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AlunoHasTimeController implements the CRUD actions for AlunoHasTime model.
 */
class AlunoHasTimeController extends Controller
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
     * Lists all AlunoHasTime models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AlunoHasTimeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AlunoHasTime model.
     * @param integer $Aluno_Matricula
     * @param integer $Time_idTime
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Aluno_Matricula, $Time_idTime)
    {
        return $this->render('view', [
            'model' => $this->findModel($Aluno_Matricula, $Time_idTime),
        ]);
    }

    /**
     * Creates a new AlunoHasTime model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AlunoHasTime();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Aluno_Matricula' => $model->Aluno_Matricula, 'Time_idTime' => $model->Time_idTime]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AlunoHasTime model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Aluno_Matricula
     * @param integer $Time_idTime
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Aluno_Matricula, $Time_idTime)
    {
        $model = $this->findModel($Aluno_Matricula, $Time_idTime);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Aluno_Matricula' => $model->Aluno_Matricula, 'Time_idTime' => $model->Time_idTime]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AlunoHasTime model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Aluno_Matricula
     * @param integer $Time_idTime
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Aluno_Matricula, $Time_idTime)
    {
        $this->findModel($Aluno_Matricula, $Time_idTime)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AlunoHasTime model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Aluno_Matricula
     * @param integer $Time_idTime
     * @return AlunoHasTime the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Aluno_Matricula, $Time_idTime)
    {
        if (($model = AlunoHasTime::findOne(['Aluno_Matricula' => $Aluno_Matricula, 'Time_idTime' => $Time_idTime])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
