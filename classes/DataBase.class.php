<?php

class DataBase{
    
    private $Servidor = 'localhost';
    private $DB = 'auxiliumdb';
    private $Usuario = 'root';
    private $Senha = '';
    private $PDO = NULL;
    
    /* Funções do Sistema */
    
    public function Conexao(){
        
        $this->PDO = new PDO("mysql:host={$this->Servidor};dbname={$this->DB}", $this->Usuario, $this->Senha);
        
        if($this->PDO){
            
            return true;
            
        }
        
        else{
            
            $this->Erro("Erro de Conexão! Por favor, verifique com o administrador da rede.");
            
        }
        
    }
    
    public function Desconexao(){
        
        $this->PDO = NULL;
        
    }
    
    
    /* Funções dos Usuários */
    
    public function Cadastrar($Nome, $Email, $Senha, $Imagem, $CEP, $Endereco, $NumResidencia, $Complemento, $Rank){
        
        if($this->Conexao() == true){
            
            $SQL = "INSERT INTO USUARIO (NOME_USUARIO, EMAIL_USUARIO, SENHA_USUARIO, IMAGEM_USUARIO, CEP_USUARIO, ENDERECO_USUARIO, NUMRESIDENCIA_USUARIO, COMPLEMENTO_USUARIO, RANK_USUARIO) VALUES (:Nome, :Email, :Senha, :Imagem, :CEP, :Endereco, :Residencia, :Complemento, :Rank)";
            
            $Processo = $this->PDO->prepare($SQL);
            $Processo->bindParam(":Nome", $Nome, PDO::PARAM_STR);
            $Processo->bindParam(':Email', $Email, PDO::PARAM_STR);
            $Processo->bindParam(':Senha', $Senha, PDO::PARAM_STR);
            $Processo->bindParam(':Imagem', $Imagem, PDO::PARAM_STR);
            $Processo->bindParam(':CEP', $CEP, PDO::PARAM_STR);
            $Processo->bindParam(':Endereco', $Endereco, PDO::PARAM_STR);
            $Processo->bindParam(':Residencia', $NumResidencia, PDO::PARAM_STR);
            $Processo->bindParam(':Complemento', $Complemento, PDO::PARAM_STR);
            $Processo->bindParam(':Rank', $Rank, PDO::PARAM_INT);
            
            try{
                
                $Processo->execute();
                
            }catch (Exception $ex){
                
                $this->Erro($ex->getMessage());
                
            }finally{
                
                $this->Desconexao();
                echo("<script>alert('Cadastrado com sucesso');</script>");
                die(header("Refresh: 0.11;url=index.php"));
                
            }
            
        }
        
    }
    
    public function Login($Email,$Senha){
        
        if($this->Conexao()){
            
            $SQL = "SELECT NOME_USUARIO, EMAIL_USUARIO, IMAGEM_USUARIO, CEP_USUARIO, ENDERECO_USUARIO, NUMRESIDENCIA_USUARIO, COMPLEMENTO_USUARIO, RANK_USUARIO FROM USUARIO WHERE EMAIL_USUARIO = :Email AND SENHA_USUARIO = :Senha";
            
            $Processo = $this->PDO->prepare($SQL);
            $Processo->bindParam(":Email", $Email, PDO::PARAM_STR);
            $Processo->bindParam(':Senha', $Senha, PDO::PARAM_STR);
            
            try{
                
                $Processo->execute();
                $Dados = $Processo->fetch(PDO::FETCH_ASSOC);
                
                if($Dados == NULL){
                    
                    $this->Erro("Login e/ou Senha incorretos");
                    die(header("Refresh: 0.11;url=./index.php"));
                    
                }
                
                
            }catch (Exception $ex){
                
                $this->Erro($ex->getMessage());
                
            }finally{
                
                $this->Desconexao();
                echo("<script>alert('Logado com sucesso!');</script>");
                $this->Sessao($Dados);
                die(header("Refresh: 0.11;url=../index.php"));
                
            }
            
        }
        
    }
    
    public function ProcuraEmail($Email){
        
        if($this->Conexao()){
            
            $SQL = "SELECT EMAIL_USUARIO FROM USUARIO WHERE EMAIL_USUARIO = :Email";
            
            $Processo = $this->PDO->prepare($SQL);
            $Processo->bindParam(":Email", $Email, PDO::PARAM_STR);
            
            try{
                
                $Processo->execute();
                $Dados = $Processo->fetch(PDO::FETCH_ASSOC);
                
                if($Dados == NULL){
                    
                    $this->Erro("Informe um email não cadastrado");
                    
                }
                
                
            }finally{
                
                return true;
                
            }
            
        }
        
    }
    
    
    /* Funções de Validação */
    
