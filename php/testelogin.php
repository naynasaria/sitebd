<?php
session_start();

    if(isset($_POST['login']) && !empty($_POST['txtemail']) && !empty($_POST['textsenha'])){
        //acessa

        include_once('acessobanco.php');

        $email = $_POST['txtemail'];
        $senha = $_POST['textsenha'];

        //print_r('E-mail: '.$email);
        //print_r('<br>');
        //print_r('Senha: '.$senha);

        $sql="SELECT senha FROM registroamigos WHERE email = '$email' and senha = '$senha'";
        $result = $conexao->query($sql);

        print_r($sql);
        print_r($result);

        if(mysqli_num_rows($result)<1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            echo "<script>alert('Login não Encontrado');</script>";
            header('Location: login.php');
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }else{
        //não acessa
        header('Location: login.php');
    }

?>