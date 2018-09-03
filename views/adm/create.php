<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Adm */

$this->title = Yii::t('app', 'Create Adm');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Adms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
