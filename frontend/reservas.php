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
<?php

require_once "../backend/php/includes/config.php";

$tipo = $_GET['tipo'] ?? '';
$regiao = $_GET['regiao'] ?? '';

$sql = "
SELECT *
FROM salas
WHERE 1=1
";

if($tipo != ''){
    $sql .= " AND tipo = '$tipo'";
}

if($regiao != ''){
    $sql .= " AND regiao = '$regiao'";
}

$result = mysqli_query($conexao, $sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="./src/style/reservas.css">
    <link rel="stylesheet" href="./src/style/global.css">
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
                        <div id="prev" class="btn">
                            <i class="fa-solid fa-arrow-left"></i>
                        </div>

                        <div id="month-year"></div>

                        <div id="next" class="btn">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>

                    <div class="weekdays">
                        <div>Dom</div>
                        <div>Seg</div>
                        <div>Ter</div>
                        <div>Qua</div>
                        <div>Qui</div>
                        <div>Sex</div>
                        <div>Sáb</div>
                    </div>

                    <div class="days" id="days"></div>

                </div>

                <!-- FILTROS -->
                <form method="GET" action="reservas.php" class="filtro">

                    <input type="hidden" name="data" id="dataSelecionada">

                    <h3>Tipo do espaço</h3>

                    <div class="tipos">

                        <input type="radio" name="tipo" id="privado" value="Privado">

                        <label for="privado" class="card-tipo">
                            <h4>Privado</h4>
                            <p>
                                Um ambiente reservado e confortável para quem busca foco,
                                privacidade e produtividade.
                            </p>
                        </label>

                        <input type="radio" name="tipo" id="grupo" value="Grupo">

                        <label for="grupo" class="card-tipo">
                            <h4>Grupo</h4>
                            <p>
                                Um espaço pensado para colaboração,
                                criatividade e conexão entre equipes.
                            </p>
                        </label>

                    </div>

                    <div class="regiao">

                        <label for="regiao">Estados</label>

                        <select name="regiao" id="regiao">
                            <option value="">Todos os estados</option>
                            <option value="Norte">São Paulo</option>
                            <option value="Nordeste">Nordeste</option>
                            <option value="Centro-Oeste">Centro-Oeste</option>
                            <option value="Sudeste">Sudeste</option>
                            <option value="Sul">Sul</option>
                        </select>

                    </div>

                    <div class="botoes">
                        <button type="submit" id="enviar">
                            Buscar Espaços
                        </button>

                        <a href="reservas.php" id="cancelar">
                            Limpar
                        </a>
                    </div>

                </form>

            </section>
        </section>
        <?php
$salas = [
    "1" => [
        "tipo" => "Grupo",
        "regiao" => "Sudeste",
        "endereco" => "Avenida Carlos Caldeira Filho, 177 Jardim Ângela - São Paulo",
        "descricaoTopo" => "Espaço para locação, ideal para reuniões, eventos, workshops ou atividades profissionais.",
        "imagens" => ["SalaReunião06.png"]
    ],
    "2" => [
        "tipo" => "Privado",
        "regiao" => "Sul",
        "endereco" => "Estrada do Campo Limpo, 1200 Campo Limpo - São Paulo",
        "descricaoTopo" => "Sala executiva moderna, ideal para reuniões rápidas, entrevistas e atendimentos profissionais.",
        "imagens" => ["Sala1.png"]
    ],
    "3" => [
        "tipo" => "Grupo",
        "regiao" => "Norte",
        "endereco" => "Rua Luís Mateus, 1200 Cidade Tiradentes - São Paulo",
        "descricaoTopo" => "Ambiente compartilhado para trabalho, estudos, networking e produtividade.",
        "imagens" => ["SalaReunião05.png"]
    ],
    "4" => [
        "tipo" => "Privado",
        "regiao" => "Sudeste",
        "endereco" => "Rua José Francisco dos Santos, 245 - Vila Carmosina, São Paulo - SP",
        "descricaoTopo" => "Sala privativa ideal para trabalho individual, reuniões online, estudos e atendimento profissional.",
        "imagens" => ["Salaunica02.png"]
    ],
    "5" => [
        "tipo" => "Grupo",
        "regiao" => "Centro-Oeste",
        "endereco" => "Rua Antônio de Barros Neto, 188 - Cidade Tiradentes, São Paulo - SP",
        "descricaoTopo" => "Um ambiente que conecta profissionalismo, oportunidade e transformação.",
        "imagens" => ["Salatreinamento1.png"]
    ],
    "6" => [
        "tipo" => "Grupo",
        "regiao" => "Centro-Oeste",
        "endereco" => "Avenida dos Metalúrgicos, 1450 - Cidade Tiradentes, São Paulo - SP",
        "descricaoTopo" => "Ambiente privativo desenvolvido para quem precisa de conforto, tecnologia e produtividade.",
        "imagens" => ["Salaunica01.png"]
    ],
];

$tipo = $_GET['tipo'] ?? '';
$regiao = $_GET['regiao'] ?? '';
$data = $_GET['data'] ?? '';

$salasFiltradas = [];

foreach ($salas as $id => $sala) {
    if ($tipo != '' && $sala['tipo'] != $tipo) {
        continue;
    }

    if ($regiao != '' && $sala['regiao'] != $regiao) {
        continue;
    }

    $salasFiltradas[$id] = $sala;
}
?>

        <div class="center-cartoes">
            <div class="card-conteirner">


                <?php if (count($salasFiltradas) > 0): ?>

                <?php foreach ($salasFiltradas as $id => $sala): ?>

                <div class="card-sala">

                    <img src="../frontend/assets/img/<?= $sala['imagens'][0] ?>" alt="Sala disponível" class="card-img">

                    <div class="card-info">

                        <h3><?= $sala['endereco'] ?></h3>

                        <p><?= $sala['descricaoTopo'] ?></p>

                        <div class="preco">
                            <span>Preço mínimo:</span>
                            <strong>R$5,00</strong>
                        </div>

                        <div class="comodidades">
                            <img src="./assets/img/ar-condicionado.svg" alt="Ar-condicionado">
                            <img src="./assets/img/cafe.svg" alt="Café">
                            <img src="./assets/img/guarda-volume.svg" alt="Guarda-volume">
                        </div>

                    </div>

                    <div class="box-btn">
                        <a href="sala.php?sala=<?= $id ?>&data=<?= $data ?>" class="btn-buscar">
                            Buscar
                        </a>
                    </div>

                </div>

                <?php endforeach; ?>

                <?php else: ?>

                <p class="sem-resultados">
                    Nenhum espaço encontrado com esses filtros.
                </p>

                <?php endif; ?>

            </div>
        </div>

        <!--------------------------------FOOTER------------------------------------>
    </section>


    <footer>
        <?php require_once "../backend/php/includes/footer.inc.php"; ?>
    </footer>

    <script>
    const days = document.getElementById("days");
    const monthYear = document.getElementById("month-year");

    const prev = document.getElementById("prev");
    const next = document.getElementById("next");

    const dataSelecionada = document.getElementById("dataSelecionada");

    let currentDate = new Date();

    function renderCalendar() {

        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();

        const firstDay = new Date(year, month, 1).getDay();
        const lastDate = new Date(year, month + 1, 0).getDate();

        const months = [
            "Janeiro", "Fevereiro", "Março",
            "Abril", "Maio", "Junho",
            "Julho", "Agosto", "Setembro",
            "Outubro", "Novembro", "Dezembro"
        ];

        monthYear.innerHTML = months[month] + " " + year;

        days.innerHTML = "";

        for (let i = 0; i < firstDay; i++) {
            days.innerHTML += `<div class="fade"></div>`;
        }

        for (let i = 1; i <= lastDate; i++) {

            const dataFormatada =
                year + "-" +
                String(month + 1).padStart(2, "0") + "-" +
                String(i).padStart(2, "0");

            days.innerHTML += `
    <div class="dia" data-date="${dataFormatada}">
        ${i}
    </div>
`;
        }

        document.querySelectorAll(".dia").forEach(dia => {

            dia.addEventListener("click", function() {

                document
                    .querySelectorAll(".dia")
                    .forEach(item => item.classList.remove("selecionado"));

                this.classList.add("selecionado");

                dataSelecionada.value = this.dataset.date;
            });

        });

    }

    prev.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
    });

    next.addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar();
    });

    renderCalendar();
    </script>

</body>
</html>