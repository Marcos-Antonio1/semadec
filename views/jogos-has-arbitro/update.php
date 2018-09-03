<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JogosHasArbitro */

$this->title = Yii::t('app', 'Update Jogos Has Arbitro: ' . $model->Jogos_idJogos, [
    'nameAttribute' => '' . $model->Jogos_idJogos,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jogos Has Arbitros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Jogos_idJogos, 'url' => ['view', 'Jogos_idJogos' => $model->Jogos_idJogos, 'Arbitro_idArbitro' => $model->Arbitro_idArbitro]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="jogos-has-arbitro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
