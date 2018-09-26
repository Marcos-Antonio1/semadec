<?php

namespace app\controllers;

use Yii;
use app\models\EventoHasFormador;
use app\models\EventoHasFormadorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * EventoHasFormadorController implements the CRUD actions for EventoHasFormador model.
 */
class EventoHasFormadorController extends Controller
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
     * Lists all EventoHasFormador models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EventoHasFormadorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EventoHasFormador model.
     * @param string $evento_idpalestra
     * @param string $Formador_idFormador
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($evento_idpalestra, $Formador_idFormador)
    {
        return $this->render('view', [
            'model' => $this->findModel($evento_idpalestra, $Formador_idFormador),
        ]);
    }

    /**
     * Creates a new EventoHasFormador model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EventoHasFormador();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'evento_idpalestra' => $model->evento_idpalestra, 'Formador_idFormador' => $model->Formador_idFormador]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EventoHasFormador model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $evento_idpalestra
     * @param string $Formador_idFormador
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($evento_idpalestra, $Formador_idFormador)
    {
        $model = $this->findModel($evento_idpalestra, $Formador_idFormador);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'evento_idpalestra' => $model->evento_idpalestra, 'Formador_idFormador' => $model->Formador_idFormador]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing EventoHasFormador model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $evento_idpalestra
     * @param string $Formador_idFormador
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($evento_idpalestra, $Formador_idFormador)
    {
        $this->findModel($evento_idpalestra, $Formador_idFormador)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EventoHasFormador model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $evento_idpalestra
     * @param string $Formador_idFormador
     * @return EventoHasFormador the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($evento_idpalestra, $Formador_idFormador)
    {
        if (($model = EventoHasFormador::findOne(['evento_idpalestra' => $evento_idpalestra, 'Formador_idFormador' => $Formador_idFormador])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
