<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AlunoHasTime */

$this->title = $model->Aluno_Matricula;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aluno Has Times'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aluno-has-time-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'Aluno_Matricula' => $model->Aluno_Matricula, 'Time_idTime' => $model->Time_idTime], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'Aluno_Matricula' => $model->Aluno_Matricula, 'Time_idTime' => $model->Time_idTime], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Aluno_Matricula',
            'Time_idTime:datetime',
        ],
    ]) ?>

</div>
