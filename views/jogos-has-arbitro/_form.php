<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JogosHasArbitro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jogos-has-arbitro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Jogos_idJogos')->textInput() ?>

    <?= $form->field($model, 'Arbitro_idArbitro')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
