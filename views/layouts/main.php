<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<?php $this->beginBody() ?>

	<!-- NAV, Menu do top -->
	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
		<a class="navbar-brand mr-1" href="<?= Url::home() ?>">Semadec</a>
		<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
  			<i class="fas fa-bars"></i>
		</button>
		<!-- Navbar -->
      	 <div class=" d-sm-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
			
				<?php 
					if(Yii::$app->user->isGuest){
						echo '<a class=" btn btn-primary btn-sm" href="' . Url::toRoute('site/login') . '">Login</a>';
					}else {
						//<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
						/*echo '<a class="navbar-brand mr-1" href="' . Url::toRoute(['site/logout']) . '">Logout</a>';
						echo Html::beginForm(['/site/logout'], 'post')
							. Html::submitButton(
								'Logout (' . Yii::$app->user->identity->username . ')',
								['class' => 'btn btn-danger btn-sm']
							)
						. Html::endForm(); */

						echo Html::beginForm(['/site/logout'], 'post')
							. Html::a(
								'Logout (' . Yii::$app->user->identity->username . ')',
								'#',
								[
									'class' => 'btn btn-danger btn-sm',
									'data-toggle' => 'modal',
									'data-target' => '#logoutModal'
								]
							)
						. Html::endForm();
					}
				?>
			
		</div>
	</nav>
	<!-- Fim NAV, Menu do top -->

	<div id="wrapper">
		<!-- Sidebar -->
		<ul class="sidebar navbar-nav">
			<!-- Insere o botão da área adminstrativa se estiver logado -->
            <?php if(!Yii::$app->user->isGuest){
                 echo '<li class="nav-item active">
                    <a class="nav-link" href="' . Url::toRoute('/adm/index') . '">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Administrativo</span>
                    </a>
                </li>';
            } ?>
  			<li class="nav-item dropdown">
          		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            		<i class="fas fa-fw fa-folder"></i>
            		<span>Campeonatos</span>
          		</a>
          		<div class="dropdown-menu" aria-labelledby="pagesDropdown">
            		<a class="dropdown-item" href="<?= Url::toRoute('/campeonato/index') ?>">Futsal</a>
            		<a class="dropdown-item" href="<?= Url::toRoute('/campeonato/index') ?>">Vôlei</a>
					<a class="dropdown-item" href="<?= Url::toRoute('/campeonato/index') ?>">Handebol</a>
         		</div>
        	</li>
			<li class="nav-item">
    			<a class="nav-link" href="<?= Url::toRoute('/classificacao/index') ?>">
      				<i class="fas fa-fw fa-chart-area"></i>
					<span>Classificações</span>
				</a>
 	 		</li>
			<li class="nav-item">
				<a class="nav-link" href="tables.html">
				<i class="fas fa-fw fa-table"></i>
				<span>Tabelas</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="tables.html">
				<i class="fas fa-fw fa-table"></i>
				<span>Eventos</span></a>
			</li>
		</ul>

		<div id="content-wrapper">
			<div class="container-fluid">
				<?= $content ?>
			</div>
			<!-- Sticky Footer -->
			<footer class="sticky-footer">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright © Your Website 2018</span>
					</div>
				</div>
			</footer>
		</div>
		<!-- /.content-wrapper -->
	</div>
	<!-- /#wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
  			<div class="modal-content">
    			<div class="modal-header">
      				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
      				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
        				<span aria-hidden="true">×</span>
      				</button>
    			</div>
    			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    				<div class="modal-footer">
      					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<?= Html::beginForm(['/site/logout'], 'post')
							. Html::submitButton(
								'Logout',
								['class' => 'btn btn-danger']
							)
						. Html::endForm(); ?>
    				</div>
 				 </div>
			</div>
		</div>
	</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>