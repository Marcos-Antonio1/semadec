<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penalidadade */

$this->title = Yii::t('app', 'Update Penalidadade: ' . $model->idPenalidadade, [
    'nameAttribute' => '' . $model->idPenalidadade,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Penalidadades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPenalidadade, 'url' => ['view', 'id' => $model->idPenalidadade]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="penalidadade-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
