<?php

include_once "../../../classes/DataBase.class.php";

session_start();

$DB = new DataBase();
$Imagem = base64_encode($_SESSION['imagem']);

?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="pt-BR">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="../../../img/favicon.ico" />
    <title>Auxilium Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">
    <link href="../../../css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class='site-logo logo-src' style='margin-top: 0px'>
                    <img src='../../../img/logo.svg' width='70px' height='70px' style='margin-top: -20px'>
                    <a href="../../../index.php" style='font-family: Lobster; font-size: 2.5em; color: #ff712e'>Auxilium</a>
                </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
            <div class="app-header__content">
               <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" height='42' style='margin-left: 800px' class="rounded-circle" src='data:image/jpeg;base64,<?php echo $Imagem; ?>' alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">Conta do Usuário</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Configurações</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>       
            <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Painel de Controle</li>
                                <li>
                                    <a href="index.php" class="">
                                        <i class="metismenu-icon pe-7s-user"></i>
                                        Controle de Usuários
                                    </a>
                                </li>
                                <li>
                                    <a href="cursos.php" class="mm-active">
                                        <i class="metismenu-icon pe-7s-video"></i>
                                        Controle dos Cursos
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Ações</li>
                                <li>
                                    <a href="../../processando.php?Acao=Sair">
                                        <i class="metismenu-icon pe-7s-close"></i>Sair
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
										Ações
                                        </button>
                                        <form action='acao_curso.php' method='post'>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <label class="nav-link">
                                                            <i class="nav-link-icon lnr-inbox"></i>
                                                            <span>
                                                                <a href='acao_curso.php'>Cadastrar</a>
                                                            </span>
                                                            <!-- <div class="ml-auto badge badge-pill badge-secondary">86</div> -->
                                                        </label>
                                                    </li>
                                                    <li class="nav-item">
                                                        <label class="nav-link">
                                                            <i class="nav-link-icon lnr-book"></i>
                                                            <span>
                                                                <input type='submit' name='Acao' value='Alterar'></input>
                                                            </span>
                                                        </label>
                                                    </li>
                                                    <li class="nav-item">
                                                        <label class="nav-link">
                                                            <i class="nav-link-icon lnr-picture"></i>
                                                            <span>
                                                                <input type='submit' name='Acao' value='Excluir'></input>
                                                            </span>
                                                            <div class="ml-auto badge badge-pill badge-danger">!</div>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> 
                                </div> 
                            </div> 
						
                        <?php
                            
                            include_once '../../../classes/DataBase.class.php';
                            $BD = new DataBase();		
                            
                            $Inicio = 0;
                            $Limite = 9;
                            $Pagina = 1;
                            
                            if(isset($_REQUEST['pagina'])){
                                
                                $Pagina = $_REQUEST['pagina'];
                                $Inicio = ($Pagina - 1) * $Limite;
                            
                            }
                            
                            $Dados = $BD->BuscaDadosCursos($Inicio,$Limite);
                            $Numero = $BD->ContaCursos();
                            $Niveis = $BD->ContaNiveis('0');
                            $Modulos = $BD->ContaModulos('0');
                            $Total = ceil($Numero/$Limite);
                            
                            echo("
    
                                <p>Temos {$Numero} cursos cadastrados no site.</p>
                                                       
                                    <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
                            
                                        <tr>
    
                                            <td colspan='2' align='center' bgcolor='#202020' class='fonte'></td>
                                            <td colspan='1' align='center' bgcolor='#202020' class='fonte'>ID</td>
                                            <td colspan='1' align='center' bgcolor='#202020' class='fonte'>Título</td>
                                            <td colspan='1' align='center' bgcolor='#202020' class='fonte'>Descrição</td>
                                            <td colspan='1' align='center' bgcolor='#202020' class='fonte'>Tempo Estimado</td>
                                            <td colspan='1' align='center' bgcolor='#202020' class='fonte'>Niveis</td>
                                            <td colspan='1' align='center' bgcolor='#202020' class='fonte'>Modulos</td>
                                            <td colspan='1' align='center' bgcolor='#202020' class='fonte'></td>
                                                                        
                                        </tr>
                                    
                            ");    
                                 
                            foreach($Dados as $Campo){
                               
                                $Imagem = base64_encode($Campo['IMAGEM_CURSO']);
                                
                                echo("
                                
                                    <tr>
        
                                        <td align='center'><input type='radio' name='Campo' value='{$Campo['ID_CURSO']}' required/></td>
                                        <td align='center'><img class='rounded-circle' width='42' height='42' src='data:image/jpeg;base64,{$Imagem}'></img></td>
                                        <td align='center'>{$Campo['ID_CURSO']}</td>
                                        <td align='center'>{$Campo["TITULO_CURSO"]}</td>
                                        <td align='center'>{$Campo["DESCRICAO_CURSO"]}</td>
                                        <td align='center'>{$Campo["TEMPOESTIMADO_CURSO"]} Dia(s)</td>
                                        <td align='center'>{$Niveis}</td>
                                        <td align='center'>{$Modulos}</td>
                                        <td align='center'><a href=''>Visualizar</a></td>
                                            
                                    </tr>
                                
                                ");
                                
                            }
              
                            echo("
                        
                                </table>
                            
                                <div style='text-align:center; margin-top: 30px;'>
                        
                            ");
                            
                            if($Pagina != 1){
                                
                                echo("<a href='index.php?pagina=".($Pagina - 1)."'><< Anterior</a>");
                            
                            }else{
                            
                                echo("<span style='color: #ccc;'> Anterior </span>");
                            
                            }
                            
                            if($Total > 1){
                            
                                for($i=1; $i <= $Total; $i++){
                            
                                    if($Pagina == $i){        
                            
                                        echo("<span class='al'> [".$Pagina."] </span>"); 
                            
                                    }else{        
                                        
                                        echo("<a href='index.php?pagina=".$i."'>&nbsp;".$i."&nbsp;</a>"); 
                            
                            	   }
                            
                                } 
                            
                            } 
                            
                            if($Pagina < $Total){
                            
                                echo ("<a href='index.php?pagina=".($Pagina + 1)."'>Próxima >></a>");
                            
                            }else{
                            
                                echo("<span style='color: #ccc;'> Próxima </span>");
                            
                            }
                            
                            echo("
    
                                        </div>
                                </form>
                                <br><br><br><br>
                            
                            ");
                            
                        ?>
                            					
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                               Copyright &copy | Alguns os Direitos Reservados
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Auxilium
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type='text/javascript' src='../../../javascript/main-dashboard.js'></script></body>
</html>