<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\JogosHasArbitro */

$this->title = $model->Jogos_idJogos;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jogos Has Arbitros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jogos-has-arbitro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'Jogos_idJogos' => $model->Jogos_idJogos, 'Arbitro_idArbitro' => $model->Arbitro_idArbitro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'Jogos_idJogos' => $model->Jogos_idJogos, 'Arbitro_idArbitro' => $model->Arbitro_idArbitro], [
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
            'Jogos_idJogos',
            'Arbitro_idArbitro',
        ],
    ]) ?>

</div>
