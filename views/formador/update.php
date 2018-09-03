<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Formador */

$this->title = Yii::t('app', 'Update Formador: ' . $model->idFormador, [
    'nameAttribute' => '' . $model->idFormador,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Formadors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idFormador, 'url' => ['view', 'id' => $model->idFormador]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="formador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
