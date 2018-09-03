<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penalidadade */

$this->title = $model->idPenalidadade;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Penalidadades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penalidadade-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idPenalidadade], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idPenalidadade], [
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
            'idPenalidadade',
            'nome',
        ],
    ]) ?>

</div>
