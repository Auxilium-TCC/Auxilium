<?php
session_start();
if($_SESSION != NULL && $_SESSION['rank'] == 0){
    
    include_once '../classes/DataBase.class.php';
    
    $BD = new DataBase();
    
    $BD->Erro("J� Logado!");
    die(header("Refresh: 0.11;url=../index.php"));
    
}
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#2bcbbf">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <title>Auxilium | Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
     <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulario_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulario_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulario_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulario_cep();
                }
            });
        });

    </script>
</head>

<body >

    <section class="contact-page pb-0" id="contact" style="background-image: url(../img/7.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form-warp">
                        <div class="site-logo" style="margin-top: -10px;">
                        <img src="../img/logo.svg" width="70px" height="70px" style="margin-top: -20px;">
                        <a href="../index.php" style="font-family: Lobster; font-size: 3em; color: #fff;">Auxilium</a>
                    </div>
                        <div class="section-title text-white text-center">
                            <h2>Cadastro</h2>
                        </div>
                        <form class="contact-form" action="processando.php" method="post" enctype="multipart/form-data">
                        	<input type='hidden' name='Rank' value='0'>
                            <input type="text" name="Nome" placeholder="Seu Nome Completo" required>
                            <input type="text" name="Apelido" placeholder="Seu Apelido" required>
                            <input type="email" name="Email" placeholder="Seu Email" required>
                            <input type="email" name="ConfEmail" placeholder="Confirme seu Email" required>
                            <input type="password" name="Senha" placeholder="Sua Senha" required>
                            <input type="password" name="ConfSenha" placeholder="Confirme sua Senha" required>
                            <input type="file" name="Imagem" value="Enviar Imagem"><br>
                            <input type="text1" class="endereco" name="CEP" id="cep" placeholder="CEP" maxlength="9" required>
                            <input type="text1" class="endereco" name="Endereco" id="rua" placeholder="Endereço" required><br>
                            <input type="text1" class="endereco" name="bairro" placeholder="Bairro" id="bairro" required>
                            <input type="text1" class="endereco" name="cidade" placeholder="Cidade" id="cidade" required>
                            <input type="text1" class="endereco" name="uf" id="uf" placeholder="Estado" required><br>
                            <input type="number" name="NumResidencia" placeholder="Nº Residencia" required>
                            <input type="text1" class="complemento" name="Complemento" placeholder="Complemento"><br>
                            <a href="index.php" class="site-btn">Voltar</a>
                            <button class="site-btn">Cadastrar</button>
                        </form>
            		</div>
            	</div>
        	</div>
        </div>
    </section>
</body>

</html>