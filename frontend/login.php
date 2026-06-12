<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./src/style/login.css">
    <link rel="shortcut icon" href="./assets/img/Favicon-espaçoConecta.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    

</head>
<body>

<div class="container">

    <!-- Lado esquerdo (formulário) -->
    <div class="form-area">

        <!-- Logo -->
        <div class="nav-logo">
            <a href="#"><img src="./assets/img/logo-espaço-conecta.svg" alt="Logo espaço conecta"></a>
        </div>

        <h1>LOGIN</h1>

        <form action="testLogin.php" method="POST">
            <div class="campo">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Ex: espaco_conecta@gmail.com" required>
            </div>

            <div class="campo">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="No máximo 12 digitos" required>
            </div>

            <div class="termos-login">
                <label>
                    <input type="checkbox">
                    Lembrar-me
                </label>

                <a href="./cadastro.php">Cadastrar</a>
            </div>

            <input class="inputSubmit" id="submit" type="submit" name="submit" value="Entrar">

        </form>



    </div>

    <!-- Lado direito (imagem) -->
    <div class="image-area"></div>

</div>


</body>
</html>
