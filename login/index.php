<?php
session_start();
if($_SESSION != NULL){
    
    include_once '../classes/DataBase.class.php';
    
    $DB = new DataBase();
    
    $DB->Erro("Já Logado!");
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
    <title>Auxilium | Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
</head>

<body style="background-image: url(./7.jpg);">

    <section class="contact-page spad pb-0" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form-warp">
                        <div class="site-logo" style="margin-top: -10px;">
                        <img src="./img/logo.svg" width="70px" height="70px" style="margin-top: -20px;">
                        <a href="" style="font-family: Lobster; font-size: 3em; color: #fff;">Auxilium</a>
                    </div>
                        <div class="section-title text-white text-center">
                            <h2>Login</h2>
                        </div>
                        <form class="contact-form" action='processando.php' method='post'>
                        	<input type='hidden' name='Acao' value='Login'>
                            <input type="text" name="Email" placeholder="Seu Email">
                            <input type="password" name="Senha" placeholder="Sua Senha">
                            <a href="recuperar.php">Esqueceu a senha?</a><br><br>
                            <a href="cadastro.php" class="site-btn">Cadastre-se</a>
                            <button class="site-btn">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>      
    </section>
</body>

</html>