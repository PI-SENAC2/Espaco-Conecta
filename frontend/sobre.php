<?php
session_start();
include '../backend/php/includes/navbar.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="stylesheet" href="./src/style/sobre.css">
    <link rel="stylesheet" href="./src/style/global.css">
    <link rel="shortcut icon" href="./assets/img/Favicon-espaçoConecta.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!--------- Header ----------->
    <?php require_once "../backend/php/includes/navbar.inc.php"; ?>

    <section id="home" class="hero">
        <div class="hero-content">

            <h1><span id="laranja">SOBRE</span> COWORKING</h1>
            <p>Conectando Quem Faz o Corre!</p>
        </div>
    </section>

    <!-- Sobre nos -->

    <section class="informacoes">
        <div class="info">
            <h1>MUITO ALÉM DE UM ESPAÇO DE TRABALHO</h1>

            <p>Descubra um ambiente pensado para inspirar, conectar e proporcionar experiências completas. Aqui, você
                encontra não só áreas para trabalhar, mas também espaços para eventos, convivência, criação de conteúdo,
                encontros sociais e momentos especiais.</p>
        </div>

        <div class="num">
            <div class="alinha-num">
                <h2 class="size-num">+ 6</h2>
                <p><b>Espaços Para Reuniões</b></p>
            </div>
            <div class="alinha-num">
                <h2 class="size-num">+ 4</h2>
                <p><b>Espaços Para Treinamentos</b></p>
            </div>
            <div class="alinha-num">
                <h2 class="size-num">+ 3</h2>
                <p><b>Espaços Para Produção</b></p>
            </div>
            <div class="alinha-num">
                <h2 class="size-num">+ 10</h2>
                <p><b>Espaços Para Trabalhos Individual</b></p>
            </div>
        </div>

        <hr>

        <div class="historia">
            <div class="box-historia">

                <h2>A HISTORIA DO ESPAÇO CONECTA</h2>

                <p>A Espaço Conecta nasceu com um propósito simples, mas poderoso: criar oportunidades reais para quem
                    está na correria do dia a dia e precisa de um lugar digno, acessível e inspirador para trabalhar.
                    Localizada na periferia, a Espaço Conecta surge como um ponto de encontro entre sonhos e ação.
                    Sabemos que grandes ideias não vêm apenas de grandes centros, elas vêm de pessoas determinadas, que
                    fazem acontecer todos os dias.
                    Por isso, criamos um ambiente moderno, funcional e acolhedor, pensado para quem empreende, estuda,
                    cria e luta pelo seu crescimento. Aqui, cada conexão importa, cada projeto tem valor e cada pessoa
                    tem espaço.</p>
            </div>
        </div>


    </section>

   <section class="missao-visao-valores">

    <!-- MISSÃO -->
    <div class="box">
        <img src="./assets/img/IconAlvo.svg" alt="">

        <div class="texto">
            <h2>Missão</h2>

            <p>
                Conectar pessoas, ideias e oportunidades,
                oferecendo um ambiente acessível e de qualidade.
            </p>
        </div>
    </div>

    <!-- VISÃO -->
    <div class="box reverso">

        <div class="texto">
            <h2>Visão</h2>

            <p>
                Ser referência em espaços colaborativos
                na periferia.
            </p>
        </div>

        <img src="./assets/img/IconCoracao.svg" alt="">
    </div>

    <!-- VALORES -->
    <div class="box">
        <img src="./assets/img/IconOlho.svg" alt="">

        <div class="texto">
            <h2>Valores</h2>

            <p>
                Acessibilidade, inovação,
                respeito, conexão e comunidade.
            </p>
        </div>
    </div>

</section>


    <!----------------------------MAYKON---------------------------->
    <section class="para-quem">
        <div class="quem-tem">
            <img src="../frontend/assets/img/quem-tem1.png" alt="">
            <img src="../frontend/assets/img/quem-tem2.png" alt="">
            <div class="text-1">
                <h2>Para quem tem espaço</h2>
                <p>Pequenos comerciantes com salões ou salas ociosas
                    Líderes comunitários com espaços para fortalecer a região
                    Proprietários de imóveis que querem renda extra
                    Qualquer pessoa com um espaço que pode ser útil para a comunidade</p>
            </div>
        </div>
        <div class="quem-busca">
            <div class="text-2">
                <h2>Para quem busca espaço</h2>
                <p>Profissionais autônomos que querem sair de casa sem ir até o centro
                    Empreendedores que precisam de espaço
                    Estudantes que buscam um ambiente tranquilo para estudar
                    Grupos que precisam de local para reuniões ou eventos</p>
            </div>
            <img src="../frontend/assets/img/quem-busca1.png" alt="">
            <img src="../frontend/assets/img/quem-busca2.png" alt="">
        </div>

    </section>

    <section class="contatos">
        <h1>FALE CONOSCO</h1>
        <div class="icones">
            <div class="telefone">
                <img src="../frontend/assets/img/Phone.svg" alt="">
                <h3>(14) 2999-4093</h3>
            </div>
            <div class="whatsapp">
                <img src="../frontend/assets/img/whatsapp.svg" alt="">
                <h3>(14) 98820-6986</h3>
            </div>
            <div class="localizacao">
                <img src="../frontend/assets/img/Location.svg" alt="">
                <h3>18688-970</h3>
            </div>
        </div>
        <div class="formulario">
    <div class="fundo">
        <form class="formularios" id="contatoForm">
    <h2>ENTRE EM CONTATO</h2>

    <input type="text" name="nome" placeholder="Nome" required>
    <input type="email" name="email" placeholder="Email" required>

    <textarea name="mensagem" placeholder="Mensagem" required></textarea>

    <button type="submit" class="enviar-button">ENVIAR</button>

    <p id="mensagem-sucesso"
   style="display:none;color:lime;font-size:15px;">
   Mensagem enviada com sucesso!
</p>
</form>
    </div>
</div>
        </div>
        <!----------FORMULÁRIO---------->
    </section>

    <!----------FOOTER---------->
    <?php require_once "../backend/php/includes/footer.inc.php"; ?>
    <script src="./src/js/sobre.js"></script>
    <script src="./src/js/perfil.js"></script>
</body>
