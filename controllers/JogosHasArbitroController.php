<?php

namespace app\controllers;

use Yii;
use app\models\JogosHasArbitro;
use app\models\JogosHasArbitroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JogosHasArbitroController implements the CRUD actions for JogosHasArbitro model.
 */
class JogosHasArbitroController extends Controller
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
     * Lists all JogosHasArbitro models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JogosHasArbitroSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JogosHasArbitro model.
     * @param integer $Jogos_idJogos
     * @param integer $Arbitro_idArbitro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Jogos_idJogos, $Arbitro_idArbitro)
    {
        return $this->render('view', [
            'model' => $this->findModel($Jogos_idJogos, $Arbitro_idArbitro),
        ]);
    }

    /**
     * Creates a new JogosHasArbitro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new JogosHasArbitro();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Jogos_idJogos' => $model->Jogos_idJogos, 'Arbitro_idArbitro' => $model->Arbitro_idArbitro]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing JogosHasArbitro model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Jogos_idJogos
     * @param integer $Arbitro_idArbitro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Jogos_idJogos, $Arbitro_idArbitro)
    {
        $model = $this->findModel($Jogos_idJogos, $Arbitro_idArbitro);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Jogos_idJogos' => $model->Jogos_idJogos, 'Arbitro_idArbitro' => $model->Arbitro_idArbitro]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing JogosHasArbitro model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Jogos_idJogos
     * @param integer $Arbitro_idArbitro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Jogos_idJogos, $Arbitro_idArbitro)
    {
        $this->findModel($Jogos_idJogos, $Arbitro_idArbitro)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the JogosHasArbitro model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Jogos_idJogos
     * @param integer $Arbitro_idArbitro
     * @return JogosHasArbitro the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Jogos_idJogos, $Arbitro_idArbitro)
    {
        if (($model = JogosHasArbitro::findOne(['Jogos_idJogos' => $Jogos_idJogos, 'Arbitro_idArbitro' => $Arbitro_idArbitro])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
