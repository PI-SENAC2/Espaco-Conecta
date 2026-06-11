<?php

$salas = [

    "1" => [
        "endereco" => "Avenida Carlos Caldeira Filho, 177 Jardim Ângela - São Paulo",
        "descricaoTopo" => "Espaço para locação, ideal para reuniões, eventos, workshops ou atividades profissionais.",
        "descricao" => "Descubra um ambiente moderno e funcional, ideal para profissionais, empresas e equipes que buscam um local confortável e inspirador para trabalhar e realizar reuniões. Nosso espaço de coworking foi pensado para oferecer praticidade, produtividade e bem-estar em um só lugar.",
        "avaliacao" => "4.8",
        "imagens" => [
            "SalaReunião06.png",
            "SalaReunião07.png",
            "SalaReunião08.png",
            "SalaReunião09.png",
            "SalaReunião10.png"
        ]
    ],

    "2" => [
        "endereco" => "Estrada do Campo Limpo, 1200 Campo Limpo - São Paulo",
        "descricaoTopo" => "Sala executiva moderna, ideal para reuniões rápidas, entrevistas e atendimentos profissionais.",
        "descricao" => "Ambiente confortável, silencioso e bem equipado para profissionais que precisam de praticidade, privacidade e boa estrutura.",
        "avaliacao" => "5.0",
        "imagens" => [
            "Sala1.png",
            "Sala2.png",
            "Sala3.png",
            "Sala4.png",
            "Sala5.png"
        ]
    ],

    "3" => [
        "endereco" => "Rua Luís Mateus, 1200 Cidade Tiradentes - São Paulo",
        "descricaoTopo" => "Ambiente compartilhado para trabalho, estudos, networking e produtividade.",
        "descricao" => "Espaço colaborativo pensado para profissionais autônomos, estudantes, freelancers e pequenas equipes.",
        "avaliacao" => "4.9",
        "imagens" => [
            "SalaReunião02.png",
            "SalaReunião02.png",
            "SalaReunião03.png",
            "SalaReunião04.png",
            "SalaReunião05.png"
        ]
    ],

    "4" => [
    "endereco" => "Rua José Francisco dos Santos, 245 - Vila Carmosina, São Paulo - SP",

    "descricaoTopo" => "Sala privativa ideal para trabalho individual, reuniões online, estudos e atendimento profissional.",

    "descricao" => "Ambiente moderno, confortável e totalmente equipado para quem busca privacidade, concentração e produtividade. A sala conta com estação de trabalho ergonômica, internet de alta velocidade, ar-condicionado, televisão para apresentações, quadro branco e iluminação planejada, proporcionando uma experiência profissional em um espaço acolhedor e funcional.",

    "avaliacao" => "4.9",

    "imagens" => [
        "Salaunica02.png",
        "Salaunica01.png",
        "Salaunica03.png",
        "Salaunica04.png",
        "Salaunica05.png"
    ]
],
    "5" => [
    "endereco" => "Rua Antônio de Barros Neto, 188 - Cidade Tiradentes, São Paulo - SP",

    "descricaoTopo" => "Um ambiente que conecta profissionalismo, oportunidade e transformação.",

    "descricao" => "Sala privativa desenvolvida para empreendedores, estudantes, freelancers e profissionais que buscam um local inspirador para produzir, atender clientes ou realizar reuniões. Com design moderno, estrutura premium e elementos que valorizam a identidade das periferias paulistanas, o espaço oferece conforto, tecnologia e tranquilidade para impulsionar projetos, ideias e negócios.",

    "avaliacao" => "4.9",

    "imagens" => [
        "Salatreinamento1.png",
        "Salatreinamento2.png",
        "Salatreinamento3.png",
        "Salatreinamento4.png",
        "Salatreinamento5.png"
    ]
]

];

$slug = $_GET["sala"] ?? "1";

if (!isset($salas[$slug])) {
    $slug = "1";
}

$sala = $salas[$slug];

?>

