<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Aluno */

$this->title = Yii::t('app', 'Create Aluno');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Alunos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aluno-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
