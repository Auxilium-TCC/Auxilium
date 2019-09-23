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

    <!doctype html>
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
    <link href='../../../css/main.css' rel='stylesheet'></head>
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
                                    <a href='configuracoes.php' class='mm-active'>
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
                                    <a href='webchamada.php' class=''>
                                        <i class='metismenu-icon pe-7s-chat'></i>
                                        Web Chamada
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
                            <div class='app-page-title'>
                                <div class='page-title-wrapper'>
                                    <div class='page-title-heading'>
                                        <div class='page-title-icon-user'>
											<img width='170px' height='170px' src='data:image/jpeg;base64,<?php echo($Imagem); ?>' alt="">
                                        </div>
                                        <div style='margin-left: 100px;'><?php echo($Dados['NOME_USUARIO']); ?></div>
                                    </div>
                                    <div class='page-title-actions'>
                                        <div class='d-inline-block'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                             <div class='main-card mb-3 card'>
                             <?php 
                                
                                
                             
                             
                             ?>
                                        <div class='card-body'><h5 class='card-title'>Informações</h5>
                                            <form class='' action='../../processando.php' method='post' enctype="multipart/form-data">
                                            <div class='position-relative form-group'><label for='exampleEmail11' class=''></label><input name='Imagem' type='file' class='form-control'></div>
                                            <input type='hidden' name='IDUsuario' value='<?php echo($_SESSION['id']); ?>'>
											<input type='hidden' name='ConfEmail' value='<?php echo($Dados['EMAIL_USUARIO']); ?>'>
                                            <input type='hidden' name='Nome' value='<?php echo($Dados['NOME_USUARIO']); ?>'>
                                                <div class='form-row'>
                                                    <div class='col-md-6'>
                                                        <div class='position-relative form-group'><label for='exampleEmail11' class=''>Email</label><input name='Email' id='exampleEmail11' placeholder='seunome@provedor.com' type='email' class='form-control' value='<?php echo $Dados['EMAIL_USUARIO']?> '></div>
                                                    </div>
                                                    <div class='col-md-6'>
                                                        <div class='position-relative form-group'><label for='' class=''>Apelido</label><input name='Apelido' id='' placeholder='Seu Apelido' type='text' class='form-control' value='<?php echo($Dados['APELIDO_USUARIO']);?>'></div>
                                                    </div>
                                                </div>
                                                <div class='position-relative form-group'><label for='exampleAddress' class=''>Endereço</label><input name='Endereco' id='exampleAddress' placeholder='Av. Cruzeiro do Sul' type='text' class='form-control' value='<?php echo $Dados['ENDERECO_USUARIO']?>'></div>
                                                <div class='position-relative form-group'><label for='exampleAddress2' class=''>Bairro</label><input name='bairro' id='exampleAddress2' placeholder='Alto da Lapa' type='text' class='form-control' value='<?php echo $Dados['BAIRRO_USUARIO']?>'>
                                                <div class='position-relative form-group'><label for='exampleAddress2' class=''>Cidade</label><input name='cidade' id='exampleAddress2' placeholder='São Paulo' type='text' class='form-control' value='<?php echo $Dados['CIDADE_USUARIO']?>'>
                                                <div class='position-relative form-group'><label for='exampleAddress2' class=''>Estado</label><input name='uf' id='exampleAddress2' placeholder='SP' type='text' class='form-control' value='<?php echo $Dados['ESTADO_USUARIO']?>'>
                                                <div class='position-relative form-group'><label for='exampleAddress2' class=''>Complemento</label><input name='Complemento' id='exampleAddress2' placeholder='Casa, Apartamento, Escola' type='text' class='form-control' value='<?php echo $Dados['COMPLEMENTO_USUARIO']?>'>
                                                </div>
                                                <div class='form-row'>
                                                    <div class='col-md-6'>
                                                        <div class='position-relative form-group'><label for='exampleCity' class=''>Número da Residência</label><input name='NumResidencia' id='examplecity' type='text' class='form-control' placeholder='Ex.: 371' value='<?php echo $Dados['NUMRESIDENCIA_USUARIO']?>'></div>
                                                    </div>
                                                    <div class='col-md-2'>
                                                        <div class='position-relative form-group'><label for='exampleZip' class=''>CEP</label><input name='CEP' id='exampleZip' type='text' class='form-control' maxlength='9'placeholder='12345-678' value='<?php echo $Dados['CEP_USUARIO']?>'></div>
                                                    </div>
                                                </div>
                                                <input type='submit' name='Acao' value='Alterar' class='mt-2 btn btn-primary'>
                                            </form>
                                        </div>
                                    </div>
                                    
                                    
                            <input type='submit' class='mb-2 mr-2 btn btn-lg btn-block' name='Acao' style="background-color: #ff0000; color: #fff;" value='Excluir'>
                                            
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
                    
    <script type='text/javascript' src='../../../javascript/main-dashboard.js'></script></body>
</html>