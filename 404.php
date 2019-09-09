<?php

session_start();
$NomeCurso = "Curso 404";

echo("
    
    <!DOCTYPE html>
    <html lang='pt-br'>
    <head>
    	<title>Auxilium | {$NomeCurso}</title>
    	<meta charset='UTF-8'>
    	<meta name='theme-color' content='#2bcbbf'>
    	<meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='shortcut icon' href='./img/favicon.ico' />
    	
    	<!-- Icone CabeÃƒÂ§alho -->
    	
    	<!-- Fontes -->
    	<link href='https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i' rel='stylesheet'>
    	<link href='https://fonts.googleapis.com/css?family=Lobster&display=swap' rel='stylesheet'>
    	
    	<!-- Estilos -->
    	<link rel='stylesheet' href='./css/bootstrap.min.css'/>
    	<link rel='stylesheet' href='./css/font-awesome.min.css'/>
    	<link rel='stylesheet' href='./css/style.css'/>
    	
    </head>
    <body>
    	<div id='preloder'>
    		<div class='loader'></div>
    	</div>
    	
    	<header class='header-section'>
    		<div class='container'>
    			<div class='row'>
    				<div class='col-lg-3 col-md-3'>
    					<div class='site-logo' style='margin-top: -10px;'>
    						<img src='./img/logo.svg' width='70px' height='70px' style='margin-top: -20px;'>
    						<a href='' style='font-family: Lobster; font-size: 3em; color: #fff;'>Auxilium</a>
    					</div>
    					<div class='nav-switch'>
    						<i class='fa fa-bars'></i>
    					</div>
    				</div>
    				<div class='col-lg-9 col-md-9'>
    				
");
if($_SESSION){
    
    include_once './login/perfil.php';
    
}else{
    
    echo("<a href='login/index.php' class='site-btn header-btn'>Login</a>");
    
}

echo("
    
    					<nav class='main-menu'>
    						<ul>
    							<li><a href='index.php'>Inicio</a></li>
    							<li><a class='link_interno' href='#curses'>{$NomeCurso}</a></li>
    						</ul>
    					</nav>
    				</div>
    			</div>
    		</div>
    	</header>
    	
    	
    	
    	<section class='hero-section-curse set-bg' data-setbg='./img/bg-teste.png'>
    		<div class='container'>
    			<div class='hero-text text-white'>
    				<h2>{$NomeCurso}</h2>
    			</div>
    		</div>
    	</section>
    	
    	
    	<section class='blog-page spad pb-0' id='curses'>
    		<div class='container'>
    			<div class='row'>
    				<div class='col-lg-12 mb-5 mb-lg-0'>
    					<!-- blog post -->
    					<div class='blog-post'>
    						<img src='./img/curso.jpg' alt=''>
    						<h3>Curso BÃ¡sico de Libras (Alfabeto, Vogais, Cumprimentos)</h3>
    						<div class='blog-metas'>
    							<div class='blog-meta'>
    								<a href='#'>Aprendizagem</a>
    							</div>
    							<div class='blog-meta'>
    								<a href='#'>29, Agosto 2019</a>
    							</div>
    						</div>
    						<p>Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna. </p>
    						<a href='#' class='site-btn'>Comprar</a>
    						<br><br><br>
    						<div id='accordion' class='accordion-area'>
    							<div class='panel'>
    								<div class='panel-header active' id='headingOne'>
    									<button class='panel-link active' data-toggle='collapse' data-target='#collapse1' aria-expanded='true' aria-controls='collapse1'>MÃ³dulo 1</button>
    								</div>
    								<div id='collapse1' class='collapse show' aria-labelledby='heading1' data-parent='#accordion'>
    									<div class='panel-body'>
    										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
    									</div>
    								</div>
    							</div>
    							<div class='panel'>
    								<div class='panel-header' id='headingTwo'>
    									<button class='panel-link' data-toggle='collapse' data-target='#collapse2' aria-expanded='false' aria-controls='collapse2'>MÃ³dulo 2</button>
    										</div>
    								<div id='collapse2' class='collapse' aria-labelledby='heading2' data-parent='#accordion'>
    									<div class='panel-body'>
    										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
    									</div>
    								</div>
    							</div>
    							<div class='panel'>
    								<div class='panel-header' id='headingThree'>
    									<button class='panel-link' data-toggle='collapse' data-target='#collapse3' aria-expanded='false' aria-controls='collapse3'>MÃ³dulo 3</button>
    								</div>
    								<div id='collapse3' class='collapse' aria-labelledby='heading3' data-parent='#accordion'>
    									<div class='panel-body'>
    										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</section>
    		
    		
    	<footer class='footer-section'>
    		<div class='footer-bottom'>
    			<div class='footer-warp'>
    				<ul class='footer-menu'>
    					<li><a href='#'>Termos e CondiÃ§Ãµes</a></li>
    					<li><a href='#'>Privacidade</a></li>
    				</ul>
    				<div class='copyright'>&copy;AUXILIUM | <script>document.write(new Date().getFullYear());</script> </div>
    			</div>
    		</div>
    	</footer>
    	
    	<!--====== Javascripts & Jquery ======-->
    	<script src='./javascript/jquery-3.2.1.min.js'></script>
    	<script src='./javascript/bootstrap.min.js'></script>
    	<script src='./javascript/mixitup.min.js'></script>
    	<script src='./javascript/circle-progress.min.js'></script>
    	<script src='./javascript/owl.carousel.min.js'></script>
    	<script src='./javascript/main.js'></script>
    	<script src='./javascript/app.js'></script>
    	<script src='./javascript/dashboard.js'></script>
    </body>
    </html>
    
");