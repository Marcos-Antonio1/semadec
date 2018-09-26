<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Time */

$this->title = Yii::t('app', 'Update Time: ' . $model->idTime, [
    'nameAttribute' => '' . $model->idTime,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Times'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idTime, 'url' => ['view', 'idTime' => $model->idTime, 'grupo_idGrupo' => $model->grupo_idGrupo]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="time-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
