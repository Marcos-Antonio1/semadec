<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AlunoHasTime */

$this->title = Yii::t('app', 'Create Aluno Has Time');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Aluno Has Times'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aluno-has-time-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
