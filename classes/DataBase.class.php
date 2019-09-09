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
    
    public function CadastrarUsuario($Nome, $Apelido, $Email, $Senha, $Imagem, $CEP, $Endereco, $Bairro, $Cidade, $Estado, $NumResidencia, $Complemento, $Rank){
        
        if($this->Conexao() == true){
            
            $SQL = "INSERT INTO USUARIO (NOME_USUARIO, APELIDO_USUARIO, EMAIL_USUARIO, SENHA_USUARIO, IMAGEM_USUARIO, CEP_USUARIO, ENDERECO_USUARIO, BAIRRO_USUARIO, CIDADE_USUARIO, ESTADO_USUARIO, NUMRESIDENCIA_USUARIO, COMPLEMENTO_USUARIO, RANK_USUARIO) VALUES (:Nome, :Apelido, :Email, :Senha, :Imagem, :CEP, :Endereco, :Bairro, :Cidade, :Estado, :Residencia, :Complemento, :Rank)";
            
            $Processo = $this->PDO->prepare($SQL);
            $Processo->bindParam(":Nome", $Nome, PDO::PARAM_STR);
            $Processo->bindParam(":Apelido", $Apelido, PDO::PARAM_STR);
            $Processo->bindParam(':Email', $Email, PDO::PARAM_STR);
            $Processo->bindParam(':Senha', $Senha, PDO::PARAM_STR);
            $Processo->bindParam(':Imagem', $Imagem, PDO::PARAM_STR);
            $Processo->bindParam(':CEP', $CEP, PDO::PARAM_STR);
            $Processo->bindParam(':Endereco', $Endereco, PDO::PARAM_STR);
            $Processo->bindParam(':Bairro', $Bairro, PDO::PARAM_STR);
            $Processo->bindParam(':Cidade', $Cidade, PDO::PARAM_STR);
            $Processo->bindParam(':Estado', $Estado, PDO::PARAM_STR);
            $Processo->bindParam(':Residencia', $NumResidencia, PDO::PARAM_STR);
            $Processo->bindParam(':Complemento', $Complemento, PDO::PARAM_STR);
            $Processo->bindParam(':Rank', $Rank, PDO::PARAM_INT);
            
            try{
                
                $Processo->execute();
                
            }catch (Exception $ex){
                
                
                
            }finally{
                
                $this->Desconexao();
                echo("<script>alert('Cadastrado com sucesso');</script>");
                
                if($_SESSION['rank'] == 1){
                    
                    die(header("Refresh: 0.1;url=./dashboard/dashboard_admin/index.php"));
                    
                }else{
                    
                    die(header("Refresh: 0.1;url=index.php"));
                    
                }
                
            }
            
        }
        
    }
    
    public function AlterarUsuario($ID, $Nome, $Apelido, $Email, $Senha, $Imagem, $CEP, $Endereco, $Bairro, $Cidade, $Estado, $NumResidencia, $Complemento, $Rank){

        if($this->Conexao() == true){
            
            $SQL = "UPDATE USUARIO SET 
                    NOME_USUARIO = :Nome, 
                    APELIDO_USUARIO = :Apelido, 
                    EMAIL_USUARIO = :Email, 
                    SENHA_USUARIO = :Senha, 
                    IMAGEM_USUARIO = :Imagem, 
                    CEP_USUARIO = :CEP, 
                    ENDERECO_USUARIO = :Endereco, 
                    BAIRRO_USUARIO = :Bairro, 
                    CIDADE_USUARIO = :Cidade, 
                    ESTADO_USUARIO = :Estado, 
                    NUMRESIDENCIA_USUARIO = :Residencia, 
                    COMPLEMENTO_USUARIO = :Complemento, 
                    RANK_USUARIO = :Rank 
                    WHERE ID_USUARIO = :ID";

            $Processo = $this->PDO->prepare($SQL);
            $Processo->bindParam(":ID", $ID, PDO::PARAM_STR);
            $Processo->bindParam(":Nome", $Nome, PDO::PARAM_STR);
            $Processo->bindParam(":Apelido", $Apelido, PDO::PARAM_STR);
            $Processo->bindParam(':Email', $Email, PDO::PARAM_STR);
            $Processo->bindParam(':Senha', $Senha, PDO::PARAM_STR);
            $Processo->bindParam(':Imagem', $Imagem, PDO::PARAM_STR);
            $Processo->bindParam(':CEP', $CEP, PDO::PARAM_STR);
            $Processo->bindParam(':Endereco', $Endereco, PDO::PARAM_STR);
            $Processo->bindParam(':Bairro', $Bairro, PDO::PARAM_STR);
            $Processo->bindParam(':Cidade', $Cidade, PDO::PARAM_STR);
            $Processo->bindParam(':Estado', $Estado, PDO::PARAM_STR);
            $Processo->bindParam(':Residencia', $NumResidencia, PDO::PARAM_STR);
            $Processo->bindParam(':Complemento', $Complemento, PDO::PARAM_STR);
            $Processo->bindParam(':Rank', $Rank, PDO::PARAM_INT);
            
            try{
                
                $Processo->execute();
                
            }catch (Exception $ex){
                
                
                
            }finally{
                
                $this->Desconexao();
                echo("<script>alert('Alterado com sucesso');</script>");
                die(header("Refresh: 0.1;url=dashboard/dashboard_admin/index.php"));
                
            }
            
        }
        
    }
    
    public function ExcluirUsuario($ID){
        
        $SQL = "DELETE FROM USUARIO WHERE ID_USUARIO = :ID";
        
        if($this->Conexao()){
            
            $Processo = $this->PDO->prepare($SQL);
            $Processo->bindParam(":ID", $ID, PDO::PARAM_INT);
            $Processo->execute();
            $this->Desconexao();
            echo("<script>alert('Excluido com sucesso');</script>");
            die(header("Refresh: 0.1;url=dashboard/dashboard_admin/index.php"));
            
        }
        
        return;
        
    }
    
    public function Login($Email,$Senha){
        
        if($this->Conexao()){
            
            $SQL = "SELECT ID_USUARIO, NOME_USUARIO, EMAIL_USUARIO, IMAGEM_USUARIO, CEP_USUARIO, ENDERECO_USUARIO, NUMRESIDENCIA_USUARIO, COMPLEMENTO_USUARIO, RANK_USUARIO FROM USUARIO WHERE EMAIL_USUARIO = :Email AND SENHA_USUARIO = :Senha";
            
            $Processo = $this->PDO->prepare($SQL);
            $Processo->bindParam(":Email", $Email, PDO::PARAM_STR);
            $Processo->bindParam(':Senha', $Senha, PDO::PARAM_STR);
            
            try{
                
                $Processo->execute();
                $Dados = $Processo->fetch(PDO::FETCH_ASSOC);
                
                if($Dados == NULL){
                    
                    $this->Erro("Login e/ou Senha incorretos");
                    die(header("Refresh: 0.1;url=./index.php"));
                    
                }
                
                
            }catch (Exception $ex){
                
                $this->Erro($ex->getMessage());
                
            }finally{
                
                $this->Desconexao();
                $this->Sessao($Dados);
                die(header("Refresh: 0.1;url=../index.php"));
                
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
    
    public function BuscaDadosUsuarios($Inicio,$Limite){
        
        if($this->Conexao()){
            
            $SQL = "SELECT * FROM usuario LIMIT {$Inicio}, {$Limite}";
            $Dados = null;
            
            $Processo = $this->PDO->prepare($SQL);
            $Processo->bindParam(":Inicio", $Inicio, PDO::PARAM_STR);
            $Processo->bindParam(":Limite", $Limite, PDO::PARAM_STR);
            
            $Processo->execute();
            $Dados = $Processo->fetchall(PDO::FETCH_ASSOC);
            $this->Desconexao();
        }
        
        return $Dados;
        
    }
    
    public function ContaUsuarios(){
        
        if($this->Conexao()){
            
            $SQL = "SELECT * FROM usuario";
            
            $Processo = $this->PDO->prepare($SQL);
            
            
            $Processo->execute();
            $Numero = $Processo->rowCount();
            $this->Desconexao();
            
        }
        
        return $Numero;
        
    }
    
    public function BuscaUsuario($ID){
        
        if($this->Conexao()){
            
            $SQL = "SELECT * FROM USUARIO WHERE ID_USUARIO = :ID";
            
            $Processo = $this->PDO->prepare($SQL);
            $Processo->bindParam(":ID", $ID, PDO::PARAM_STR);
            
            try{
                
                $Processo->execute();
                $Dados = $Processo->fetch(PDO::FETCH_ASSOC);
                
                if($Dados == NULL){
                    
                    $this->Erro("Usuário não encontrado");
                    die(header("Refresh: 0.1;url=cadastro.php"));
                    
                }
                
                
            }finally{
                
                return $Dados;
                
            }
            
        }
        
    }
    
    /* Funções dos Cursos */
    
    public function CadastrarCurso($IDUsuario, $Titulo, $Descricao, $TempoEstimado, $Imagem){
        
        if($this->Conexao() == true){
            
            $SQL = "INSERT INTO CURSO (ID_USUARIO, TITULO_CURSO, DESCRICAO_CURSO, TEMPOESTIMADO_CURSO, IMAGEM_CURSO) VALUES (:IDUsuario, :Titulo, :Descricao, :TempoEstimado, :Imagem)";
            $Processo = $this->PDO->prepare($SQL);
            $Processo->bindParam(":IDUsuario", $IDUsuario, PDO::PARAM_STR);
            $Processo->bindParam(":Titulo", $Titulo, PDO::PARAM_STR);
            $Processo->bindParam(":Descricao", $Descricao, PDO::PARAM_STR);
            $Processo->bindParam(':TempoEstimado', $TempoEstimado, PDO::PARAM_STR);
            $Processo->bindParam(':Imagem', $Imagem, PDO::PARAM_STR);
            
            try{
                
                $Processo->execute();
                
            }catch (Exception $ex){
                
                
                
            }finally{
                
                $this->Desconexao();
                echo("<script>alert('Cadastrado com sucesso');</script>");    
                die(header("Refresh: 0.1;url=./dashboard/dashboard_admin/cursos.php"));

            }
            
        }
        
    }
    
    public function AlterarCurso($IDCurso, $Titulo, $Descricao, $TempoEstimado, $Imagem){
        
        if($this->Conexao() == true){
            
            $SQL = "UPDATE CURSO SET
            TITULO_CURSO = :Titulo,
            DESCRICAO_CURSO = :Descricao,
            TEMPOESTIMADO_CURSO = :TempoEstimado,
            IMAGEM_CURSO = :Imagem
            WHERE ID_CURSO = :IDCurso";
            
            $Processo = $this->PDO->prepare($SQL);
            $Processo->bindParam(":IDCurso", $IDCurso, PDO::PARAM_STR);
            $Processo->bindParam(":Titulo", $Titulo, PDO::PARAM_STR);
            $Processo->bindParam(":Descricao", $Descricao, PDO::PARAM_STR);
            $Processo->bindParam(':TempoEstimado', $TempoEstimado, PDO::PARAM_STR);
            $Processo->bindParam(':Imagem', $Imagem, PDO::PARAM_STR);
            
            try{
                
                $Processo->execute();
                
            }catch (Exception $ex){
                
                
                
            }finally{
                
                $this->Desconexao();
                echo("<script>alert('Alterado com sucesso');</script>");
                die(header("Refresh: 0.1;url=dashboard/dashboard_admin/cursos.php"));
                
            }
            
        }
        
    }
    
    public function ExcluirCurso($IDCurso){
        
        $SQL = "DELETE FROM CURSO WHERE ID_CURSO = :IDCurso";
        
        if($this->Conexao()){
            
            $Processo = $this->PDO->prepare($SQL);
            $Processo->bindParam(":IDCurso", $IDCurso, PDO::PARAM_INT);
            $Processo->execute();
            $this->Desconexao();
            echo("<script>alert('Excluido com sucesso');</script>");
            die(header("Refresh: 0.1;url=dashboard/dashboard_admin/cursos.php"));
            
        }
        
        return;
        
    }
        
    public function BuscaDadosCursos($Inicio,$Limite){
        
        if($this->Conexao()){
            
            $SQL = "SELECT * FROM curso LIMIT {$Inicio}, {$Limite}";
            $Dados = null;

            $Processo = $this->PDO->prepare($SQL);
            $Processo->bindParam(":Inicio", $Inicio, PDO::PARAM_STR);
            $Processo->bindParam(":Limite", $Limite, PDO::PARAM_STR);
            
            $Processo->execute();
            $Dados = $Processo->fetchall(PDO::FETCH_ASSOC);
            $this->Desconexao();
        }
        
        return $Dados;        
        
    }
    
    public function ContaCursos(){
        
        if($this->Conexao()){
            
            $SQL = "SELECT * FROM curso";
            
            $Processo = $this->PDO->prepare($SQL);

            
            $Processo->execute();
            $Numero = $Processo->rowCount();
            $this->Desconexao();
            
        }
        
        return $Numero;
        
    }
    
    public function ContaNiveis($IDCurso){
        
        if($this->Conexao()){
            
            $SQL = "SELECT * FROM nivel WHERE ID_CURSO = :IDCurso";
            
            $Processo = $this->PDO->prepare($SQL);
            $Processo->bindParam(":IDCurso", $IDCurso, PDO::PARAM_STR);
                        
            $Processo->execute();
            $Numero = $Processo->rowCount();
            $this->Desconexao();
            
        }
        
        return $Numero;
        
    }
    
    public function ContaModulos($IDNivel){
        
        if($this->Conexao()){
            
            $SQL = "SELECT * FROM CURSO WHERE ID_NIVEL = :IDNivel";
            
            $Processo = $this->PDO->prepare($SQL);
            $Processo->bindParam(":IDNivel", $IDNivel, PDO::PARAM_STR);
                        
            $Processo->execute();
            $Numero = $Processo->rowCount();
            $this->Desconexao();
            
        }
        
        return $Numero;
        
    }
        
    public function BuscaCurso($ID){
        
        if($this->Conexao()){
            
            $SQL = "SELECT * FROM CURSO WHERE ID_CURSO = :ID";
            
            $Processo = $this->PDO->prepare($SQL);
            $Processo->bindParam(":ID", $ID, PDO::PARAM_STR);
            
            try{
                
                $Processo->execute();
                $Dados = $Processo->fetch(PDO::FETCH_ASSOC);
                
                if($Dados == NULL){
                    
                    $this->Erro("Curso não encontrado");
                    die(header("Refresh: 0.1;url=/Auxilium/cursos.php"));
                                        
                }
                
                
            }finally{
                
                return $Dados;
                
            }
            
        }
        
    }

    /* Funções de Validação */
    
    public function ValidaNome($Nome){
        
        $Nome = htmlspecialchars_decode($Nome);
        
        if($Nome == NULL || $Nome == '' || strlen($Nome) > 60){
            
            $this->Erro("Nome inválido");
            die(header("Refresh: 0.1;url=cadastro.php"));
            
        }
        
        return $Nome;
        
    }
    
    public function ValidaEmail($Email, $ConfEmail){
        
        $Email = htmlspecialchars_decode($Email);
        $ConfEmail = htmlspecialchars_decode($ConfEmail);
        
        if($Email == NULL || $Email == '' || strlen($Email) > 100){
            
            $this->Erro("Email inválido");
            die(header("Refresh: 0.1;url=cadastro.php"));
            
        }else{
            
            if($Email != $ConfEmail){
                
                $this->Erro("Emails não batem");
                die(header("Refresh: 0.1;url=cadastro.php"));
                
            }
            
            
            
        }
        
        return $Email;
        
    }
    
    public function ValidaSenha($Senha, $ConfSenha){
        
        $Senha = htmlspecialchars_decode($Senha);
        $ConfSenha = htmlspecialchars_decode($ConfSenha);
        
        if($Senha == NULL || $Senha == '' || strlen($Senha) > 50){
            
            $this->Erro('Senha inválida');
            die(header("Refresh: 0.1;url=cadastro.php"));
            
        }else{
            
            if($Senha != $ConfSenha){
                
                $this->Erro("Senhas não batem");
                die(header("Refresh: 0.1;url=cadastro.php"));
                
            }
            
        }
        
        return md5($Senha);
        
    }
    
    public function ValidaCEP($CEP){
        
        $CEP = str_replace("-", "", htmlspecialchars_decode($CEP));
        
        if($CEP == NULL || $CEP == "" || strlen($CEP) != 8){
            
            $this->Erro('CEP inválido');
            die(header("Refresh: 0.1;url=cadastro.php"));
            
        }
        
        $CEP = substr_replace($CEP, "-", 5, 0);
        return $CEP;
        
    }
    
    public function ValidaEndereco($Endereco){
        
        $Endereco = htmlspecialchars_decode($Endereco);
        
        if($Endereco == NULL || $Endereco == '' || strlen($Endereco) > 150){
            
            $this->Erro("Endereço inválido");
            die(header("Refresh: 0.1;url=cadastro.php"));
            
        }
        
        return $Endereco;
        
    }
    
    public function ValidaResidencia($NumResidencia){
        
        $NumResidencia = htmlspecialchars_decode($NumResidencia);
        
        if($NumResidencia == NULL || $NumResidencia == '' || strlen($NumResidencia) > 10 || $NumResidencia <= 0){
            
            $this->Erro("Número da Residência inválido");
            die(header("Refresh: 0.1;url=cadastro.php"));
            
        }
        
        return $NumResidencia;
        
    }
    
    public function ValidaImagem($Imagem, $Extensao){
        
        list($Altura, $Largura) = getimagesize($Imagem);
        
        if($Altura == "" || $Largura == ""){
            
            $this->Erro("Imagem inválida");
            die(header("Refresh: 0.1;url=cadastro.php"));
            
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
            die(header("Refresh: 0.1;url=cadastro.php"));
            
        }
        
    }
    
    public function ValidaTitulo($Titulo){
        
        $Titulo = htmlspecialchars_decode($Titulo);
        
        if($Titulo == NULL || $Titulo == '' || strlen($Titulo) > 80){
            
            $this->Erro("Título inválido");
            die(header("Refresh: 0.1;url=login/dashboard/dashboard_admin/cursos.php"));
            
        }
        
        return $Titulo;
        
    }
    
    public function ValidaDescricao($Descricao){
        
        $Descricao = htmlspecialchars_decode($Descricao);
        
        if($Descricao == NULL || $Descricao == '' || strlen($Descricao) > 280){
            
            $this->Erro("Descricao inválida");
            die(header("Refresh: 0.1;url=login/dashboard/dashboard_admin/cursos.php"));
            
        }
        
        return $Descricao;
        
    }
    
    public function ValidaTempoEstimado($TempoEstimado){
        
        $TempoEstimado = htmlspecialchars_decode($TempoEstimado);
        
        if($TempoEstimado == NULL || $TempoEstimado == '' || strlen($TempoEstimado) > 3 || strlen($TempoEstimado) <= 0){
            
            $this->Erro("Tempo Estimado inválido");
            die(header("Refresh: 0.1;url=login/dashboard/dashboard_admin/cursos.php"));
            
        }
        
        return $TempoEstimado;
        
    }
    
    public function Erro($Problema){
        
        echo("<script>alert('Erro: {$Problema}')</script>");
        
    }
    
    public function Sessao($Dados){
        
        session_start();
        
        $_SESSION['id'] = $Dados['ID_USUARIO'];
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