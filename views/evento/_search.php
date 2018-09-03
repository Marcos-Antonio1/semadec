<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EvemtosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idpalestra') ?>

    <?= $form->field($model, 'Tema') ?>

    <?= $form->field($model, 'descricao') ?>

    <?= $form->field($model, 'horario') ?>

    <?= $form->field($model, 'horascurriculares') ?>

    <?php // echo $form->field($model, 'tipo') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
