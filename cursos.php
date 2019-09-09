<?php

include_once './classes/DataBase.class.php';

$BD = new DataBase();

$TituloPag = 'Cursos';
$TituloBanner = 'Nossos Cursos';
$Titulo = "Sem Título";
$Descricao = "Nenhuma";
$TempoEstimado = "404 Dias";
$Imagem = file_get_contents("../img/logo_maos.png");
$Inicio = 0;
$Limite = 10;

include_once './includes/header.php';

?>

	<section class='blog-page spad pb-0' id='curses'>
		<div class='course-warp'>
			<ul class='course-filter controls'>
				<li class='control active' data-filter='all'>Todos</li>
				<li class='control' data-filter='.libras'>Libras</li>
			</ul>
		<div class='row course-items-area'>
				<!-- course -->
				<?php 
				
    				$Dados = $BD->BuscaDadosCursos($Inicio, $Limite);
    								
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
        				
    				}
				
				?>
				<!-- course -->
		</section>

<?php 

    include_once './includes/footer.php'; 
    
?>

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