<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Escrincoes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escrincoes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'evento_idpalestra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Aluno_Matricula')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
