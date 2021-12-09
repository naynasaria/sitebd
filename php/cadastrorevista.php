<?php
                    $host = "127.0.0.1";
                    $usuario = "root";
                    $senha = ""; 
                    $bd = "clube_livros";
                    $con = mysqli_connect($host , $usuario, $senha , $bd);
                    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/e9197be8df.js" crossorigin="anonymous"></script>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Revistas</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Fjalla+One&family=Oswald:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2? family = Oswald: wght @ 600 & display = swap');

body{
    background-image: url(heroisdc.png);
    width: 1366;
    height: 768;
}
.menu{
    padding-top: 6px;
    margin-bottom: 20px;
}
.menu ul{
    list-style-type: none;
    padding: 0;
    background-color: #4169E1;
}

.logo{
    font-size: 24px;
    color: white;
    text-shadow: black 0.1em 0.1em 0.2em;
    font-family: 'Fjalla One', sans-serif;
    text-transform: uppercase;
    letter-spacing: 4px;
    text-decoration:none;
}
.menu ul li{
    position: relative;
    display: inline-block;
}
.menu ul li a{
    color: white;
    font-size: 15px;
    display: inline-block;
    text-decoration: none;
    padding: 10px;
    transition: background 1s;
}
.menu ul li a:hover{
    background-color: white;
    color: #6959CD;
}

.menu ul ul{
    display: none;
    position: absolute;
    opacity: 0;
}
.menu ul li:hover ul{
    display: block;
    opacity: 1;
}
.menu ul ul{
    width: 150px;
}
.menu ul ul li a{
    display: block;
}
.sair{
    border-radius: 15px;
    color: white;
    text-shadow: black 0.1em 0.1em 0.2em;
    font-size: 16px;
    padding: 110px;
    cursor: pointer;
    text-align: left;
    width: 40px;
    transition: background-color 1.5s;
    text-decoration:none;
}
nav{
    display: flex;
    justify-content: space-around;
    align-items: center;
    font-family: 'Oswald';
    height: 9vh;
    background-color: #4169E1;
    color: white;
}
.formrevista{
    display: flex;
    flex-direction: column;
    flex: 2 0 auto;
    position: relative;
    top: 40px; left: 40px;
}
.field{
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #4169E1;
    cursor: pointer;
    transition: background-color 1s;
    border-radius: 5px;
    font-family: 'Oswald', sans-serif;
    font-size: 14px;
}
.fundoregistro{
    width: 100%;
    height: 800px;
    max-width: 600px;
    justify-content: center;
}
.btn-primary{
    border-radius: 15px;
    background-color: white;
    color: #4169E1;
    font-size: 16px;
    padding: 10px 50px;
    border: 1px solid #4169E1;
    transition: background-color 1.5s;
    
}

.btn-primary:hover{
    background-color: #4169E1;
    color: white;
}

h2{
    color: #040438;
    text-shadow: white 0.2em 0.2em 0.7em;
    font-size: 30px;
    font-family: 'Oswald', sans-serif;
    font-weight: bold;
    text-transform: capitalize;
    position: relative;
    top: 40px; left: 40px;
}
}
.file{
    color: black;
    font-size: 14px;
    transition: background-color 1.5s;
    
}
.tabela{
    display: flex;
    flex-direction: column;
    flex: 2 0 auto;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #4169E1;
    cursor: pointer;
    transition: background-color 1s;
    border-radius: 5px;
    font-family: 'Oswald', sans-serif;
    font-size: 14px;
    }

</style>
<body>
<header>
        <nav class="menu">
        <img class="logotipo" src="logo.png"  width="60" height="60" alt="Logo">
            <a class="logo" href="sistema.php">Clube do Livro</a>
            <ul class="nav-list">
            <li><a href="#">Cadastro</a>
                <ul>
                    <li><a href="cadastrorevista.php">Cadastro de Revistas</a></li>
                    <li><a href="cadastrocaixas.php">Cadastro de Caixas</a></li>
                </ul>
            </li>
            <li><a href="#">Revistas por Coleção</a>
                <ul>
                    <li><a href="caixas.php">Caixas</a></li>
                    <li><a href="numeroedicao.php">Número de Edição</a></li>
                </ul>
            </li>
            <li><a href="sistema.php">Consulta de Empréstimo</a>
                <ul>
                    <li><a href="disponibilidaderevista.php">Disponibilidade</a></li>
                </ul>
            </li>
            <li><a href="realizaremprestimo.php">Empréstimo</a>
                <ul>
                    <li><a href="realizaremprestimo.php">Realizar Empréstimo</a></li>
                </ul>
            </li>
            <li><a href="#">Contato</a>
                <ul>
                    <li><a href="informarperdas.html">Informar Perda</a></li>
                    <li><a href="informaratraso.html">Informar Atraso na Devolução</a></li>
                    <li><a href="informararasgos.html">Informar Rasgos e/ou Manchas</a></li>
                </ul>
            </li>
            <a class="sair" href="sair.php">Sair</a>
            </ul>
        </nav>
    </header>

    <div class="fundoregistro">
    <h2 class="title conta2">Cadastre a sua Revista</h2>
            <form class="formrevista" method="POST"  action="conexaorevista.php">
                <input class="field" type="text" name="nome" placeholder="  Nome da Revista" required>
                <input class="field" type="text" name="colecao" placeholder="  Coleção da Revista" required>
                <input class="field" type="number" name="numedicao" placeholder="  Número de Edição" required>
                <input class="field" type="number" name="ano" placeholder="  Ano da Revista" required>

                <select class="tabela" name="caixa_guardada" required>
                <option value="caixa">Selecione a Caixa</option>
                    <?php
                        $sql = $con->query("SELECT caixa_guardada FROM `caixa` WHERE 1");
                            while($revista = $sql->fetch_array())
                        {
                            echo '<option value="'.$revista["caixa_guardada"].'">'.$revista["caixa_guardada"].'</option>';
                        }
                    ?>    
                </select>

                <a href="sistema.php"><button type="submit" name="registrar" class="btn-primary">Registrar</button></a>
                </form>
    </div>

<script>
  window.watsonAssistantChatOptions = {
    integrationID: "6d565178-82e3-4fad-9bfa-080097deb36d", // The ID of this integration.
    region: "us-east", // The region your integration is hosted in.
    serviceInstanceID: "35c6337d-fada-4b27-9175-9cbc3d7c4cb5", // The ID of your service instance.
    onLoad: function(instance) { instance.render(); }
  };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
    document.head.appendChild(t);
  });
</script>
</body>
</html>