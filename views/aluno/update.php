<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aluno */

$this->title = Yii::t('app', 'Update Aluno: ' . $model->Matricula, [
    'nameAttribute' => '' . $model->Matricula,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Alunos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Matricula, 'url' => ['view', 'id' => $model->Matricula]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="aluno-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
