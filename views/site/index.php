<?php

use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Semadec';
?>
<div class="site-index">

    <div class="jumbotron jumbotron-fluid bg-warning">
        <img src="img/logo.png" class="img-fluid rounded mx-auto d-block" alt="Logotipo SEMADEC">
    </div>
    
    <!-- Botões -->
    <div class="row">
        <!--  Tabelas -->
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-list"></i>
                    </div>
                    <div class="mr-5">Tabelas</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?= Url::toRoute('campeonato/index') ?> ">
                    <span class="float-left">Ir para Tabelas</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <!--  Fim Tabelas -->

        <!--  Eventos -->
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                    <i class="far fa-fw fa-calendar-plus"></i>
                    </div>
                    <div class="mr-5">Eventos</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?= Url::toRoute('eventos/index') ?> ">
                    <span class="float-left">Ir para Eventos</span>
                    <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <!--  Fim Eventos -->

        <!--  Times -->
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-info o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-trophy"></i>
                    </div>
                    <div class="mr-5">Times</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?= Url::toRoute('time/index') ?> ">
                    <span class="float-left">Ir para Times</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <!--  Fim Times -->

        <!--  Alunos -->
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white o-hidden h-100" style="background-color: #563d7c">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-users"></i>
                    </div>
                    <div class="mr-5">Alunos</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?= Url::toRoute('aluno/index') ?> ">
                    <span class="float-left">Ir para Alunos</span>
                    <span class="float-right">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </div>
        </div>
        <!--  Fim Times -->
    </div>
</div>
