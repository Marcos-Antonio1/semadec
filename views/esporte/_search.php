<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EsporteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="esporte-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idEsporte') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'categoria') ?>

    <?= $form->field($model, 'modalidade') ?>

    <?= $form->field($model, 'quantidade_max') ?>

    <?php // echo $form->field($model, 'quantidade_min') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
