<?php
    function conectar(){
        try {
            $pdo = new PDO("mysql:host=localhost; dbname=banco1", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");            
            return $pdo;
        } catch (PDOException $erro) {
            echo "Erro na conexão:" . $erro->getMessage();
        }        
    }

    function inserirCadastro($nome, $email, $senha){

        $pdo =  conectar();

        $cmd = $pdo->prepare("INSERT INTO cadastro (nome, email, senha) VALUES (:n, :e, :s)");
        
        $cmd->bindValue(":n", $nome);
        $cmd->bindValue(":e", $email);
        $cmd->bindValue(":s", $senha); 
                
        if($cmd->execute())
        {   
            
            return true;
        }
        else
        {
            
            return false;
        }
    }
?>