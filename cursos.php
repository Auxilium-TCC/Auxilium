<?php

include_once './classes/DataBase.class.php';

$BD = new DataBase();

$TituloPag = 'Cursos';
$TituloBanner = 'Nossos Cursos';
$Titulo = "Sem Título";
$Descricao = "";
$TempoEstimado = "404 Dias";

?>

<head>
	<title>Auxilium | <?php echo($TituloPag)?></title>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#2bcbbf">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="shortcut icon" href="./img/favicon.ico" />

	<!-- Icone CabeÃƒÂ§alho -->   

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

	<header class="header-section" style="position:fixed; background-color:#ff712e; z-index:1; top:-50px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<img src="./img/logo.svg" width="70px" height="70px" style="margin-top: -20px;">
						<a href="index.php" class="a">Auxilium</a>
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

							echo("<a href='login/index.php' style='margin-top: 10px;' class='site-btn header-btn'>Login</a>");

						}

					?>
					<nav class="main-menu">
						<ul style="margin-top: 10px;">
							<li><a href="index.php">Início</a></li>
							<li><a class="link_interno" href="#about">Sobre nós</a></li>
							<li><a class="link_interno" href="#curses">Curso</a></li>
							<li><a class="link_interno" href="#planos">Planos</a></li>
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
	<section class="blog-page spad pb-0" id="curses">
		<div class="course-warp">
			<ul class="course-filter controls">
				<li class="control active" data-filter="all">Todos</li>
			</ul>
		<div class="row course-items-area">
				<!-- course -->
				<?php 
				
    				$Dados = $BD->BuscaDadosCursos();
    								
    				foreach($Dados as $Campo){
    				    
    				    $IDCurso = $Campo['ID_CURSO'];
    				    $Titulo = $Campo['TITULO_CURSO'];
    				    $Descricao = $Campo['DESCRICAO_CURSO'];
    				    $TempoEstimado = $Campo['TEMPOESTIMADO_CURSO'];
    				    $ImagemCurso = base64_encode($Campo['IMAGEM_CURSO']);
				    
        				echo("
        
            				<div class='mix col-lg-3 col-md-4 col-sm-6 libras'>
            					<div class='course-item'>
            						<div class='course-thumb set-bg' data-setbg='data:image/jpeg;base64,$ImagemCurso'>
            							<div class='price'>Tempo estimado do Curso: $TempoEstimado dia(s)</div>
            						</div>
            						<div class='course-info'>
            							<div class='course-text'>
            								<h5> $Titulo </h5>
            								<p> $Descricao </p>
            								<div class='students'>1 Aluno(s) Estudando</div>
            							</div>
            							<div class='course-author'>
            								<p><a class='course-author-btn' onclick='selecao1()' href='./cursos/curso_$IDCurso.php'>Saiba mais</a></p>
            							</div>
            						</div>
            					</div>
            				</div>
        
        				");
        				
        				if(!file_exists("./cursos/curso_".$IDCurso.".php")){
        				    
        				    $ArquivoBase = file_get_contents('./cursos/corpo_curso.php');
        				    $Arquivo = fopen("cursos/curso_".$IDCurso.".php","w+");
        				    fwrite($Arquivo, $ArquivoBase);
        				    fclose($Arquivo);
        				    
    				    }
    				    
    				}
				
				?>
				
		</section>

<?php include_once './includes/footer.php'; ?>

	<!--====== Javascripts & Jquery ======-->
	<script src="./javascript/jquery-3.2.1.min.js"></script>
	<script src="./javascript/bootstrap.min.js"></script>
	<script src="./javascript/mixitup.min.js"></script>
	<script src="./javascript/circle-progress.min.js"></script>
	<script src="./javascript/owl.carousel.min.js"></script>
	<script src="./javascript/main.js"></script>
	<script src="./javascript/app.js"></script>
	<script src="./javascript/dashboard.js"></script>
</body>
</html>