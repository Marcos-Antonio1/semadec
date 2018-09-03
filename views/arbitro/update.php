<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Arbitro */

$this->title = Yii::t('app', 'Update Arbitro: ' . $model->idArbitro, [
    'nameAttribute' => '' . $model->idArbitro,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Arbitros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idArbitro, 'url' => ['view', 'id' => $model->idArbitro]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="arbitro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
