<?php

include_once '../classes/DataBase.class.php';
echo("<link rel='shortcut icon' href='../img/favicon.ico' />");

session_start();

$BD = new DataBase;
$Acao = "Cadastro";


if(isset($_REQUEST['Acao'])){
    
    $Acao = $_REQUEST['Acao'];
    
}

if(isset($_REQUEST['ID'])){
    
    $IDCurso = $_REQUEST['ID'];
    
}


if(isset($_REQUEST['Curso'])){
    
    $Titulo = $BD->ValidaTitulo(htmlspecialchars($_REQUEST['Titulo']), ENT_QUOTES, 'UTF-8');
    $Descricao = $BD->ValidaDescricao(htmlspecialchars($_REQUEST['Descricao']), ENT_QUOTES, 'UTF-8');
    $TempoEstimado = $BD->ValidaTempoEstimado(htmlspecialchars($_REQUEST['TempoEstimado']), ENT_QUOTES, 'UTF-8');
        
    if($_FILES['Imagem']['name'] != "" && $Acao != "Excluir"){
        
        $Imagem = file_get_contents($_FILES['Imagem']['tmp_name']);
        
    }elseif($Acao == 'Alterar' && $_FILES['Imagem']['name'] == ""){
        
        $Imagem = "N/A";
        
    }else{
        
        $Imagem = file_get_contents("../img/logo_maos.png");
        die("Deu errado");
        
    }
    
    if($Acao == "Cadastro"){
        
        $Resposta = $BD->CadastrarCurso($_SESSION['id'], $Titulo, $Descricao, $TempoEstimado, $Imagem);
        
        if($Resposta != NULL){
            
            return $Resposta;
            
        }
        
    }elseif($Acao == "Alterar"){
        
        $BD->AlterarCurso($IDCurso, $Titulo, $Descricao, $TempoEstimado, $Imagem);
        
    }elseif($Acao == "Excluir"){
        
        $BD->ExcluirCurso($IDCurso);
        
    }else{
        
        return 'Algo deu errado! Contate o administrador ou tente novamente!';
        
    }
    
}else{

    if($Acao == "Login"){
        
        $Email = $_REQUEST['Email'];
        $Senha = $_REQUEST['Senha'];
        
        if($_SESSION != NULL){
            
            $BD->Erro("Já Logado!");
            die(header("Refresh: 0.1;url=../index.php"));
            
        }
        
        $BD->Login($Email, md5($Senha));
        
    }elseif($Acao == "Sair"){
        
        $BD->Sair();
        
    }
    
    $Rank = 0;
    $Nome = "";
    $Apelido = "";
    $Email = "";
    $Senha = "";
    $CEP = "";
    $Endereco = "";
    $Bairro = "";
    $Cidade = "";
    $Estado = "";
    $NumResidencia = "";
    
    $Nome = $BD->ValidaNome(htmlspecialchars($_REQUEST['Nome']), ENT_QUOTES, 'UTF-8');
    $Apelido = $BD->ValidaNome(htmlspecialchars($_REQUEST['Apelido']), ENT_QUOTES, 'UTF-8');
    $Email = $BD->ValidaEmail(htmlspecialchars($_REQUEST['Email'], ENT_QUOTES, 'UTF-8'), htmlspecialchars($_REQUEST['ConfEmail']), ENT_QUOTES, 'UTF-8');
    $CEP = $BD->ValidaCEP(htmlspecialchars($_REQUEST['CEP']), ENT_QUOTES, 'UTF-8');
    $Endereco = $BD->ValidaEndereco(htmlspecialchars($_REQUEST['Endereco']), ENT_QUOTES, 'UTF-8');
    $Bairro = $_REQUEST['bairro'];
    $Cidade = $_REQUEST['cidade'];
    $Estado = $_REQUEST['uf'];
    $NumResidencia = $BD->ValidaResidencia(htmlspecialchars($_REQUEST['NumResidencia']), ENT_QUOTES, 'UTF-8');
    
    if(isset($_REQUEST['Senha'])){
        
        $Senha = $BD->ValidaSenha(htmlspecialchars($_REQUEST['Senha'], ENT_QUOTES, 'UTF-8'), htmlspecialchars($_REQUEST['ConfSenha']), ENT_QUOTES, 'UTF-8');
        
    }

    if($_FILES['Imagem']['name'] != ""){
        
        $Imagem = file_get_contents($_FILES['Imagem']['tmp_name']);
        
    }elseif($Acao == 'Alterar' && $_FILES['Imagem']['name'] == ""){
        
        $Imagem = "N/A";
        
    }else{
        
        $Imagem = file_get_contents("../img/logo_maos.png");
        
    }
    
    if(isset($_REQUEST['Complemento'])){
        
        $Complemento = $_REQUEST['Complemento'];
        
    }
    
    if(isset($_REQUEST['Rank'])){
        
        $Rank = $_REQUEST['Rank'];
        
    }
    
    if($Acao == "Cadastro"){
		
        $Resposta = $BD->CadastrarUsuario($Nome, $Apelido, $Email, $Senha, $Imagem, $CEP, $Endereco, $Bairro, $Cidade, $Estado, $NumResidencia, $Complemento, $Rank);
        
        if($Resposta != NULL){
            
            return $Resposta;
            
        }
        
    }elseif($Acao == "Alterar"){
        
        $IDUsuario = $_REQUEST['IDUsuario'];
        $BD->AlterarUsuario($IDUsuario, $Nome, $Apelido, $Email, $Imagem, $CEP, $Endereco, $Bairro, $Cidade, $Estado, $NumResidencia, $Complemento, $Rank);
        
    }elseif($Acao == "Excluir"){
        
        $IDUsuario = $_REQUEST['IDUsuario'];
        $BD->ExcluirUsuario($IDUsuario);
        
    }else{
        
        return 'Algo deu errado! Contate o administrador ou tente novamente!';
        
    }

}

?>