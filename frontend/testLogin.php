<?php
session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
//Acessa
include_once('../backend/php/includes/config.php');
$email = $_POST['email'];
$senha = $_POST['senha'];

print_r('Email: ' . $email);
print_r('<br>');
print_r('Senha: ' . $senha);
$sql = "SELECT * FROM perfil WHERE email = '$email' and senha = '$senha'";
$result = $conexao->query($sql);


print_r($sql);
print_r($result);


    if(mysqli_num_rows($result)< 1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: /Espaco-Conecta/frontend/login.php');
    exit();
        //Aqui os dados foram destruidos
    }else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: /Espaco-Conecta/frontend/reservas.php');
    exit();
    }
    }else{
//Não acessa
        header('Location: ../../frontend/login.php');
    }
?>