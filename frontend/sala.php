<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala de Treinamento</title>
    <link rel="stylesheet" href="./src/style/global.css">
    <link rel="stylesheet" href="./src/style/sala.css">
    <link rel="shortcut icon" href="./assets/img/Favicon-espaçoConecta.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>
<body>
    
<?php require_once "../backend/php/includes/navbar.inc.php"; ?>

<main class="detalhes-sala">

    <!-- LADO ESQUERDO -->
    <section class="info-sala">

        <div class="galeria">
            <img class="img-principal"
                src="../frontend/assets/img/SalaReunião05.png"
                alt="Sala">

            <div class="mini-galeria">
                <img src="../frontend/assets/img/SalaReunião05.png" alt="">
                <img src="../frontend/assets/img/SalaReunião05.png" alt="">
                <img src="../frontend/assets/img/SalaReunião05.png" alt="">
                <img src="../frontend/assets/img/SalaReunião05.png" alt="">
            </div>
        </div>

        <div class="conteudo">
            <h1>Travessa Borboleta Azul - Vila Gustavo - São Paulo</h1>

            <p class="descricao-topo">
                Espaço para locação, ideal para reuniões,
                eventos, workshops ou atividades profissionais.
            </p>

            <div class="cards-info">

                <div class="card-info">
                    <span>Preço</span>
                    <strong>R$400</strong>
                </div>

                <div class="card-info">
                    <span>Avaliação</span>
                    <strong>5.0 ⭐</strong>
                </div>

                <div class="card-info">
                    <span>Avaliações</span>
                    <strong>25</strong>
                </div>

            </div>

            <hr>

            <h2>O que o ambiente oferece:</h2>

            <ul class="beneficios">
                <li>❄️ Ar-condicionado</li>
                <li>📺 Televisão</li>
                <li>🖨️ Impressora</li>
                <li>🎒 Guarda-volume</li>
            </ul>

            <hr>

            <h2>Descrição do Espaço</h2>

            <p class="descricao">
                Descubra um ambiente moderno e funcional,
                ideal para profissionais, empresas e equipes
                que buscam um local confortável e inspirador
                para trabalhar e realizar reuniões.
            </p>

        </div>
    </section>

    <!-- LADO DIREITO -->
    <aside class="sidebar">

        <div class="card-reserva">
            <h3>RESERVA</h3>

            <div class="calendario">

                <div>DOM</div>
                <div>SEG</div>
                <div>TER</div>
                <div>QUA</div>
                <div>QUI</div>
                <div>SEX</div>
                <div>SAB</div>

                <!-- Dias -->
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>5</span>
                <span>6</span>
                <span>7</span>

            </div>

            <button>AGENDAR</button>
        </div>

        <div class="mapa">
            <img src="./assets/img/mapa.png" alt="">
        </div>

        <div class="avaliacao-box">
            <span>Avaliações</span>

            <h1>4.8</h1>

            <p>Faça a sua avaliação!</p>

            <input type="text" placeholder="Comentar">

            <button>ENVIAR</button>
        </div>

    </aside>

</main>

</body>
</html>