<?phpinclude_once "../../../classes/DataBase.class.php";session_start();$BD = new DataBase();if($_SESSION == NULL){        $BD->Erro("Não Logado!");    die(header("Refresh: 0.11;url=/Auxilium/index.php"));    }$TituloNivel = "";$IDNivel = "";if(isset($_REQUEST['Acao'])){        $Acao = $_REQUEST['Acao'];    $IDCurso = $_REQUEST['IDCurso'];        $Dados = $BD->BuscaNiveis($IDCurso);         $TituloNivel = $Dados['TITULO_NIVEL'];    $IDNivel = $Dados['ID_NIVEL'];        }else{        $Acao = "Cadastro";    }switch($Acao){        case "Cadastro":        $Titulo = "Cadastro";        break;    case "Alterar":        $Titulo = "Alterar";        break;    case "Excluir":        $Titulo = "Excluir";        break;        }?><!doctype html><html lang="pt-BR"><head>    <meta charset="utf-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta http-equiv="Content-Language" content="pt-BR">    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>    <link rel="shortcut icon" href="../../../img/favicon.ico" />    <title>Auxilium Admin | <?php echo($Titulo ) ?> Curso</title>    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />    <meta name="msapplication-tap-highlight" content="no">    <link href="../../../css/main.css" rel="stylesheet">    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script></head><body>    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">        <div class="app-header header-shadow">            <div class="app-header__logo">                <div class='site-logo logo-src' style='margin-top: 0px'>                        <img src='../../../img/logo.svg' width='70px' height='70px' style='margin-top: -20px'>                        <a href="../../../index.php" style='font-family: Lobster; font-size: 2.5em; color: #ff712e'>Auxilium</a>                    </div>                <div class="header__pane ml-auto">                    <div>                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">                            <span class="hamburger-box">                                <span class="hamburger-inner"></span>                            </span>                        </button>                    </div>                </div>            </div>            <div class="app-header__mobile-menu">                <div>                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">                        <span class="hamburger-box">                            <span class="hamburger-inner"></span>                        </span>                    </button>                </div>            </div>            <div class="app-header__menu">                <span>                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">                        <span class="btn-icon-wrapper">                            <i class="fa fa-ellipsis-v fa-w-6"></i>                        </span>                    </button>                </span>            </div>    <div class="app-header__content">                                <div class="app-header-right">                    <div class="header-btn-lg pr-0">                        <div class="widget-content p-0">                            <div class="widget-content-wrapper">                                <div class="widget-content-left">                                    <div class="btn-group">                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">                                            <img width="42" height='42' style='margin-left: 800px' class="rounded-circle" src='data:image/jpeg;base64,<?php echo(""); ?>' alt="">                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>                                        </a>                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">                                            <button type="button" tabindex="0" class="dropdown-item">Conta do Usuário</button>                                            <button type="button" tabindex="0" class="dropdown-item">Configurações</button>                                        </div>                                    </div>                                </div>                            </div>                        </div>                    </div>                        </div>            </div>        </div>                   <div class="app-main">                <div class="app-sidebar sidebar-shadow">                    <div class="app-header__logo">                                                <div class="header__pane ml-auto">                            <div>                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">                                    <span class="hamburger-box">                                        <span class="hamburger-inner"></span>                                    </span>                                </button>                            </div>                        </div>                    </div>                    <div class="app-header__mobile-menu">                        <div>                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">                                <span class="hamburger-box">                                    <span class="hamburger-inner"></span>                                </span>                            </button>                        </div>                    </div>                    <div class="app-header__menu">                        <span>                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">                                <span class="btn-icon-wrapper">                                    <i class="fa fa-ellipsis-v fa-w-6"></i>                                </span>                            </button>                        </span>                    </div>    <div class="scrollbar-sidebar">                        <div class="app-sidebar__inner">                            <ul class="vertical-nav-menu">                                <li class="app-sidebar__heading">Painel de Controle</li>                                <li>                                    <a href="index.php" class="">                                        <i class="metismenu-icon pe-7s-user"></i>                                        Controle de Usuários                                    </a>                                </li>                                <li>                                    <a href="cursos.php" class="mm-active">                                        <i class="metismenu-icon pe-7s-video"></i>                                        Controle dos Cursos                                    </a>                                </li>                                <li class="app-sidebar__heading">Ações</li>                                    <li>                                        <a href="../../processando.php?Acao=Sair">                                            <i class="metismenu-icon pe-7s-close"></i>Sair                                        </a>                                    </li>                            </ul>                        </div>                    </div>                </div>    <div class="app-main__outer">                    <div class="app-main__inner">                        <section class="contact-page pb-0" id="contact">        <div class="container">            <h2>Progresso do Formulário</h2>            <div class="mb-3 progress">                <div class="progress-bar progress-bar-animated bg-auxilium progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>            </div>            <div class="row">                <div class="col-lg-12">                    <div class="contact-form-warp">                                                <div class="section-title text-white text-center">                            <h2><?php echo($Titulo)?> Nível</h2>                        </div>                        <form class="contact-form" action="../../processando.php" method="post" enctype="multipart/form-data">                            <input type="hidden" name="Nivel" value='true' required>                            <input type="hidden" name="Acao" value='<?php echo($Acao);?>' required>                            <input type="hidden" name="IDNivel" value='<?php echo($IDNivel);?>' required>                            <input type="text" name="nivel" placeholder="Adicione o nível do Curso" value='<?php echo($TituloNivel); ?>' required>                            <a href="cursos.php" class="site-btn">Voltar</a>                            <button class="site-btn"><?php echo($Titulo);?></button>                        </form>                    </div>                </div>            </div>        </div>    </section>                                               <div class="app-wrapper-footer">                        <div class="app-footer">                            <div class="app-footer__inner">                                <div class="app-footer-left">                                    <ul class="nav">                                        <li class="nav-item">                                            <a href="javascript:void(0);" class="nav-link" style="color: #fff">                                               Copyright &copy | Alguns os Direitos Reservados                                            </a>                                        </li>                                    </ul>                                </div>                                <div class="app-footer-right">                                    <ul class="nav">                                        <li class="nav-item">                                            <a href="javascript:void(0);" class="nav-link" style="color: #fff">                                                Auxilium                                            </a>                                        </li>                                    </ul>                                </div>                            </div>                        </div>                    </div>    </div>        </div>    </div>    <script type='text/javascript' src='../../../javascript/main-dashboard.js'></script> <script>$(document).ready(function(){    var i=1;    $('#add').click(function(){        i++;        $('#dynamic_field').append('<div id="row'+i+'"><input type="text1" name="modulo'+i+'" placeholder="Título do Módulo '+i+'" class="complemento" /><input type="text1" name="desc_modulo'+i+'" placeholder="Descrição do Módulo '+i+'" class="complemento" /><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div>');    });        $(document).on('click', '.btn_remove', function(){        var button_id = $(this).attr("id");         $('#row'+button_id+'').remove();    });    var r=1;    $('#add1').click(function(){        r++;        $('#dynamic_field1').append('<div id="rowe'+r+'"><input type="file" name="aula'+r+'" placeholder="Aula '+r+'" class="complemento" /><input type="text1" name="titulo_aula'+r+'" placeholder="Titulo da Aula '+r+'" class="complemento" /><button type="button" name="remove" id="'+r+'" class="btn btn-danger btn_remove1">X</button><input type="text" name="desc_aula'+r+'" placeholder="Descrição da Aula '+r+'" class="endereco" /></div>');    });        $(document).on('click', '.btn_remove1', function(){        var button_id = $(this).attr("id");         $('#rowe'+button_id+'').remove();    });});</script></body></html>