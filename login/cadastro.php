<?php
session_start();
if($_SESSION != NULL){
    
    include_once '../classes/DataBase.class.php';
    
    $DB = new DataBase();
    
    $DB->Erro("J� Logado!");
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
    <title>Auxilium | Cadastro</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
</head>

<body style="background-image: url(./7.jpg);">

    <section class="contact-page pb-0" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form-warp">
                        <div class="site-logo" style="margin-top: -10px;">
                        <img src="./img/logo.svg" width="70px" height="70px" style="margin-top: -20px;">
                        <a href="" style="font-family: Lobster; font-size: 3em; color: #fff;">Auxilium</a>
                    </div>
                        <div class="section-title text-white text-center">
                            <h2>Cadastro</h2>
                        </div>
                        <form class="contact-form" action="processando.php" method="post" enctype="multipart/form-data">
                        	<input type='hidden' name='Acao' value='Cadastro'>
                        	<input type='hidden' name='Rank' value='0'>
                            <input type="text" name="Nome" placeholder="Seu Usuário" required>
                            <input type="email" name="Email" placeholder="Seu Email" required>
                            <input type="email" name="ConfEmail" placeholder="Confirme seu Email" required>
                            <input type="password" name="Senha" placeholder="Sua Senha" required>
                            <input type="password" name="ConfSenha" placeholder="Confirme sua Senha" required>
                            <input type="file" name="Imagem" value="Enviar Imagem"><br>
                            <input type="text" name="CEP" placeholder="CEP" required>
                            <input type="text1" class="endereco" name="Endereco" placeholder="Endereço" required><br>
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