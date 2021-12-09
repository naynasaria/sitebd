<?php 
    $host = "127.0.0.1";
    $usuario = "root";
    $senha = ""; 
    $bd = "clube_livros";
    $con = mysqli_connect($host , $usuario, $senha , $bd);
 ?>

 <?php
$nome = $_POST['nome'];
$revista = $_POST ['revista'];
$data = $_POST ['data'];
$colecao = $_POST ['colecao'];
$sql = mysqli_query ($con, "INSERT INTO `emprestimo`(`id`,`nome`, `nome_revista`, `colecao`, `data`)
VALUES ('','$nome','$revista','$colecao','$data')");


if($sql >= 1){
    $update = mysqli_query ($con, "UPDATE revista SET disponibilidade = 0 WHERE nome_revista = '$revista'");
    $emprestimo =  mysqli_query ($con, "UPDATE emprestimo SET disponibilidade = 1 WHERE disponibilidade = 0");
    header('Location: realizadoemprestimo.html');
}else{
    echo "<script>alert('Empréstimo não foi feito!');</script>";
}
?>