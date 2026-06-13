<?php
session_start();
include '../backend/php/includes/navbar.inc.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço Conecta</title>
    <link rel="stylesheet" href="./src/style/index.css">
    <link rel="stylesheet" href="./src/style/global.css">
    <link rel="shortcut icon" href="./assets/img/Favicon-espaçoConecta.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- HERO (seção principal) -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1><span id="laranja">ESPAÇO </span> CONECTA</h1>
            <p>Conectando Quem Faz o Corre!</p>
        </div>
    </section>


    <!-- Sobre nos -->
    <section id="sobre" class="sobre-nos">
        <div class="sobre-text">
            <h2>SOBRE NÓS</h2>
            <p>O Espaço Conecta é um coworking comunitário localizado na periferia, criado para oferecer estrutura,
                networking e oportunidades para empreendedores, estudantes e profissionais da comunidade, promovendo
                inovação, colaboração e desenvolvimento local.</p>
            <a href="./sobre.php" class="saiba-mais">SAIBA MAIS</a>
        </div>
        <div class="adicional-text">
            <h2><span id="maior">+10</span> Espaços</h2>
            <p>Para Trabalhos Individuais Ou Em Equipe</p>
            <div class="adicional-text2">
                <h2><span id="maior">+3</span> Espaços</h2>
                <p>Para Produção & Conteúdo</p>
            </div>
        </div>

    </section>

    <h2 class="text-center">TIPOS DE ESPAÇOS</h2>
    <section class="cards">
        <div class="card" id="card-main">
            <img src="../frontend/assets/img/SalaReunião05.png" alt="">
            <div class="card-conteiner">
                <h2>Salas de Reunião</h2>
                <div class="button-card">
                    <a href="./reservas.php">Acessar</a>
                </div>
            </div>
        </div>
        <div class="card" id="card-main">
            <img src="../frontend/assets/img/SalaReunião03.png" alt="">
            <div class="card-conteiner">
                <h2>Salas Individuais</h2>
                <div class="button-card">
                    <a href="./reservas.php">Acessar</a>
                </div>
            </div>
        </div>
        <div class="card" id="card-main">
            <img src="../frontend/assets/img/SalaReunião04.png" alt="">
            <div class="card-conteiner">
                <h2>Salas de Treinamento</h2>
                <div class="button-card">
                    <a href="./reservas.php">Acessar</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FILTROS -->


    <div class="center-cartoes">
        <div class="card-conteirner">
            <div class="top-bar">
                <h1>ESPAÇOS RECOMENDADOS</h1>
            </div>



            <div class="card-sala">

                <img src="../frontend/assets/img/Salatrabalho01.jpeg" alt="Sala de Treinamento" class="card-img">

                <div class="card-info">
                    <h3>Avenida dos Metalúrgicos, 1450 - Cidade Tiradentes, São Paulo</h3>

                    <p>
                        Espaço para locação, ideal para reuniões, eventos,
                        workshops ou atividades profissionais.
                    </p>

                    <div class="preco">
                        <span>Preço mínimo:</span>
                        <strong>R$5,00</strong>
                    </div>

                    <div class="comodidades">

                        <img src="./assets/img/ar-condicionado.svg" alt="">

                        <img src="./assets/img/cafe.svg" alt="">

                        <img src="./assets/img/guarda-volume.svg" alt="">

                    </div>
                </div>

                <div class="box-btn">
                    <a href="sala.php?sala=6" class="btn-buscar">Buscar</a>

                </div>
            </div>
            <div class="card-sala">

                <img src="../frontend/assets/img/SalaReunião05.png" alt="Sala de Treinamento" class="card-img">

                <div class="card-info">
                    <h3>Rua Luís Mateus, 1200 Cidade Tiradentes - São Paulo</h3>

                    <p>
                        Espaço para locação, ideal para reuniões, eventos,
                        workshops ou atividades profissionais.
                    </p>

                    <div class="preco">
                        <span>Preço mínimo:</span>
                        <strong>R$5,00</strong>
                    </div>

                    <div class="comodidades">
                        <img src="./assets/img/ar-condicionado.svg" alt="">

                        <img src="./assets/img/cafe.svg" alt="">

                        <img src="./assets/img/guarda-volume.svg" alt="">

                    </div>
                </div>

                <div class="box-btn">
                    <a href="sala.php?sala=3" class="btn-buscar">Buscar</a>

                </div>

            </div>
            <div class="card-sala">

                <img src="../frontend/assets/img/SalaReunião06.png" alt="Sala de Treinamento" class="card-img">

                <div class="card-info">
                    <h3>Avenida Carlos Caldeira Filho, 177 Jardim Ângela - São Paulo</h3>

                    <p>
                        Espaço para locação, ideal para reuniões, eventos,
                        workshops ou atividades profissionais.
                    </p>

                    <div class="preco">
                        <span>Preço mínimo:</span>
                        <strong>R$5,00</strong>
                    </div>

                    <div class="comodidades">

                        <img src="./assets/img/ar-condicionado.svg" alt="">

                        <img src="./assets/img/cafe.svg" alt="">

                        <img src="./assets/img/guarda-volume.svg" alt="">
                    </div>
                </div>

                <div class="box-btn">
                    <a href="sala.php?sala=1" class="btn-buscar">Buscar</a>

                </div>
            </div>
        </div>

    </div>

    <footer>
        <?php require_once "../backend/php/includes/footer.inc.php"; ?>
    </footer>

</body>
<script src="./src/js/perfil.js"></script>

</html>