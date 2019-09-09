<?php 

	$TituloPag = 'Início';
	$TituloBanner = 'Auxilium';
	$Descricao = 'Nunca é tarde para aprender. Aproveite quando e onde quiser!';
	
	include_once './includes/header.php';


?>

	<section class="history-page spad pb-0" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 color-bg"></div>
				<div class="col-lg-6">
					<div class="history-content text-left">
						<h2>História da Auxilium</h2>
						<br>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae volutpat lacus. Suspendisse imperdiet, velit at auctor sollicitudin, nisl magna ornare ligula, ut maximus nunc ipsum et massa. Sed porttitor ex quis ultricies bibendum. Vestibulum consequat aliquam nisl id iaculis. Nullam ultrices mi vitae lectus suscipit, non rhoncus odio sollicitudin. Ut ut posuere turpis. Nam a ultricies massa, at tincidunt magna. Sed vel erat ipsum. Ut ac pharetra metus, id dapibus enim. Nulla odio turpis, facilisis quis iaculis in, ornare a lorem. Sed nec eros enim.</p>
					</div>
				</div>
			</div>
		</div>
	</section>		



<section class="curse-page spad pb-0" id="curses">
		<div class="container">
			<h2 class="title" style="margin: 70px 0px; text-align: center;">Cursos</h2>
			<div class="row">
				<div class="col-lg-6">
					<div class="curse-content text-left">
						<h2>Curso básico de Libras</h2>
						<br>
						<p>Curso focado em ensinar o básico sobre a linguagem brasileira de sinais.</p>
						<ul class="contact-list">
							<li>Simples</li>
							<li>Rápido</li>
						</ul>
						<a class="curse-btn site-btn" href="cursos.php">Saiba Mais</a>
					</div>
				</div>
				<div class="col-lg-6 color-bg"></div>
			</div>
		</div>
	</section>	


	<section class="inpiration-page spad pb-0" id="inspiration">
		<div class="container">
			<h2 class="title" style="margin: 70px 0px 0px 0px;">Inspiração</h2>
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
					<div class="contact-info-area">
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
			<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.6614703091736!2d-46.626126684556176!3d-23.508699984709075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5882587e8607%3A0xa4cbaa38551a68e4!2sEtec+Parque+da+Juventude!5e0!3m2!1spt-BR!2sbr!4v1565468784455!5m2!1spt-BR!2sbr" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe></div>
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
	<script src="./javascript/circle-progress.min.js"></script>
	<script src="./javascript/main.js"></script>
	<script src="./javascript/app.js"></script>
	<script src="./javascript/dashboard.js"></script>
</body>
</html>