<?php

include_once '../classes/DataBase.class.php';

$BD = new DataBase;

$Acao = $_REQUEST['Acao'];
$Rank = 0;
$Nome = "";
$Email = "";
$Senha = "";
$CEP = "";
$Endereco = "";
$NumResidencia = "";
$Imagem = NULL;

if($Acao == "Cadastro"){
    
    $Nome = $BD->ValidaNome(htmlspecialchars($_REQUEST['Nome']), ENT_QUOTES, 'UTF-8');
    $Email = $BD->ValidaEmail(htmlspecialchars($_REQUEST['Email'], ENT_QUOTES, 'UTF-8'), htmlspecialchars($_REQUEST['ConfEmail']), ENT_QUOTES, 'UTF-8');
    $Senha = $BD->ValidaSenha(htmlspecialchars($_REQUEST['Senha'], ENT_QUOTES, 'UTF-8'), htmlspecialchars($_REQUEST['ConfSenha']), ENT_QUOTES, 'UTF-8');
    $CEP = $BD->ValidaCEP(htmlspecialchars($_REQUEST['CEP']), ENT_QUOTES, 'UTF-8');
    $Endereco = $BD->ValidaEndereco(htmlspecialchars($_REQUEST['Endereco']), ENT_QUOTES, 'UTF-8');
    $NumResidencia = $BD->ValidaResidencia(htmlspecialchars($_REQUEST['NumResidencia']), ENT_QUOTES, 'UTF-8');

    if(isset($_FILES)){
        
        $BD->ValidaImagem($_FILES['Imagem']['tmp_name'], $_FILES['Imagem']['type']);
        $Imagem = file_get_contents($_FILES['Imagem']['tmp_name']);
            
    }    
        
    if(isset($_REQUEST['Complemento'])){
            
        $Complemento = $_REQUEST['Complemento'];
            
    }
        
    $Resposta = $BD->Cadastrar($Nome, $Email, $Senha, $Imagem, $CEP, $Endereco, $NumResidencia, $Complemento, $Rank);
    
    if($Resposta != NULL){
        
        return $Resposta;
        
    }

}elseif($Acao == "Login"){
        
    $Email = $_REQUEST['Email'];
    $Senha = $_REQUEST['Senha'];

    $BD->Login($Email, md5($Senha));

}elseif($Acao == "Sair"){
    session_start();
    session_destroy();
    $_SESSION = NULL;
    echo("<script>alert('Deslogado com sucesso!')</script>");
    die(header("Refresh: 0.11;url=../index.php"));
    
}else{
    
    return 'Alguma coisa deu errado! Contate o administrador ou tente novamente!';
    
}

?>