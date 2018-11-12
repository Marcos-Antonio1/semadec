<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
// $this->params['breadcrumbs'][] = $this->title;
?>
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
                <div class="card-body">
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'layout' => 'horizontal',
                        'fieldConfig' => [
                            'template' => "{label}{input}{error}",
                        ]
                    ]); ?>
                        
                        <?= $form->field($model, 'username')
                            ->textInput(['id' => 'inputUsername', 'class' => 'form-control', 'placeholder' => 'Username', 'autofocus' => true])
                            ->label(null, ['for' => 'inputUsername', 'style' => 'display: none'])
                            ->error(['class' => 'text-danger']) 
                        ?>
                        
                        <?= $form->field($model, 'password')
                            ->passwordInput(['id' => 'inputPassword', 'class' => 'form-control', 'placeholder' => 'Password']) 
                            ->label(null, ['for' => 'inputPassword', 'style' => 'display: none'])
                            ->error(['class' => 'text-danger']) 
                        ?>

                        <?= $form->field($model, 'rememberMe')
                            ->checkbox() 
                        ?>
                        
                        <div class="form-group">
                            <div class="col-lg-offset-1 col-lg-11">
                                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                            </div>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>

