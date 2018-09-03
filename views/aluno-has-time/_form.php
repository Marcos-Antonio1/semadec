<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlunoHasTime */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aluno-has-time-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Aluno_Matricula')->textInput() ?>

    <?= $form->field($model, 'Time_idTime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
