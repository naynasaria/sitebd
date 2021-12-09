<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/e9197be8df.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revistas Disponíveis</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Fjalla+One&family=Oswald:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2? family = Oswald: wght @ 600 & display = swap');
body{
    background-color: #213261;
    background-image: url(aranha.jpg);
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
h3{
    color: white;
    text-shadow: black 0.1em 0.1em 0.3em;
    font-size: 30px;
    font-family: 'Oswald', sans-serif;
    font-weight: bold;
    text-transform: capitalize;
    text-align: center;
}

.table-bg{
    background-color: rgba(65,105,225,0.5);
    border-radius: 12px 12px 0 0;
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
    <h3>Revistas Disponíveis</h3>
    <div class="m-5">
    <table class="table text-white table-bg">
  <thead>
    <tr>
      <th scope="col" name="nome_revista">Revista</th>
      <th scope="col" name="colecao">Coleção da Revista</th>
    </tr>
  </thead>
  <tbody>
  <?php
$host = "127.0.0.1";
$usuario = "root";
$senha = ""; 
$bd = "clube_livros";
$con = mysqli_connect($host , $usuario, $senha , $bd);
?>

<?php
$id=['id'];
$nome_revista = ['nome_revista'];
$colecao = ['colecao'];
$edicao = ['numedicao'];
$ano = ['ano'];
$caixa = ['caixa'];

$sql = $con->query("SELECT `id`, `nome_revista`, `colecao`, `numero_edicao`, `ano`, `caixa_guardada`, `disponibilidade` FROM `revista` where revista.disponibilidade = 1");
    while($user_data = mysqli_fetch_assoc($sql)){
        echo "<tr>";
        echo "<td>".$user_data['nome_revista']."</td>";
        echo "<td>".$user_data['colecao']."</td>";
    }
?>
  </tbody>
</table>
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