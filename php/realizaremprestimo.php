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
    <link rel="stylesheet" type="text/css" href="formularioinformar.css">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Empréstimo</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Fjalla+One&family=Oswald:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2? family = Oswald: wght @ 600 & display = swap');
body{
    background-image: url(herois.png);
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
    .botao{
    border-radius: 15px;
    background-color: white;
    color: black;
    font-size: 20px;
    padding: 10px 30px;
    border: 1px solid #4169E1;
    cursor: pointer;
    width: 155px;
    text-align: center;
    align-self: center;
    transition: background-color 1.5s;
}
    h3{
    color: #12110F;
    text-shadow: white 0.1em 0.1em 0.2em;
    font-size: 32px;
    font-family: 'Oswald', sans-serif;
    font-weight: bold;
    text-transform: capitalize;
}
.botaodevolucao{
    border-radius: 15px;
    background-color: white;
    color: black;
    font-size: 20px;
    padding: 10px 30px;
    border: 1px solid #4169E1;
    cursor: pointer;
    width: 250px;
    text-align: center;
    position: relative;
    top: 1px; left: 40px;
    transition: background-color 1.5s;
}
.botaodevolucao:hover{
    background-color: #4169E1;
    color: white;
}
</style>
<body>
<header>
        <nav class="menu">
        <img class="logotipo" src="logo.png"  width="60" height="60" alt="Logo">
            <a class="logo" href="">Clube do Livro</a>
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
    <br>
    <a href="devolucao.php"><input class="botaodevolucao" type="submit" name="botao" value="Fazer Devolução" action="devolucao.php"></a>
    <br>
    <section class="content">
        <div class="contato">
            <h3>Faça o seu Empréstimo</h3>
            <form class="form" method="POST" action="conexaoemprestimo.php">
                <input class="field" name="nome" placeholder="Seu Nome" required>
                    
                <select class="tabela" name="revista" required>´
                <option value="caixa">Selecione a Revista</option>
                    <?php
                        $sql = $con->query("SELECT `nome_revista` FROM revista where revista.disponibilidade = 1");
                            while($revista = $sql->fetch_array())
                        {
                            echo '<option value="'.$revista["nome_revista"].'">'.$revista["nome_revista"].'</option>';    
                        }
                    ?>    
                </select>
                <select class="tabela" name="colecao" required>´
                <option value="caixa">Selecione a Coleção</option>
                    <?php
                        $sql = $con->query("SELECT `colecao` FROM revista where revista.disponibilidade = 1");
                            while($colecao = $sql->fetch_array())
                        {
                            echo '<option value="'.$colecao["colecao"].'">'.$colecao["colecao"].'</option>';    
                        }
                    ?>    
                </select>
        
                <input class="field" type="date" name="data" required>
                <input class="botao" type="submit" name="botao" value="Enviar">
            </form>
        </div>
    </section>

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