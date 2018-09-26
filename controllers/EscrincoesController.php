<?php

namespace app\controllers;

use Yii;
use app\models\Escrincoes;
use app\models\EscrincoesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * EscrincoesController implements the CRUD actions for Escrincoes model.
 */
class EscrincoesController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create', 'delete', 'update'],
                'rules' => [
                    [
                        'actions' => ['create', 'delete', 'update'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Escrincoes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EscrincoesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Escrincoes model.
     * @param string $evento_idpalestra
     * @param integer $Aluno_Matricula
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($evento_idpalestra, $Aluno_Matricula)
    {
        return $this->render('view', [
            'model' => $this->findModel($evento_idpalestra, $Aluno_Matricula),
        ]);
    }

    /**
     * Creates a new Escrincoes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Escrincoes();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'evento_idpalestra' => $model->evento_idpalestra, 'Aluno_Matricula' => $model->Aluno_Matricula]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Escrincoes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $evento_idpalestra
     * @param integer $Aluno_Matricula
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($evento_idpalestra, $Aluno_Matricula)
    {
        $model = $this->findModel($evento_idpalestra, $Aluno_Matricula);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'evento_idpalestra' => $model->evento_idpalestra, 'Aluno_Matricula' => $model->Aluno_Matricula]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Escrincoes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $evento_idpalestra
     * @param integer $Aluno_Matricula
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($evento_idpalestra, $Aluno_Matricula)
    {
        $this->findModel($evento_idpalestra, $Aluno_Matricula)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Escrincoes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $evento_idpalestra
     * @param integer $Aluno_Matricula
     * @return Escrincoes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($evento_idpalestra, $Aluno_Matricula)
    {
        if (($model = Escrincoes::findOne(['evento_idpalestra' => $evento_idpalestra, 'Aluno_Matricula' => $Aluno_Matricula])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
