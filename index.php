<?php 

	$TituloPag = 'Início';
	$TituloBanner = 'Auxilium';
	$Descricao = 'Nunca é tarde para aprender. Aproveite quando e onde quiser!';

?>

<head>
	<title>Auxilium | <?php echo($TituloPag)?></title>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#2bcbbf">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="shortcut icon" href="./img/favicon.ico" />

	<!-- Icone Cabeçalho -->   

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
					<nav class="main-menu">
						<ul style="margin-top: 10px;">
							<li><a href="index.php">Início</a></li>
							<li><a class="link_interno" href="#about">Sobre nós</a></li>
							<li><a class="link_interno" href="#curses">Curso</a></li>
							<li><a class="link_interno" href="#planos">Planos</a></li>
							<li><a class="link_interno" href="#inspiration">Inspiração</a></li>
							<li><a class="link_interno" href="#contact">Contato</a></li>
							<li><?php session_start(); if($_SESSION){ include_once "./login/perfil.php"; }else{ echo("<a href='login/index.php' class='login-btn'>Login</a>");}?></li>
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
	<section class="history-page spad pb-0" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 color-bg"></div>
				<div class="col-lg-6">
					<div class="history-content text-left" data-anime="scroll">
						<h2>História da Auxilium</h2>
						<br>
						<p>A Auxilium surge em 2018, mas ainda sem nome, apenas com o objetivo de ajudar surdos e deficientes auditivos, após descobrirmos uma comunidade inteira dentro da sociedade ouvinte, uma comunidade inteira que deveria ser vista e respeitada, e começa assim nossa jornada por dois mundos tão próximos, porém tão distantes. Com meses de desenvolvimento e trabalho, nasce a Auxilium, a primeira plataforma de ensino de Libras que não busca apenas ensinar, mas algo além disso, conscientizar, essa é a palavra-chave e o nosso maior objetivo, usando o ensino e o estimulo de conhecimento, buscamos esclarecer que não há diferença entre um surdo e um ouvinte, que devemos incluir e aceitar todos eles sem preconceito ou quaisquer julgamento.</p>
					</div>
				</div>
			</div>
		</div>
	</section>	
	<section class="history-page spad pb-0" id="curses">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="history-content text-right" data-anime="scroll">
						<h2>Conheça nossos cursos</h2>
						<br>
						<p>Cursos feitos para familiares de Surdos, para que podemos atingir a base.</p>
						<br>
						<a class="site-btn" href="cursos.php">Saiba Mais</a>
					</div>
				</div>
				<div class="col-lg-6 color-bg"></div>		
			</div>
		</div>
	</section>	

	<br><br>

	<section class="plan-page spad pb-0" id="planos" data-group="planos" style="background-color: #ff7122">
		<div class="container">
				<h2 style="color: #fff; text-align: center;" data-anime="scroll">Planos Auxilium</h2>
					<ul class="tab-menu">
						<li><a href="#mensal" data-click="mensal">Mensal</a></li>
						<li><a class="active" href="#trimestral" data-click="trimestral">Trimestral</a></li>
						<li><a href="#anual" data-click="anual">Anual</a></li>
					</ul>
			<div class="row" data-anime="scroll">
				<div class="col-lg-12" id="mensal" data-target="mensal">
					<div class=" item-info" style="text-align: center; border-radius: 10px;">
						<br>
						<h3 style="margin-bottom: 30px; text-align: center; color: #2bcbbf">Mensal</h3>
						<p style="font-size: 20px; text-align: center;">Preço padrão</p>
						<p style="margin-top: -20px;">R$<strong style="font-size: 50px; color:#474747">29,90</strong>/mês</p>
						<ul style="list-style: none; font-family: 'Raleway', sans-serif; margin-bottom: 40px; color: #878787;">
							<li>Todos os nossos cursos</li>
							<li>Sistema próprio</li>
							<li>Webchamada</li>
						</ul>
						<a href="login/dashboard/dashboard_usuario/comprar.php" class="site-btn" style="border-radius: 30px; margin-bottom: 20px;">Contratar</a>
					</div>
				</div>

				<div class="col-lg-12 active" id="trimestral" data-target="trimestral">
					<div class="item-info" style="text-align: center; border-radius: 10px;">
						<br>
						<h3 style="margin-bottom: 30px; text-align: center; color: #2bcbbf;">Trimestral</h3>
						<p style="font-size: 20px; text-align: center; background-color: #2bcbbf; color: #fff;">Mais Popular</p>
						<p style="margin-top: -20px;">R$<strong style="font-size: 50px; color:#474747">74,90</strong>/tri</p>
						<ul style="list-style: none; font-family: 'Raleway', sans-serif; margin-bottom: 40px; color: #878787;">
							<li>Todos os nossos cursos</li>
							<li>Sistema próprio</li>
							<li>Webchamada</li>
						</ul>
						<a href="login/dashboard/dashboard_usuario/comprar.php" class="site-btn" style="border-radius: 30px; margin-bottom: 20px;">Contratar</a>
					</div>
				</div>

				<div class="col-lg-12" id="anual" data-target="anual">
					<div class="item-info" style="text-align: center; border-radius: 10px;">
						<br>
						<h3 style="margin-bottom: 30px; text-align: center; color: #2bcbbf">Anual</h3>
						<p style="font-size: 20px; text-align: center;">Maior vantagem monetária</p>
						<p style="margin-top: -20px;">R$<strong style="font-size: 50px; color:#474747">299,90</strong>/anual</p>
						<ul style="list-style: none; font-family: 'Raleway', sans-serif; margin-bottom: 40px; color: #878787;"> 
							<li>Todos os nossos cursos</li>
							<li>Sistema próprio</li>
							<li>Webchamada</li>
						</ul>
						<a href="login/dashboard/dashboard_usuario/comprar.php" class="site-btn" style="border-radius: 30px; margin-bottom: 20px;">Contratar</a>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
	</section>		



	<section class="inpiration-page spad pb-0" id="inspiration">
		<div class="container">
			<h2 class="title" data-anime="scroll" style="margin: 70px 0px 0px 0px;">Inspiração</h2>
			<div class="row">
				<div class="col-lg-8 embed"><div id="player"></div></div>
			</div>
		</div>
	</section>


	<section class="contact-page spad pb-0" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<div class="section-title text-white text-left">
							<h2>Entrar em contato</h2>
							<p>Tire dúvidas ou dê sugestões para a melhora do site. </p>
						</div>
						<form class="contact-form">
							<input type="text" placeholder="Seu Nome">
							<input type="text" placeholder="Seu E-mail">
							<input type="text" placeholder="Assunto">
							<textarea placeholder="Mensagem"></textarea>
							<button class="site-btn">Enviar Mensagem</button>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-info-area" data-anime="scroll">
						<div class="section-title text-left p-0">
							<h2 class="info">Contato</h2>
						</div>
						<div class="phone-number">
							<span>Telefone</span>
							<h2>+55 11 2221-0098</h2>
						</div>
						<ul class="contact-list">
							<li>Etec Parque da Juventude<br>Av. Cruzeiro do Sul, 2630</li>
							<li>auxilium.tcc@gmail.com</li>
						</ul>
					</div>
				</div>
			</div>
			<br>
			<div data-anime="scroll"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.6614703091736!2d-46.626126684556176!3d-23.508699984709075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5882587e8607%3A0xa4cbaa38551a68e4!2sEtec+Parque+da+Juventude!5e0!3m2!1spt-BR!2sbr!4v1565468784455!5m2!1spt-BR!2sbr" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe></div>
		</div>
		<br>
	</section>

	<?php 
	
		include_once './includes/footer.php'; 
	
	?>
	
	<!--====== Javascripts & Jquery ======-->

	<script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '100%',
          width: '100%',
          videoId: 'O6OI2-p-_AE',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    </script>

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