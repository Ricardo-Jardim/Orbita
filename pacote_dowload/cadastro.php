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
    <section ><h1>Cadastrar Órbita <img src="orbita.png" alt="orbita logo"></h1>
        <form  action= "acesso.php" method="GET">
            <div class="label-float">
                <input type="name"  name="nome" placeholder=" " required/>
                <label>Nome</label>
            </div>             
            <div class="label-float">
                <input type="email" name="email" placeholder=" " required/>
                <label>E-mail</label>
            </div>            
            <div class="label-float">
                <input type="password" name="senha" placeholder=" " required/>
                <label>Senha</label>
            </div> 
            <div class="label-float">
                <input type="password" placeholder=" " required/>
                <label>Confirmar Senha</label>
            </div>
            <input type="checkbox" id="teste">
            <label for="teste">Manter-me conectado</label>
            <input class="b-cadastro" type="submit" name="botao" value="Cadastrar" > 
        </form>
    </section>
</body>
</html>

