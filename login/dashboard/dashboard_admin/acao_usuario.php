<?phpinclude_once "../../../classes/DataBase.class.php";session_start();$BD = new DataBase();if($_SESSION == NULL){        $BD->Erro("Não Logado!");    die(header("Refresh: 0.11;url=/Auxilium/index.php"));    }include_once "../../../classes/DataBase.class.php";$Nome = "";$Apelido = "";$Email = "";$Imagem = base64_encode($_SESSION['imagem']);$CEP = "";$Endereco = "";$Bairro = "";$Cidade = "";$Estado = "";$NumResidencia = "";$Complemento = "";if(isset($_REQUEST['Acao'])){        $Acao = $_REQUEST['Acao'];    $ID = $_POST['Campo'];        $Dados = $BD->BuscaUsuario($ID);        $Nome = $Dados['NOME_USUARIO'];    $Apelido = $Dados['APELIDO_USUARIO'];    $Email = $Dados['EMAIL_USUARIO'];    $CEP = $Dados['CEP_USUARIO'];    $Endereco = $Dados['ENDERECO_USUARIO'];    $Bairro = $Dados['BAIRRO_USUARIO'];    $Cidade = $Dados['CIDADE_USUARIO'];    $Estado = $Dados['ESTADO_USUARIO'];    $NumResidencia = $Dados['NUMRESIDENCIA_USUARIO'];    $Complemento = $Dados['COMPLEMENTO_USUARIO'];    $Rank = $Dados['RANK_USUARIO'];    }else{        $Acao = "Cadastro";    }switch($Acao){        case "Cadastro":        $Titulo = "Cadastro";        break;    case "Alterar":        $Titulo = "Alterar";        break;    case "Excluir":        $Titulo = "Excluir";        break;        }?><!doctype html><html lang="pt-BR"><head>    <meta charset="utf-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta http-equiv="Content-Language" content="pt-BR">    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>    <link rel="shortcut icon" href="../../../img/favicon.ico" />    <title>Auxilium Admin | <?php echo("$Titulo");?> Usuario</title>    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />    <meta name="msapplication-tap-highlight" content="no">    <link href="../../../css/main.css" rel="stylesheet">    <link href="../../../css/style.css" rel="stylesheet">    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>        <!-- Adicionando JQuery -->    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>    <!-- Adicionando Javascript -->    <script type="text/javascript" >        $(document).ready(function() {            function limpa_formulario_cep() {                // Limpa valores do formulário de cep.                $("#rua").val("");                $("#bairro").val("");                $("#cidade").val("");                $("#uf").val("");                $("#ibge").val("");            }                        //Quando o campo cep perde o foco.            $("#cep").blur(function() {                //Nova variável "cep" somente com dígitos.                var cep = $(this).val().replace(/\D/g, '');                //Verifica se campo cep possui valor informado.                if (cep != "") {                    //Expressão regular para validar o CEP.                    var validacep = /^[0-9]{8}$/;                    //Valida o formato do CEP.                    if(validacep.test(cep)) {                        //Preenche os campos com "..." enquanto consulta webservice.                        $("#rua").val("...");                        $("#bairro").val("...");                        $("#cidade").val("...");                        $("#uf").val("...");                        $("#ibge").val("...");                        //Consulta o webservice viacep.com.br/                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {                            if (!("erro" in dados)) {                                //Atualiza os campos com os valores da consulta.                                $("#rua").val(dados.logradouro);                                $("#bairro").val(dados.bairro);                                $("#cidade").val(dados.localidade);                                $("#uf").val(dados.uf);                                $("#ibge").val(dados.ibge);                            } //end if.                            else {                                //CEP pesquisado não foi encontrado.                                limpa_formulario_cep();                                alert("CEP não encontrado.");                            }                        });                    } //end if.                    else {                        //cep é inválido.                        limpa_formulario_cep();                        alert("Formato de CEP inválido.");                    }                } //end if.                else {                    //cep sem valor, limpa formulário.                    limpa_formulario_cep();                }            });        });    </script></head><body>    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">        <div class="app-header header-shadow">            <div class="app-header__logo">                <div class='site-logo logo-src' style='margin-top: 0px'>                        <img src='../../../img/logo.svg' width='70px' height='70px' style='margin-top: -20px'>                        <a href="../../../index.php" style='font-family: Lobster; font-size: 2.5em; color: #ff712e'>Auxilium</a>                    </div>                <div class="header__pane ml-auto">                    <div>                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">                            <span class="hamburger-box">                                <span class="hamburger-inner"></span>                            </span>                        </button>                    </div>                </div>            </div>            <div class="app-header__mobile-menu">                <div>                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">                        <span class="hamburger-box">                            <span class="hamburger-inner"></span>                        </span>                    </button>                </div>            </div>            <div class="app-header__menu">                <span>                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">                        <span class="btn-icon-wrapper">                            <i class="fa fa-ellipsis-v fa-w-6"></i>                        </span>                    </button>                </span>            </div>    <div class="app-header__content">                                <div class="app-header-right">                    <div class="header-btn-lg pr-0">                        <div class="widget-content p-0">                            <div class="widget-content-wrapper">                                <div class="widget-content-left">                                    <div class="btn-group">                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">                                            <img width="42" height='42' style='margin-left: 800px' class="rounded-circle" src='data:image/jpeg;base64,<?php echo $Imagem; ?>' alt="">                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>                                        </a>                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">                                            <button type="button" tabindex="0" class="dropdown-item">Conta do Usuário</button>                                            <button type="button" tabindex="0" class="dropdown-item">Configurações</button>                                        </div>                                    </div>                                </div>                            </div>                        </div>                    </div>                        </div>            </div>        </div>                   <div class="app-main">                <div class="app-sidebar sidebar-shadow">                    <div class="app-header__logo">                                                <div class="header__pane ml-auto">                            <div>                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">                                    <span class="hamburger-box">                                        <span class="hamburger-inner"></span>                                    </span>                                </button>                            </div>                        </div>                    </div>                    <div class="app-header__mobile-menu">                        <div>                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">                                <span class="hamburger-box">                                    <span class="hamburger-inner"></span>                                </span>                            </button>                        </div>                    </div>                    <div class="app-header__menu">                        <span>                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">                                <span class="btn-icon-wrapper">                                    <i class="fa fa-ellipsis-v fa-w-6"></i>                                </span>                            </button>                        </span>                    </div>    <div class="scrollbar-sidebar">                        <div class="app-sidebar__inner">                            <ul class="vertical-nav-menu">                                <li class="app-sidebar__heading">Painel de Controle</li>                                <li>                                    <a href="index.php" class="mm-active">                                        <i class="metismenu-icon pe-7s-user"></i>                                        Controle de Usuários                                    </a>                                </li>                                <li>                                    <a href="cursos.php" class="">                                        <i class="metismenu-icon pe-7s-video"></i>                                        Controle dos Cursos                                    </a>                                </li>                                <li class="app-sidebar__heading">Ações</li>                                    <li>                                        <a href="../../processando.php?Acao=Sair">                                            <i class="metismenu-icon pe-7s-close"></i>Sair                                        </a>                                    </li>                            </ul>                        </div>                    </div>                </div>    <div class="app-main__outer">                    <div class="app-main__inner">                        <section class="contact-page pb-0" id="contact">        <div class="container">            <div class="row">                <div class="col-lg-12">                    <div class="contact-form-warp">                                                <div class="section-title text-white text-center">                            <h2><?php echo($Titulo); ?> Usuário</h2>                        </div>                        <form class="contact-form" action="../../processando.php" method="post" enctype="multipart/form-data">                            <input type='hidden' name='Acao' value='<?php echo($Acao); ?>'>                            <input type='hidden' name='IDUsuario' value='<?php echo($ID); ?>'>                            <input type="text" name="Nome" placeholder="Seu Nome Completo" value='<?php echo($Nome);?>' required>                            <input type="text" name="Apelido" placeholder="Seu Apelido" value='<?php echo($Apelido);?>' required>                            <input type="email" name="Email" placeholder="Seu Email" value='<?php echo($Email);?>' required>							<input type="email" name="ConfEmail" placeholder="Confirme seu Email" value='<?php echo($Email);?>' required>							                            <?php                                                             if($Acao == "Cadastro"){                                                                echo("                                    <input type='password' name='Senha' placeholder='Sua Senha' value='' required>                                    <input type='password' name='ConfSenha' placeholder='Confirme sua Senha' value='' required>                                ");                                                        }                                                        if($Acao != "Excluir"){                                                                echo("<input type='file' name='Imagem' value='Enviar Imagem'><br>");                                                            }                                                        ?>                                                                                    <input type="text" class="endereco" name="CEP" id="cep" placeholder="CEP" maxlength="9" value='<?php echo($CEP);?>' required>                            <input type="text" class="endereco" name="Endereco" id="rua" placeholder="Endereço" value='<?php echo($Endereco);?>' required><br>                            <input type="text" class="endereco" name="bairro" placeholder="Bairro" id="bairro" value='<?php echo($Bairro);?>' required>                            <input type="text" class="endereco" name="cidade" placeholder="Cidade" id="cidade" value='<?php echo($Cidade);?>' required>                            <input type="text" class="endereco" name="uf" id="uf" placeholder="Estado" value='<?php echo($Estado);?>' required><br>                            <input type="number" name="NumResidencia" placeholder="Nº Residencia" value='<?php echo($NumResidencia);?>' required>                            <input type="text1" class="complemento" name="Complemento" placeholder="Complemento" value='<?php echo($Complemento);?>' ><br>                            <select class="endereco" name="Rank">                                                        	<?php                             	                            	                            	if($Rank == 0){                            	                                    	echo("                                        	<option value='0' selected>Normal</option>                                    	<option value='1'>Administrador</option>                                    	");                                	                            	}elseif($Rank == 1){                            	                                	    echo("                            	                                            	<option value='0'>Normal</option>                                    	<option value='1' selected>Administrador</option>                            	                                        	");                            	                                	}                            	?>                                                            </select>                            <br>                            <a href="index.php" class="site-btn">Voltar</a>                            <button class="site-btn"><?php echo($Titulo); ?></button>                        </form>                    </div>                </div>            </div>        </div>    </section>                                               <div class="app-wrapper-footer">                        <div class="app-footer">                            <div class="app-footer__inner">                                <div class="app-footer-left">                                    <ul class="nav">                                        <li class="nav-item">                                            <a href="javascript:void(0);" class="nav-link" style="color: #fff">                                               Copyright &copy | Alguns os Direitos Reservados                                            </a>                                        </li>                                    </ul>                                </div>                                <div class="app-footer-right">                                    <ul class="nav">                                        <li class="nav-item">                                            <a href="javascript:void(0);" class="nav-link" style="color: #fff">                                                Auxilium                                            </a>                                        </li>                                    </ul>                                </div>                            </div>                        </div>                    </div>    </div>        </div>    </div>    <script type='text/javascript' src='../../../javascript/main-dashboard.js'></script></body></html>