    public function ValidaNome($Nome){
        
        $Nome = htmlspecialchars_decode($Nome);
        
        if($Nome == NULL || $Nome == '' || strlen($Nome) > 60){
            
            $this->Erro("Nome inválido");
            die(header("Refresh: 0.11;url=cadastro.php"));
            
        }
        
        return $Nome;
        
    }
    
    public function ValidaEmail($Email, $ConfEmail){
        
        $Email = htmlspecialchars_decode($Email);
        $ConfEmail = htmlspecialchars_decode($ConfEmail);
        
        if($Email == NULL || $Email == '' || strlen($Email) > 100){
            
            $this->Erro("Email inválido");
            die(header("Refresh: 0.11;url=cadastro.php"));
            
        }else{
            
            if($Email != $ConfEmail){
                
                $this->Erro("Emails não batem");
                die(header("Refresh: 0.11;url=cadastro.php"));
                
            }
            
            
            
        }
        
        return $Email;
        
    }
    
    public function ValidaSenha($Senha, $ConfSenha){
        
        $Senha = htmlspecialchars_decode($Senha);
        $ConfSenha = htmlspecialchars_decode($ConfSenha);
        
        if($Senha == NULL || $Senha == '' || strlen($Senha) > 50){
            
            $this->Erro('Senha inválida');
            die(header("Refresh: 0.11;url=cadastro.php"));
            
        }else{
            
            if($Senha != $ConfSenha){
                
                $this->Erro("Senhas não batem");
                die(header("Refresh: 0.11;url=cadastro.php"));
                
            }
            
        }
        
        return md5($Senha);
        
    }
    
    public function ValidaCEP($CEP){
        
        $CEP = htmlspecialchars_decode($CEP);
        
        $CEP = str_replace("-", "", $CEP);
        
        if($CEP == NULL || $CEP == "" || strlen($CEP) != 8){
            
            $this->Erro('CEP inválido');
            die(header("Refresh: 0.11;url=cadastro.php"));
            
        }
        
        $CEP = substr_replace($CEP, "-", 5, 0);
        return $CEP;
        
    }
    
    public function ValidaEndereco($Endereco){
        
        $Endereco = htmlspecialchars_decode($Endereco);
        
        if($Endereco == NULL || $Endereco == '' || strlen($Endereco) > 150){
            
            $this->Erro("Endereço inválido");
            die(header("Refresh: 0.11;url=cadastro.php"));
            
        }
        
        return $Endereco;
        
    }
    
    public function ValidaResidencia($NumResidencia){
        
        $NumResidencia = htmlspecialchars_decode($NumResidencia);
        
        if($NumResidencia == NULL || $NumResidencia == '' || strlen($NumResidencia) > 10){
            
            $this->Erro("Número da Residência inválido");
            die(header("Refresh: 0.11;url=cadastro.php"));
            
        }
        
        return $NumResidencia;
        
    }
    
    public function ValidaImagem($Imagem, $Extensao){
        
        list($Altura, $Largura) = getimagesize($Imagem);
        
        if($Altura == "" || $Largura == ""){
            
            $this->Erro("Imagem inválida");
            die(header("Refresh: 0.11;url=cadastro.php"));
            
        }
        
        $Extensoes = array(
            
            'image/gif',
            'image/jpeg',
            'image/jpg',
            'image/png',
            'image/tiff',
            'image/tif',
            'image/bmp'
            
        );
        
        if (!in_array($Extensao, $Extensoes)){
            
            $this->Erro("Extensão da Imagem inválida");
            die(header("Refresh: 0.11;url=cadastro.php"));
            
        }
        
    }
    
    public function Erro($Problema){
        
        echo("<script>alert('Erro: {$Problema}')</script>");
        
    }
    
    public function Sessao($Dados){
        
        session_start();
        
        $_SESSION['nome'] = $Dados['NOME_USUARIO'];
        $_SESSION['email'] = $Dados['EMAIL_USUARIO'];
        $_SESSION['imagem'] = $Dados['IMAGEM_USUARIO'];
        $_SESSION['cep'] = $Dados['CEP_USUARIO'];
        $_SESSION['endereco'] = $Dados['ENDERECO_USUARIO'];
        $_SESSION['numresidencia'] = $Dados['NUMRESIDENCIA_USUARIO'];
        $_SESSION['complemento'] = $Dados['COMPLEMENTO_USUARIO'];
        $_SESSION['rank'] = $Dados['RANK_USUARIO'];
        
    }
    
}