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
$sql = mysqli_query ($con, "INSERT INTO `emprestimo`(`id`,`nome`, `nome_revista`, `data`)
VALUES ('','$nome','$revista','$data')");


if($sql >= 1){
    $update = mysqli_query ($con, "UPDATE revista SET disponibilidade = 0 WHERE nome_revista = '$revista'");
    header('Location: realizadoemprestimo.html');
}else{
    echo "<script>alert('Empréstimo não foi feito!');</script>";
}
?>