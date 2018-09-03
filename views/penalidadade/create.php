<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Penalidadade */

$this->title = Yii::t('app', 'Create Penalidadade');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Penalidadades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penalidadade-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
