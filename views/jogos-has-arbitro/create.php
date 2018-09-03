<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JogosHasArbitro */

$this->title = Yii::t('app', 'Create Jogos Has Arbitro');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jogos Has Arbitros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jogos-has-arbitro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
