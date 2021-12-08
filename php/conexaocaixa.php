<?php 
    $host = "127.0.0.1";
    $usuario = "root";
    $senha = ""; 
    $bd = "clube_livros";
    $con = mysqli_connect($host , $usuario, $senha , $bd);
 ?>

 <?php
$cor = $_POST['cor'];
$etiqueta = $_POST ['etiqueta'];
$caixan = $_POST ['numcaixa'];
$sql = mysqli_query ($con, "INSERT INTO `caixa`(`caixa_guardada`, `etiqueta`, `numero`) 
VALUES ('$cor','$etiqueta','$caixan')");

if($sql >= 1){
    echo "<script>alert('Registro Concluído com sucesso!')</script>";
    header('Location: realizado.html');
}else{
    echo "<script>alert('Erro ao Cadastrar');</script>";
}
?>