<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purble Bear Site / seu perfil</title>
    <link rel="stylesheet" href="css/style.css">

<body>

    <!-- barra de informações -->
    <nav class="navbar">
        <div class="navbarlogo">
            <img src="img/logo.png" alt="logo da purple bear" width="110px">
        </div>
        <div class="navbarlinks">
            <a href="sobre.html">Sobre nós</a>
            <a href="contato.html">Contato</a>
            <a href="redes.html">Redes Sociais</a>
        </div>
        <div class="navbarlogin">
            <a href="ops_user.html"><img src="img/user.png" alt="icone de perfil" width="60px"></a>
        </div>
    </nav>

    <!-- Formulário de adição de produto -->

    <form class="Cadastrar-produto" action="./dados.php" method="post">
        <label>Qual é o tipo da peça?</label> <br>
        <input type="radio" name="tipo" value="blusa" checked>
        <label>Blusa</label> 
        <input type="radio" name="tipo" value="camisa">
        <label>Camisa</label> 
        <input type="radio" name="tipo" value="calça">
        <label>Calça</label> <br>
        <input type="radio" name="tipo" value="bermuda">
        <label>Bermuda</label> 
        <input type="radio" name="tipo" value="saia">
        <label>Saia</label> 
        <input type="radio" name="tipo" value="casaco">
        <label>Casaco</label> <br> <hr>

        <label for="tamanho">Qual o tamanho da peça?</label> <br>
        <input type="radio" name="tamanho" value="pp" checked>
        <label for="tamanho">PP</label>
        <input type="radio" name="tamanho" value="p">
        <label for="tamanho">P</label>
        <input type="radio" name="tamanho" value="m">
        <label for="tamanho">M</label>
        <input type="radio" name="tamanho" value="g">
        <label for="tamanho">G</label>
        <input type="radio" name="tamanho" value="gg">
        <label for="tamanho">GG</label> <br> <hr>

        <label for="preco">Qual o valor da peça?</label> <br>
        <input type="text" name="preco" value="valor" required><br> <hr>

        <label for="img">Faça o upload da foto do produto:</label> <br> 
        <input type="file">
        <br> <br> <br>
        <input type="submit" value="enviar">
        <input type="reset" value="limpar">
    </form>
</div>
   
</body>
</html>