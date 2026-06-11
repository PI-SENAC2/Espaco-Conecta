<?php 
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>

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
<!--------------------------------HEADER------------------------------------>
    <?php require_once "../backend/php/includes/navbar.inc.php"; ?>
    <!--Títulos-->
<div class="titulos">
    <h1>Reservas</h1>
</div>
            <section class="sections">
<!-------------------------------RESERVAS----------------------------------->
<section class="reservas">

<h2>Status do espaço</h2>
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
<section class="pesquisa">
    <!-- CALENDÁRIO -->
    <div class="calendar">
        <div class="titulo">
            <div id="prev" class="btn"><i class="fa-solid fa-arrow-left"></i></div>
            <div id="month-year"></div>
            <div id="next" class="btn"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
        <div class="weekdays">
            <div>Sun</div><div>Mon</div><div>Tue</div><div>Wed</div>
            <div>Thu</div><div>Fri</div><div>Sat</div>
        </div>
        <div class="days" id="days"></div>
    </div>

    <!-- FILTRO + REGIÃO (estrutura corrigida) -->
    <form method="GET" action="reservas.php">
    <div class="filtro">
        <h3>Tipo do espaço</h3>
        <div class="tipos">
            <label class="privado">
                <input type="radio" name="tipo" id="privado" value="Privado">
                <label for="privado" class="privado">
                <h4>Privado</h4>
                <p>Um ambiente reservado e confortável para quem busca foco,privacidade e máxima produtividade.</p>
            </label>
            <input type="radio" name="tipo" id="grupo" value="Grupo">
            <label for="grupo" class="grupo">
            <h4>Grupo</h4>
                <p>Um espaço pensado para colaboração, criatividade e conexãoentre equipes.</p>
            </label>
        </div>

        <div class="regiao">
            <label for="regiao">Região</label>
            <select name="regiao" id="regiao">
                <option value="">Todas as regiões</option>
                <option value="Norte">Norte</option>
                <option value="Nordeste">Nordeste</option>
                <option value="Centro-Oeste">Centro-Oeste</option>
                <option value="Sudeste">Sudeste</option>
                <option value="Sul">Sul</option>
            </select>

            <div class="botoes">
                <input type="submit" id="enviar" value="Buscar">
                <input type="reset" id="cancelar" value="Limpar filtros">
            </div>
    </form>

</section>
</section>
<!--------------------------------FOOTER------------------------------------>
</section>
<footer>
    <?php require_once "../backend/php/includes/footer.inc.php"; ?>
</footer>

</body>
<script src="./src/js/calendar.js"></script>
<script src="./src/js/perfil.js"></script>
</html>