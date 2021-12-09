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
$colecao = $_POST ['colecao'];
$sql = mysqli_query ($con, "UPDATE revista SET disponibilidade = 1 WHERE nome_revista = '$revista'");


if($sql >= 1){
    $emprestimo =  mysqli_query ($con, "UPDATE emprestimo SET disponibilidade = 0 WHERE disponibilidade = 1");
    $delete = mysqli_query ($con, "DELETE FROM `emprestimo` WHERE `emprestimo`.`disponibilidade` = 0");
    header('Location: realizadodevolutiva.html');
}else{
    echo "<script>alert('Devolução não foi realizada!');</script>";
}
?>