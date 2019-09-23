<?php echo

include_once '../../../classes/DataBase.class.php';
session_start();

if($_SESSION == NULL){
    
    include_once '../classes/DataBase.class.php';
    
    $BD = new DataBase();
    
    $BD->Erro("Não Logado!");
    die(header("Refresh: 0.11;url=../index.php"));
    
}


$BD = new DataBase();

$Dados = $BD->BuscaUsuario($_SESSION['id']);
$Imagem = base64_encode($Dados['IMAGEM_USUARIO']);

?>

    <!DOCTYPE html>
    <html lang='pt-BR'>
    
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta http-equiv='Content-Language' content='pt-BR'>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
        <link rel="shortcut icon" href="../../../img/favicon.ico" />
        <title>Auxilium | Configurações</title>
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no' />
        <link href='https://fonts.googleapis.com/css?family=Lobster&display=swap' rel='stylesheet'> 
        <meta name='msapplication-tap-highlight' content='no'>
    <link href='../../../css/main.css' rel='stylesheet'>
<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script></head>
    <body>
        <div class='app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header'>
            <div class='app-header header-shadow'>
                <div class='app-header__logo'>
                    <div class='site-logo logo-src' style='margin-top: 0px'>
                        <img src='../../../img/logo.svg' width='70px' height='70px' style='margin-top: -20px'>
                        <a href='../../../index.php' style='font-family: Lobster; font-size: 2.5em; color: #ff712e'>Auxilium</a>
                    </div>
                    <div class='header__pane ml-auto'>
                        <div>
                            <button type='button' class='hamburger close-sidebar-btn hamburger--elastic' data-class='closed-sidebar'>
                                <span class='hamburger-box'>
                                    <span class='hamburger-inner'></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class='app-header__mobile-menu'>
                    <div>
                        <button type='button' class='hamburger hamburger--elastic mobile-toggle-nav'>
                            <span class='hamburger-box'>
                                <span class='hamburger-inner'></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class='app-header__menu'>
                    <span>
                        <button type='button' class='btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav'>
                            <span class='btn-icon-wrapper'>
                                <i class='fa fa-ellipsis-v fa-w-6'></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class='app-header__content'>
                    <div class='app-header-right'>
                        <div class='header-btn-lg pr-0'>
                            <div class='widget-content p-0'>
                                <div class='widget-content-wrapper'>
                                    <div class='widget-content-left'>
                                        <div class='btn-group'>
                                            <a data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' class='p-0 btn'>
                                                <img width='42' height='42' style='margin-left: 800px' class='rounded-circle' src='data:image/jpeg;base64,<?php echo $Imagem?>' alt=''>
                                                <i class='fa fa-angle-down ml-2 opacity-8'></i>
                                            </a>
                                            <div tabindex='-1' role='menu' aria-hidden='true' class='dropdown-menu dropdown-menu-right'>
                                                <button type='button' tabindex='0' class='dropdown-item'>Conta do Usuário</button>
                                                <button type='button' tabindex='0' class='dropdown-item'>Configurações</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='app-main'>
                <div class='app-sidebar sidebar-shadow'>
                    <div class='app-header__logo'>
                        <div class='logo-src'></div>
                        <div class='header__pane ml-auto'>
                            <div>
                                <button type='button' class='hamburger close-sidebar-btn hamburger--elastic' data-class='closed-sidebar'>
                                    <span class='hamburger-box'>
                                        <span class='hamburger-inner'></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class='app-header__mobile-menu'>
                        <div>
                            <button type='button' class='hamburger hamburger--elastic mobile-toggle-nav'>
                                <span class='hamburger-box'>
                                    <span class='hamburger-inner'></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class='app-header__menu'>
                        <span>
                            <button type='button' class='btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav'>
                                <span class='btn-icon-wrapper'>
                                    <i class='fa fa-ellipsis-v fa-w-6'></i>
                                </span>
                            </button>
                        </span>
                    </div>
                    <div class='scrollbar-sidebar'>
                        <div class='app-sidebar__inner'>
                            <ul class='vertical-nav-menu'>
                                <li class='app-sidebar__heading'>Painel de Controle</li>
                                <li>
                                    <a href='configuracoes.php' class=''>
                                        <i class='metismenu-icon pe-7s-user'></i>
                                        Perfil
                                    </a>
                                </li>
                                <li>
                                    <a href='cursos.php' class=''>
                                        <i class='metismenu-icon pe-7s-video'></i>
                                        Cursos
                                    </a>
                                </li>
                                <li>
                                    <a href='' class=''>
                                        <i class='metismenu-icon pe-7s-chat'></i>
                                        Web Chamada
                                    </a>
                                </li>
                                <li>
                                    <a href='' class='mm-active'>
                                        <i class='metismenu-icon pe-7s-diamond'></i>
                                        Contratar Plano
                                    </a>
                                </li>
                                <li class='app-sidebar__heading'>Ações</li>
                                    <li>
                                        <a href='../../../cursos.php'>
                                            <i class='metismenu-icon pe-7s-play'></i>Ver Cursos
                                        </a>
                                    </li>
                                    <li>
                                        <a href='../../processando.php?Acao=Sair'>
                                            <i class='metismenu-icon pe-7s-close'></i>Sair
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class='app-main__outer'>
                        <div class='app-main__inner'>
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
                        <button class="site-btn" onclick="enviaPagseguro1()" style="border-radius: 30px; margin-bottom: 20px;">Contratar</button>
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
                        <button  class="site-btn" onclick="enviaPagseguro2()" style="border-radius: 30px; margin-bottom: 20px;">Contratar</button>
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
                        <button onclick="enviaPagseguro3()" class="site-btn" style="border-radius: 30px; margin-bottom: 20px;">Contratar</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>


        <form id="comprar" action="https://sandbox.pagseguro.uol.com.br/checkout/v2/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">

