<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AlunoHasTime */

$this->title = Yii::t('app', 'Update Aluno Has Time: ' . $model->Aluno_Matricula, [
    'nameAttribute' => '' . $model->Aluno_Matricula,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aluno Has Times'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Aluno_Matricula, 'url' => ['view', 'Aluno_Matricula' => $model->Aluno_Matricula, 'Time_idTime' => $model->Time_idTime]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="aluno-has-time-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
