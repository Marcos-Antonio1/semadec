<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Escrincoes */

$this->title = Yii::t('app', 'Update Escrincoes: ' . $model->evento_idpalestra, [
    'nameAttribute' => '' . $model->evento_idpalestra,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Escrincoes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->evento_idpalestra, 'url' => ['view', 'evento_idpalestra' => $model->evento_idpalestra, 'Aluno_Matricula' => $model->Aluno_Matricula]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="escrincoes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
