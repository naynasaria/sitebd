<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="registro.css">
    <script src="https://kit.fontawesome.com/e9197be8df.js" crossorigin="anonymous"></script>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clube de Livros</title>
</head>
<body>
    <div class="container">
        <div id="first-content" class="content  first-content">
        <div class="primeira-coluna">
            <h2 class="title-primary">Bem-Vindo de Volta!</h2>
            <p class="description">Entre Agora Vingador</p>
        <a href="login.php"><button id="sign-in" class="btn-primary">Entrar</button></a>
        </div>
        <div class="segunda-coluna">
            <h2 class="title conta">Crie uma Conta</h2>
            <form class="form1" method="post"  action="conexao.php">
                <input type="text" name="txtnome" placeholder="  Nome" required>
                <input type="email" name="txtemail" placeholder="  E-mail" required>
                <input type="password" name="textsenha" placeholder="  Senha" required>
                <input  type="text" name="textnome_mae" placeholder="  Nome da Mãe">
                <input type="tel" name="texttelefone" placeholder="  Telefone" required>
                <input type="text" name="textorigem" placeholder="  Origem da Amizade" required>
            <a href="sistema.php"><button type="submit" id="registrar" class="btn">Registrar</button></a>
            </form>

        </div>
        </div>
</body>
</html>