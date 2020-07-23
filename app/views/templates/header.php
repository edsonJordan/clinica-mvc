<?php // require RUTA_APP . '/views/templates/header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title> <?php echo NOMBRESITIO; ?> </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php  echo RUTA_URL; ?>/css/main.css">
	<link rel="stylesheet" href="<?php  echo RUTA_URL; ?>/css/gijgo.min.css" type="text/css">
<link rel="stylesheet" href="<?php  echo RUTA_URL; ?>/css/jquery.dataTables.css" type="text/css">
<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/public/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/public/js/moment.min.js"></script>
<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/public/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/public/js/gijgo.min.js"></script>
<script type="text/javascript" src="<?php  echo RUTA_URL; ?>/js/gijgo.min.css"></script>
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-titles text-center dashboard-sideBar-title">
			<?php echo NOMBRESITIO; ?>	<i class="zmdi zmdi-close btn-menu-dashboard d-block d-xl-none text-left"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
				<p class="text-center"><i style=" " class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
					<figcaption class="text-center text-titles"><?php 
					if(isset($_SESSION['nameuser'])){
						echo $_SESSION['nameuser'];
					}
					else {
						rediccionar('login');
					}
					?></figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">

			<li>
						<a href="<?php echo RUTA_URL; ?>sistema/">
							<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Administracion
						</a>
					</li>
				<li>
					<a  href="#" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Registros <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					<?php
					if($_SESSION['codigo'] == 4){
					?>

					
<li>
							<a href="<?php echo RUTA_URL; ?>sistema/paciente"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>Pacientes</a>
						</li>
					<?php 
					}
					?>
					

					
						<li>
							<a href="<?php echo RUTA_URL; ?>sistema/analisis"><i class="zmdi zmdi-male zmdi-hc-fw"></i> Analisis</a>
						</li>
					</ul>
				</li>
				<?php 
				
				if($_SESSION['codigo'] == 4){
			?>
			<li>
					<a  href="#" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i>Analisis<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="<?php echo RUTA_URL; ?>hemograma/"><i class="zmdi zmdi-timer zmdi-hc-fw"></i>Hemograma</a>
						</li>
						<li>
							<a href="<?php echo RUTA_URL; ?>uroanalisis/"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Uroanálisis </a>
						</li>
						<li>
							<a href="<?php echo RUTA_URL; ?>coprocultivo/"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Coprocultivo</a>
						</li>
					</ul>
				</li>
		<?php

				}
				?>
				


			</ul>
		</div>
	</section>
	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="float-left">
					<a href="#" class="btn-menu-dashboard  "><i class="zmdi zmdi-view-list-alt"></i></a>
				</li>
				
			</ul>
		</nav>