<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EventoHasFormador */

$this->title = $model->evento_idpalestra;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Evento Has Formadors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evento-has-formador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'evento_idpalestra' => $model->evento_idpalestra, 'Formador_idFormador' => $model->Formador_idFormador], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'evento_idpalestra' => $model->evento_idpalestra, 'Formador_idFormador' => $model->Formador_idFormador], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'evento_idpalestra',
            'Formador_idFormador',
        ],
    ]) ?>

</div>
