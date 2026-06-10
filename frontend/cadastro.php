<?php 
if(isset($_POST['submit']))
{
/*print_r('Nome: ' . $_POST['nome']);
print_r('<br>');
print_r('Email: ' . $_POST['email']);
print_r('<br>');
print_r('CPF: ' . $_POST['cpf']);
print_r('<br>');
print_r('senha: ' . $_POST['senha']);
*/
include_once('../backend/php/includes/config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha= $_POST['senha'];
$cpf = $_POST['cpf'];

$result = mysqli_query($conexao, "INSERT INTO perfil(nome,cpf,email,senha)
VALUES ('$nome','$cpf','$email','$senha')");
header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./src/style/cadastro.css">

</head>
<body>
<div class="container">

    <!-- Lado esquerdo (formulário) -->
    <div class="form-area">

        <!-- Logo -->
        <div class="nav-logo">
            <a href=""><img src="./assets/img/logo-espaço-conecta.svg" alt="Logo"></a>
        </div>

        <h1>Cadastro</h1>

        <form method="POST">

    <div class="linha">
        <div class="campo">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
        </div>

        <div class="campo">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" maxlength="14" required>
        </div>
    </div>

    <div class="campo">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div class="campo">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required>
    </div>

    <div class="termos-cadastrar">
        <label>
            <input type="checkbox" required>
            Termos e Condições de Uso
        </label>
    </div>

    <input type="submit" name="submit" id="submit" value="Cadastrar">

</form>

        <!-- ANTES 
         <button type="submit">
            <a href="#">Cadastrar</a>
        </button> -->
        <a href="./login.php" class="link-msg">Já tem uma conta? Clique aqui!</a>

    </div>

    <!-- Lado direito (imagem) -->
    <div class="image-area"></div>

</div>

</body>

