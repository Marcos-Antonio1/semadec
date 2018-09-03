<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EventoHasFormador */

$this->title = Yii::t('app', 'Create Evento Has Formador');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Evento Has Formadors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evento-has-formador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