<input type="hidden" name="code" id="code" value=""/>

</form>

    </section>        
                                            
                    <div class='app-wrapper-footer'>
                        <div class='app-footer'>
                            <div class='app-footer__inner'>
                                <div class='app-footer-left'>
                                    <ul class='nav'>
                                        <li class='nav-item'>
                                            <a href='javascript:void(0);' class='nav-link'>
                                                Copyright &copy | Alguns os Direitos Reservados
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class='app-footer-right'>
                                    <ul class='nav'>
                                        <li class='nav-item'>
                                            <a href='javascript:void(0);' class='nav-link'>
                                                Auxilium
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    
    <script type='text/javascript' src='../../../javascript/main-dashboard.js'></script>
    <script src="../../../javascript/jquery-3.2.1.min.js"></script>
    <script src="../../../javascript/bootstrap.min.js"></script>
    <script src="../../../javascript/circle-progress.min.js"></script>
    <script src="../../../javascript/main.js"></script>
    <script src="../../../javascript/app.js"></script>   
    <script>
 function enviaPagseguro1(){
 
   $.post('salvarPedido.php',{Descricao: '29.90',Id: 1},function(idPedido){

 
     $.post('pagseguroMensal.php',{idPedido: idPedido},function(data) {

       $('#code').val(data);
       $('#comprar').submit();

     })
   })
 }
 </script>
 <script>
 function enviaPagseguro2(){
 
   $.post('salvarPedido.php',{Descricao: '74.90',Id: 1},function(idPedido){

 
     $.post('pagsegurotTrimestral.php',{idPedido: idPedido},function(data) {

       $('#code').val(data);
       $('#comprar').submit();

     })
   })
 }
 </script>
 <script>
 function enviaPagseguro3(){
 
   $.post('salvarPedido.php',{Descricao: '299.90',Id: 1},function(idPedido){

 
     $.post('pagseguroAnual.php',{idPedido: idPedido},function(data) {

       $('#code').val(data);
       $('#comprar').submit();

     })
   })
 }
 </script>    
</body>
</html>