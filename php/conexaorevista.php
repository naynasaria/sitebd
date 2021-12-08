<?php 
    $host = "127.0.0.1";
    $usuario = "root";
    $senha = ""; 
    $bd = "clube_livros";
    $con = mysqli_connect($host , $usuario, $senha , $bd);
 ?>

 <?php
$nome = $_POST['nome'];
$colecao = $_POST ['colecao'];
$edicao = $_POST ['numedicao'];
$ano = $_POST ['ano'];
$caixa = $_POST ['caixa_guardada'];
$sql = mysqli_query ($con, "INSERT INTO `revista`(`id`,`nome_revista`, `colecao`, `numero_edicao`, `ano`, `caixa_guardada`,`disponibilidade`) 
VALUES ('','$nome','$colecao','$edicao','$ano','$caixa','1')");

if($sql >= 1){
    echo "<script>alert('Registro Concluído com sucesso!')</script>";
    header('Location: realizado.html');
}else{
    echo "<script>alert('Erro ao Cadastrar');</script>";
}
?>