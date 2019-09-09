<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Auxilium | <?php echo($TituloPag)?></title>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#2bcbbf">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="shortcut icon" href="./img/favicon.ico" />

	<!-- Icone CabeÃ§alho -->   

	<!-- Fontes -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
	<!-- Estilos -->
	<link rel="stylesheet" href="./css/bootstrap.min.css"/>
	<link rel="stylesheet" href="./css/font-awesome.min.css"/>
	<link rel="stylesheet" href="./css/owl.carousel.css"/>
	<link rel="stylesheet" href="./css/style.css"/>

</head>
<body>
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<header class="header-section" style="position:fixed; background-color:#ff712e; z-index:1; top:-50px">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<img src="./img/logo.svg" width="70px" height="70px" style="margin-top: -20px;">
						<a href="" class="a">Auxilium</a>
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<?php

						session_start();

						if($_SESSION){

							include_once "./login/perfil.php";	

						}else{

							echo("<a href='login/index.php' class='site-btn header-btn'>Login</a>");

						}

					?>
					<nav class="main-menu">
						<ul>
							<li><a href="index.php">Início</a></li>
							<li><a class="link_interno" href="#about">Sobre nós</a></li>
							<li><a class="link_interno" href="#curses">Curso</a></li>
							<li><a class="link_interno" href="#inspiration">Inspiração</a></li>
							<li><a class="link_interno" href="#contact">Contato</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>



	<section class="hero-section set-bg" data-setbg="./img/bg-teste.png">
		<div class="container">
			<div class="hero-text text-white">
				<h2><?php echo($TituloBanner)?></h2>
				<p><?php echo($Descricao)?></p>
			</div>
		</div>
	</section>