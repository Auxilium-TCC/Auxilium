<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Auxilium | Cursos</title>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#2bcbbf">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Icone CabeÃ§alho -->   

	<!-- Fontes -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 

	<!-- Estilos -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo" style="margin-top: -10px;">
						<img src="./img/logo.svg" width="70px" height="70px" class="svg-logo" style="margin-top: -20px;">
						<a href="" class="text-logo" style="">Auxilium</a>
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
							<li><a href="index.php">Inicio</a></li>
							<li><a class="link_interno" href="#curses">Cursos</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>



	<section class="hero-section-curse set-bg" data-setbg="img/bg-teste.png">
		<div class="container">
			<div class="hero-text text-white">
				<h2>Nossos Cursos</h2>
			</div>
		</div>
	</section>


	<section class="blog-page spad pb-0" id="curses">
		<div class="course-warp">
			<ul class="course-filter controls">
				<li class="control active" data-filter="all">Todos</li>
				<li class="control" data-filter=".libras">Libras</li>
			</ul>
		<div class="row course-items-area">
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 libras">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="img/libras-laranja.jpg">
							<div class="price">Tempo estimado do Curso</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Nome Curso</h5>
								<p>Descrição do Curso</p>
								<div class="students">Alunos Estudando</div>
							</div>
							<div class="course-author">
								<p><a class="course-author-btn" onclick="selecao1()" href="#nome">Saiba mais</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-4 col-sm-6 libras">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="img/libras-laranja.jpg">
							<div class="price">Tempo estimado do Curso</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Nome Curso</h5>
								<p>Descrição do Curso</p>
								<div class="students">Alunos Estudando</div>
							</div>
							<div class="course-author">
								<p><a class="course-author-btn" onclick="selecao2()" href="#nome">Saiba mais</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-4 col-sm-6 libras">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="img/libras-laranja.jpg">
							<div class="price">Tempo estimado do Curso</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Nome Curso</h5>
								<p>Descrição do Curso</p>
								<div class="students">Alunos Estudando</div>
							</div>
							<div class="course-author">
								<p><a class="course-author-btn" onclick="selecao3()" href="#nome">Saiba mais</a></p>
							</div>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="mix col-lg-3 col-md-4 col-sm-6 libras">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="img/libras-laranja.jpg">
							<div class="price">Tempo estimado do Curso</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Nome Curso</h5>
								<p>Descrição do Curso</p>
								<div class="students">Alunos Estudando</div>
							</div>
							<div class="course-author">
								<p><a class="course-author-btn" onclick="selecao4()" href="#nome">Saiba mais</a></p>
							</div>
						</div>
					</div>
				</div>
		</section>

	<footer class="footer-section">
		<div class="footer-bottom">
			<div class="footer-warp">
				<ul class="footer-menu">
					<li><a href="#">Termos e Condições</a></li>
					<li><a href="#">Privacidade</a></li>
				</ul>
				<div class="copyright">&copy;AUXILIUM | <script>document.write(new Date().getFullYear());</script> </div>
			</div>
		</div>
	</footer> 

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/app.js"></script>
	<script src="js/dashboard.js"></script>
</body>
</html>