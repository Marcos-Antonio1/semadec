<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Evento */

$this->title = Yii::t('app', 'Update Evento: ' . $model->idpalestra, [
    'nameAttribute' => '' . $model->idpalestra,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Eventos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpalestra, 'url' => ['view', 'id' => $model->idpalestra]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="evento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
