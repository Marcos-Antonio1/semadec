<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EventoHasFormador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="evento-has-formador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'evento_idpalestra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Formador_idFormador')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
