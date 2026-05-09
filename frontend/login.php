<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./src/style/login.css">
</head>
<body>

<div class="container">

    <!-- Lado esquerdo (formulário) -->
    <div class="form-area">

        <!-- Logo -->
        <div class="nav-logo">
            <a href=""><img src="./assets/img/logo-espaço-conecta.svg" alt="Logo"></a>
        </div>

        <h1>Login</h1>

        <form>

            <div class="campo">
                <label for="email">Email</label>
                <input type="email" id="email">
            </div>

            <div class="campo">
                <label for="senha">Senha</label>
                <input type="password" id="senha">
            </div>

            <div class="termos-login">
                <label>
                    <input type="checkbox">
                    Lembrar-me
                </label>

                <a href="#">Cadastrar</a>
            </div>

            

        </form>

        <button type="submit">Login</button>
        
    </div>

    <!-- Lado direito (imagem) -->
    <div class="imagem">
        <img src="./assets/img/Cadastro.img.png" alt="Imagem ilustrativa">
    </div>

</div>


</body>
</html>
