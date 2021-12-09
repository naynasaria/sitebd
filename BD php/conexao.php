<?php 
    $host = "127.0.0.1";
    $usuario = "root";
    $senha = ""; 
    $bd = "clube_livros";
    $con = mysqli_connect($host , $usuario, $senha , $bd);
 ?>

 <?php
$nome = $_POST['txtnome'];
$email = $_POST ['txtemail'];
$senha = $_POST ['textsenha'];
$nome_mae = $_POST ['textnome_mae'];
$telefone = $_POST ['texttelefone'];
$local = $_POST ['textorigem'];
$sql = mysqli_query ($con, "INSERT INTO `registroamigos`(`id`, `nome`, `nome_mae`, `email`, `senha`, `telefone`, `local`)
 VALUES ('','$nome','$nome_mae','$email','$senha','$telefone','$local')");

if($sql >= 1){
    echo "<script>alert('Registro Concluído com sucesso!')</script>";
    header('Location: sistema.php');
}else{
    echo "<script>alert('Cadastro já Existente!');</script>";
}
?>