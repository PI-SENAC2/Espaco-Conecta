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
     
    <?php require_once "../backend/php/includes/navbar.inc.php"; ?>

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
            <a href="#sobre" class="saiba-mais">SAIBA MAIS</a>
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

    <h2 class="text-center">NOSSOS ESPAÇOS</h2>
    <section class="cards">
        <div class="card">
            <img src="../frontend/assets/img/SalaReunião05.png" alt="">
            <div class="card-conteiner">
                <h2>Salas de Reunião</h2>
                <div class="button-card">
                    <a href="">Acessar</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="../frontend/assets/img/SalaReunião03.png" alt="">
            <div class="card-conteiner">
                <h2>Salas Individuais</h2>
                <div class="button-card">
                    <a href="">Acessar</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="../frontend/assets/img/SalaReunião04.png" alt="">
            <div class="card-conteiner">
                <h2>Salas de Treinamento</h2>
                <div class="button-card">
                    <a href="">Acessar</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FILTROS -->

    <div class="conteiner-filtros">

        <aside class="filtros">
            <div class="conteiner-space">
                <h2>Filtros</h2>
                <h3>Espaços</h3>
                <label><input type="checkbox" id="checxkbox" value="individual"> Individual</label>
                <label><input type="checkbox" value="reuniao"> Sala de Reunião</label>
                <label><input type="checkbox" value="equipe"> Equipe</label>

                <h3>Infraestrutura</h3>
                <label><input type="checkbox" value="wifi"> Wi-Fi</label>
                <label><input type="checkbox" value="cozinha"> Cozinha</label>
                <label><input type="checkbox" value="projetor"> Projetor</label>
                <label><input type="checkbox" value="ar"> Ar-Condicionado</label>
                <label><input type="checkbox" value="impressora"> Impressora</label>

                <h3>Capacidade</h3>
                <label><input type="checkbox" value="1-2"> 1-2 Pessoas</label>
                <label><input type="checkbox" value="3-5"> 3-5 Pessoas</label>

            </div>
            <button id="limpar" class="button-card">
                <div class="conteiner-button">
                    <a href="#" id="limpar">Limpar Filtros</a>
                </div>
            </button>
        </aside>

        <main class="produtos" id="listaProdutos">

            <div class="top-bar">
                <input type="text" id="searchInput" placeholder="Localização">
                <button id="btnPesquisar">Pesquisar</button>
            </div>

            <div class="colab-card">
                <div class="card" data-espaco="individual" data-capacidade="1-2">
                    <img src="./assets/img/SalaReunião01.png">
                    <div class="colab-titulo">
                        <h4>Sala Individual</h4>
                        <p>Espaço para locação, ideal para reuniões, eventos, workshops ou atividades profissionais.</p>
                        <button class="button-reserva">Reservar</button>
                    </div>
                </div>
    
                <div class="card" data-espaco="reuniao" data-capacidade="3-5">
                    <img src="./assets/img/SalaReunião03.png">
                    <div class="colab-titulo">
                        <h4>Reunião</h4>
                        <p>Espaço para locação, ideal para reuniões, eventos, workshops ou atividades profissionais.</p>
                        <button class="button-reserva">Reservar</button>
                </div>
            </div>

            <script src="./src/js/pesquisa.js"></script>
        </main>
    </div>

    <?php require_once "../backend/php/includes/footer.inc.php"; ?>

</body>

</html>
</body>

</html>