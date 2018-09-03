<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdmSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adm-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idADM') ?>

    <?= $form->field($model, 'Username') ?>

    <?= $form->field($model, 'Password') ?>

    <?= $form->field($model, 'auth_key') ?>

    <?= $form->field($model, 'access_token') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
