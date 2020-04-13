<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formato.css">
    <title>Órbita</title>
</head>
<body>
    <div class="tela"></div>
    <a class="logo" href="index.php" alt="orbita index">Órbita</a>
    <section ><h1 class="ac">Acessar Órbita <img src="orbita.png" alt="orbita logo"></h1>
    
        <form action="home.php">          
            <div class="label-float">
                <input type="email" placeholder=" " required/>
                <label>E-mail</label>
            </div>            
            <div class="label-float">
                <input type="password" placeholder=" " required/>
                <label>Senha</label>
            </div> 
            <input type="checkbox" id="teste"> 
            <label for="teste">Manter-me conectado</label><br><a href="#" style="text-decoration: none">Esqueceu a senha?</a>
            <input class="b-enter" type="submit" name="" value="Entrar"> 
        </form>
        
    </section>
</body>
</html>

<?php
    include("funcoes.php");
    if (isset($_REQUEST['botao']))
    {
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $senha = $_GET['senha'];

        $retorno = inserirCadastro($nome, $email, $senha);

        if($retorno)
        {        
            echo "Cadastro realizado com sucesso!";
        }
        else
        {
            echo "Erro ao cadastrar, tente novamente";
        }
    }
?> 