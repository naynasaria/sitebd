<?php 
    $host = "127.0.0.1";
    $usuario = "root";
    $senha = ""; 
    $bd = "clube_livros";
    $con = mysqli_connect($host , $usuario, $senha , $bd);
 ?>

 <?php
$id = ['id'];
$nome = $_POST['nome'];
$revista = $_POST ['revista'];
$data = $_POST ['data'];
$sql = mysqli_query ($con, "INSERT INTO `emprestimo`(`id`,`nome`, `nome_revista`, `data`)
VALUES ('','$nome','$revista','$data')");


if($sql >= 1){
    $update = mysqli_query ($con, "UPDATE revista SET disponibilidade = 1 WHERE nome_revista = '$revista'");
    $delete = mysqli_query ($con, "DELETE FROM `emprestimo` WHERE `emprestimo`.`id` = $id");
    header('Location: realizadodevolutiva.html');
}else{
    echo "<script>alert('Devolução não foi realizada!');</script>";
}
?>