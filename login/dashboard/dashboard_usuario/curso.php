<?php

/*include_once './classes/DataBase.class.php';*/
session_start();

/*$DB = new DataBase();*/
$Imagem = base64_encode($_SESSION['imagem']);
?>
    
    <!DOCTYPE html>
    <html lang='pt-BR'>
    
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta http-equiv='Content-Language' content='pt-BR'>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
        <link rel="shortcut icon" href="../../../img/favicon.ico" />
        <title>Auxilium | Configura��es</title>
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no' />
        <link href='https://fonts.googleapis.com/css?family=Lobster&display=swap' rel='stylesheet'> 
        <meta name='msapplication-tap-highlight' content='no'>
        <link href='../../../css/main.css' rel='stylesheet'>
        <link href='../../../css/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class='app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header'>
            <div class='app-header header-shadow'>
                <div class='app-header__logo'>
                    <div class='site-logo logo-src' style='margin-top: 0px'>
                        <img src='../../../img/logo.svg' width='70px' height='70px' style='margin-top: -20px'>
                        <a href="../../../index.php" style='font-family: Lobster; font-size: 2.5em; color: #ff712e'>Auxilium</a>
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
                                                <img width='42' height='42' style='margin-left: 800px' class='rounded-circle' src='data:image/jpeg;base64,{$Imagem}' alt=''>
                                                <i class='fa fa-angle-down ml-2 opacity-8'></i>
                                            </a>
                                            <div tabindex='-1' role='menu' aria-hidden='true' class='dropdown-menu dropdown-menu-right'>
                                                <button type='button' tabindex='0' class='dropdown-item'>Conta do UsuÃ¡rio</button>
                                                <button type='button' tabindex='0' class='dropdown-item'>ConfiguraÃ§Ãµes</button>
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
                                    <a href='cursos.php' class='mm-active'>
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
                                <li class='app-sidebar__heading'>AÃ§Ãµes</li>
                                    <li>
                                        <a href=''>
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
                            
                    <section class='blog-page spad pb-0' id='curses'>
                        <div class='container'>
                            <div class='row'>
                                <div class='col-lg-12 mb-5 mb-lg-0'>
                                    <!-- blog post -->
                                    <div class='blog-post'>
                                        <img src='../../../img/curso.jpg' height="100%" width="100%" alt=''>
                                        <h3>Curso Básico de Libras (Alfabeto, Vogais, Cumprimentos)</h3>
                                        <div class='blog-metas'>
                                            <div class='blog-meta'>
                                                <a href='#'>Aprendizagem</a>
                                            </div>
                                            <div class='blog-meta'>
                                                <a href='#'>29, Agosto 2019</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna. </p>
                                        <br><br><br>
                                        <div id='accordion' class='accordion-area'>
                                            <div class='panel'>
                                                <div class='panel-header active' id='headingOne'>
                                                    <button class='panel-link active' data-toggle='collapse' data-target='#collapse1' aria-expanded='true' aria-controls='collapse1'>Módulo 1</button>
                                                </div>
                                                <div id='collapse1' class='collapse show' aria-labelledby='heading1' data-parent='#accordion'>
                                                    <div class='panel-body'>
                                                        <div class="list-group">
                                                          <button type="button" class="list-group-item list-group-item-action">Aula 1</button>
                                                          <button type="button" class="list-group-item list-group-item-action">Aula 2</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='panel'>
                                                <div class='panel-header' id='headingTwo'>
                                                    <button class='panel-link' data-toggle='collapse' data-target='#collapse2' aria-expanded='false' aria-controls='collapse2'>Módulo 2</button>
                                                        </div>
                                                <div id='collapse2' class='collapse' aria-labelledby='heading2' data-parent='#accordion'>
                                                    <div class='panel-body'>
                                                        <div class="list-group">
                                                          <button type="button" class="list-group-item list-group-item-action">Aula 3</button>
                                                          <button type="button" class="list-group-item list-group-item-action">Aula 4</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='panel'>
                                                <div class='panel-header' id='headingThree'>
                                                    <button class='panel-link' data-toggle='collapse' data-target='#collapse3' aria-expanded='false' aria-controls='collapse3'>Módulo 3</button>
                                                </div>
                                                <div id='collapse3' class='collapse' aria-labelledby='heading3' data-parent='#accordion'>
                                                    <div class='panel-body'>
                                                        <div class="list-group">
                                                          <button type="button" class="list-group-item list-group-item-action">Aula 5</button>
                                                          <button type="button" class="list-group-item list-group-item-action">Aula 6</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                             
                                            
                    <div class='app-wrapper-footer' style="width: 100%;">
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
                    </div>
                    </div>
                    
        <!--====== Javascripts & Jquery ======-->
    <script src='../../../javascript/main-dashboard.js'></script>
    <script src="../../../javascript/jquery-3.2.1.min.js"></script>
    <script src="../../../javascript/bootstrap.min.js"></script>
    <script src="../../../javascript/main.js"></script>
    <script src="../../../javascript/mixitup.min.js"></script>
    <script src="../../../javascript/app.js"></script>
    <script src='../../../javascript/circle-progress.min.js'></script>
    <script src='../../../javascript/owl.carousel.min.js'></script>
    <script src='../../../javascript/dashboard.js'></script>

</body>
</html>
    