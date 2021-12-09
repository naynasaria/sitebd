<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="login.css">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clube de Livros</title>
</head>
<body>
    <div class="container">
        <div id="second" class="content  second-content">
            <div class="primeira-coluna">
                <h2 class="title-primary">Olá, Vingador!</h2>
                <p class="description">Inicie Sua Jornada Conosco</p>
            <a href="registro.php"><button id="sign-up" class="btn-primary">Registrar</button></a>
            </div>
            <div class="segunda-coluna">
                <h2 class="title conta">Entre em sua Conta</h2>                
                <form class="form" action="testelogin.php" method="POST">
                    <input type="email" name="txtemail" placeholder="  E-mail" required>
                    <input type="password" name="textsenha" placeholder="  Senha" required>
                    <button name="login" id="login" class="btn">Entrar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>