<!DOCTYPE html>
<html lang="pt-BR">

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

        <section class="info-sala">

            <div class="galeria">

                <img
                    class="img-principal"
                    src="../frontend/assets/img/<?= $sala['imagens'][0]; ?>"
                    alt="Sala">

                <div class="mini-galeria">

                    <?php for ($i = 1; $i < count($sala['imagens']); $i++): ?>

                        <img
                            src="../frontend/assets/img/<?= $sala['imagens'][$i]; ?>"
                            alt="Imagem da sala">

                    <?php endfor; ?>

                </div>

            </div>

        </section>

    </main>

    <section class="divisões">

        <section class="esquerda-info">

            <div class="conteudo">

                <h1><?= $sala['endereco']; ?></h1>

                <p class="descricao-topo">
                    <?= $sala['descricaoTopo']; ?>
                </p>

                <div class="cards-info">

                    <div class="card-info">

                        <img src="../frontend/assets/img/logo-espaço-conecta.svg" alt="Logo Espaço Conecta">

                        <p>
                            Espaço preferido<br>
                            dos nossos<br>
                            clientes!
                        </p>

                        <hr class="vertical">

                        <div class="avaliacao">
                            <p>Conectando</p>
                            <p>Quem faz o corre!</p>
                        </div>

                    </div>

                </div>

                <hr>

                <div class="conteudo-2">

                    <h2>O que o ambiente oferece!</h2>

                    <ul class="beneficios">

                        <div class="icones-beneficio">
                            <img src="../frontend/assets/img/icon-ar.png" alt="">
                            <li>Ar-condicionado</li>
                        </div>

                        <div class="icones-beneficio">
                            <img src="../frontend/assets/img/Icon-TV.png" alt="">
                            <li>Televisão</li>
                        </div>

                        <div class="icones-beneficio">
                            <img src="../frontend/assets/img/Icon-Print.png" alt="">
                            <li>Impressora</li>
                        </div>

                        <div class="icones-beneficio">
                            <img src="../frontend/assets/img/Icon-Filing-Cabinet.png" alt="">
                            <li>Guarda-Volume</li>
                        </div>

                    </ul>

                    <hr>

                    <div class="conteiner-espaco">

                        <h2>Descrição do Espaço</h2>

                        <p class="descricao">
                            <?= $sala['descricao']; ?>
                        </p>

                        <div class="avaliacoes-usuarios">

                            <h2>Avaliações dos Hóspedes</h2>

                            <div id="listaAvaliacoes" class="lista-avaliacoes">

                                <div class="comentario-user">
                                    <div class="user-topo">
                                        <h3>Bruno Martins</h3>
                                        <span>⭐ 5.0</span>
                                    </div>

                                    <p>
                                        Ambiente excelente, muito confortável e organizado.
                                    </p>
                                </div>

                                <div class="comentario-user">
                                    <div class="user-topo">
                                        <h3>Letica Sousa</h3>
                                        <span>⭐ 4.8</span>
                                    </div>

                                    <p>
                                        Espaço muito bonito e silencioso para reuniões.
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section class="direita-info">

            <aside class="sidebar">

                <div class="card-reserva">

                    <h3>RESERVA</h3>
                    <p>7H-18H</p>

                    <div class="calendario">

                        <div>DOM</div>
                        <div>SEG</div>
                        <div>TER</div>
                        <div>QUA</div>
                        <div>QUI</div>
                        <div>SEX</div>
                        <div>SAB</div>

                        <?php for ($dia = 1; $dia <= 31; $dia++): ?>
                            <a href="#"><?= $dia; ?></a>
                        <?php endfor; ?>

                        <a href="#" id="proximo-dia">1</a>
                        <a href="#" id="proximo-dia">2</a>
                        <a href="#" id="proximo-dia">3</a>
                        <a href="#" id="proximo-dia">4</a>

                    </div>

                    <div class="mapa">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5567.088938102533!2d-46.767782!3d-23.665432!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce53b60e501d01%3A0x56ec6dd0cbdcf39!2sMPCont%20Escrit%C3%B3rio%20Cont%C3%A1bil!5e1!3m2!1spt-BR!2sbr!4v1779205049363!5m2!1spt-BR!2sbr"
                            width="300"
                            height="300"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>

                    </div>

                    <a href="./reservas.php" class="button-link">AGENDAR</a>

                </div>

                <div class="avaliacao-box">

                    <span>Avaliações</span>

                    <h1><?= $sala['avaliacao']; ?></h1>

                    <p>Faça a sua avaliação!</p>

                    <input type="text" id="nomeInput" placeholder="Seu nome">

                    <textarea id="comentarioInput" placeholder="Digite seu comentário" rows="4"></textarea>

                    <select id="notaInput">
                        <option value="5.0">⭐ 5.0</option>
                        <option value="4.0">⭐ 4.0</option>
                        <option value="3.0">⭐ 3.0</option>
                        <option value="2.0">⭐ 2.0</option>
                        <option value="1.0">⭐ 1.0</option>
                    </select>

                    <button id="btnAvaliar" class="button-link">
                        ENVIE SUA AVALIAÇÃO
                    </button>
                </div>


            </aside>

        </section>

    </section>

    <footer id="abaixo">
        <?php require_once "../backend/php/includes/footer.inc.php"; ?>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const salaAtual = "<?= $slug; ?>";
            const chaveStorage = "avaliacoes_" + salaAtual;

            const listaAvaliacoes = document.getElementById("listaAvaliacoes");
            const btnAvaliar = document.getElementById("btnAvaliar");

            function criarAvaliacao(nome, comentario, nota) {
                const novaAvaliacao = document.createElement("div");
                novaAvaliacao.classList.add("comentario-user");

                novaAvaliacao.innerHTML = `
                    <div class="user-topo">
                        <h3>${nome}</h3>
                        <span>⭐ ${nota}</span>
                    </div>

                    <p>${comentario}</p>
                `;

                listaAvaliacoes.prepend(novaAvaliacao);
            }

            function carregarAvaliacoes() {
                const avaliacoesSalvas = JSON.parse(localStorage.getItem(chaveStorage)) || [];

                avaliacoesSalvas.forEach(avaliacao => {
                    criarAvaliacao(avaliacao.nome, avaliacao.comentario, avaliacao.nota);
                });
            }

            btnAvaliar.addEventListener("click", () => {

                const nome = document.getElementById("nomeInput").value.trim();
                const comentario = document.getElementById("comentarioInput").value.trim();
                const nota = document.getElementById("notaInput").value;

                if (nome === "" || comentario === "") {
                    alert("Preencha nome e comentário!");
                    return;
                }

                criarAvaliacao(nome, comentario, nota);

                const avaliacoesSalvas = JSON.parse(localStorage.getItem(chaveStorage)) || [];

                avaliacoesSalvas.push({
                    nome: nome,
                    comentario: comentario,
                    nota: nota
                });

                localStorage.setItem(chaveStorage, JSON.stringify(avaliacoesSalvas));

                document.getElementById("nomeInput").value = "";
                document.getElementById("comentarioInput").value = "";
                document.getElementById("notaInput").value = "5.0";
            });

            carregarAvaliacoes();

        });
    </script>

</body>

</html>