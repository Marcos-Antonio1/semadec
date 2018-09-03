<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EventoHasFormador */

$this->title = Yii::t('app', 'Update Evento Has Formador: ' . $model->evento_idpalestra, [
    'nameAttribute' => '' . $model->evento_idpalestra,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Evento Has Formadors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->evento_idpalestra, 'url' => ['view', 'evento_idpalestra' => $model->evento_idpalestra, 'Formador_idFormador' => $model->Formador_idFormador]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="evento-has-formador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
