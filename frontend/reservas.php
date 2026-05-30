<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="./src/style/reservas.css"><link rel="stylesheet" href="./src/style/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="shortcut icon" href="./assets/img/Favicon-espaçoConecta.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>
<body>
    <!-- HEADER -->
    <?php require_once "../backend/php/includes/navbar.inc.php"; ?>
    <!--Títulos-->
    <div class="titulos">
            <h2>Perfil</h2>
            <h1>Reservas</h1>
            <h2>Preferências</h2>
        </div>

    <section class="sections">
    <!--Perfil-->
        <section class="perfil">
            <!--Foto e nome-->
            <div class="usuario">
                <div class="foto-perfil"></div>
                <h2>Nome</h2>
            </div>

            <!--Descrição-->
            <div class="card">
            <h3>Descrição</h3>
            <p>Descrição top.</p>
            </div>

            <div class="card">
            <h3>Redes sociais</h3>
            <p>Instagram:</p>
            <p>Linkedin</p>
            <p>Github</p>
            </div>
            
            <!--Empresa-->
            <div class="card-empresa">
            <h3>Empresa</h3>
            <p>Nome da empresa ou local de trabalho</p>
            </div>
        </section>
    <!--Reservas-->

        <section class="reservas">
            <h2>Status do espaço</h2>
    <!--Cards com os status-->
            <div class="status">
                <div class="feriados">
                    <h3>Feriados</h3>
                    <p>É permitido a disponibilização do espaço em dias de feriado.</p>
                </div>
                <div class="disponiveis">
                    <h3>Disponíveis</h3>
                    <p>Quando o seu espaço vai estar disponível para ser reservado.</p>
                </div>
                <div class="bloqueados">
                    <h3>Bloqueados</h3>
                    <p>Dias em que não deseja a disponibilização do espaço.</p>
                </div>
            </div>
    <!--Calendário-->
<div class="calendar">
        <div class="titulo">
            <div id="prev" class="btn"><i class="fa-solid fa-arrow-left"></i></div>
            <div id="month-year"></div>
            <div id="next" class="btn"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
        <div class="weekdays">
            <div>Sun</div>
            <div>Mon</div>
            <div>Tue</div>
            <div>Wed</div>
            <div>Thu</div>
            <div>Fri</div>
            <div>Sat</div>
        </div>
        <div class="days" id="days"></div>
    </div>

<!--Espaços cadastrados-->
<div class="espacos">
    <h3>Espaços cadastrados</h3>
</div>
        </section>


<!--Preferências-->
<section class="preferencias">
    <div class="painel-preferencias">
        <div class="titulo-preferencias">
            <h3>Filtros</h3>
        </div>

        <div class="horarios">
            <span>Horários</span>
            <p>Manhã</p>
            <div class="manha">
            <button class="horario">07:00</button>
            <button class="horario">08:00</button>
            <button class="horario">09:00</button>
            <button class="horario">10:00</button>
            <button class="horario">Todos</button>

            </div>
            <div class="tarde">
            <button class="horario">12:00</button>
            <button class="horario">14:00</button>
            <button class="horario">16:00</button>
            <button class="horario">18:00</button>
            <button class="horario">Todos</button>
            </div>
            <div class="noite">
            <button class="horario">19:00</button>
            <button class="horario">20:00</button>
            <button class="horario">21:00</button>
            <button class="horario">22:00</button>
            <button class="horario">Todos</button>
            </div>
           
        </div>

        <div class="tipo-espaco">
            <h3>Tipo do espaço</h3>
            <div class="privado">
                <h4>Privado</h4>
                <p>Um ambiente reservado e confortável para quem busca foco, privacidade e máxima produtividade. Ideal para reuniões online, estudos ou trabalho individual sem distrações.</p>
            </div>
            <div class="grupo">
                <h4>Grupo</h4>
                <p>Um espaço pensado para colaboração, criatividade e conexão entre equipes. Perfeito para reuniões, brainstorms, networking e projetos em grupo em um ambiente moderno e inspirador.</p>
            </div>
        </div>

        <div class="dia">
            <h3>Dia</h3>
            <input type="date">
        </div>

        <div class="tipo-espaco">
            <span>Tipo do Espaço</span>
            <button class="horario"><img src="./assets/img/ar-condicionado.svg" alt=""></button>
            <button class="horario"><img src="./assets/img/cafe.svg" alt=""></button>
            <button class="horario"><img src="./assets/img/guarda-volume.svg" alt=""></button>
            <button class="horario"><img src="./assets/img/projetor.svg" alt=""></button>
            <button class="horario"><img src="./assets/img/acessibilidade.svg" alt=""></button>
            <button class="horario"><img src="./assets/img/impressora.svg" alt=""></button>
            <button class="horario"><img src="./assets/img/garagem.svg" alt=""></button>
            <button class="horario"><img src="./assets/img/cozinha.svg" alt=""></button>
        </div>
        <div class="botoes">
        <button>Limpar Filtros</button>
        <button>Adicionar Espaço</button>
        </div>
    </div>

    
</section>

</section>

<footer>
    <?php require_once "../backend/php/includes/footer.inc.php"; ?>
</footer>

</body>
<script src="./src/js/calendar.js"></script>
</html>