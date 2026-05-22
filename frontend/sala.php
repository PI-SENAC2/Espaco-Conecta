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
                <img class="img-principal" src="../frontend/assets/img/Sala2.png" alt="Sala">

                <div class="mini-galeria">
                    <img src="../frontend/assets/img/Sala1.png" alt="">
                    <img src="../frontend/assets/img/Sala3.png" alt="">
                    <img src="../frontend/assets/img/Sala4.png" alt="">
                    <img src="../frontend/assets/img/Sala5.png" alt="">
                </div>
            </div>
        </section>

    </main>

    <section class="divisões">

        <section class="esquerda-info">

            <div class="conteudo">
                <h1>Travessa Borboleta Azul - Vila Gustavo - São Paulo</h1>

                <p class="descricao-topo">
                    Espaço para locação, ideal para reuniões,
                    eventos, workshops ou atividades profissionais.
                </p>

                <div class="cards-info">

                    <div class="card-info">
                        <img src="../frontend/assets/img/logo-espaço-conecta.svg" alt="">

                        <p>
                            Espaço preferido<br> dos nossos<br> clientes!
                        </p>

                        <hr class="vertical">
                        <div class="avaliacao">
                            <p>20</p>
                            <p>Avaliaações</p>
                        </div>

                    </div>

                </div>

                <hr>

                <div class="conteudo-2">
                    <h2>O que o ambiente oferece!</h2>


                    <ul class="beneficios">
                        <div class="icones-beneficio">
                            <img src="../frontend/assets/img/icon-ar.png" alt="">
                            <li> Ar-condicionado</li>
                        </div>
                        <div class="icones-beneficio">
                            <img src="../frontend/assets/img/Icon-TV.png" alt="">
                            <li> Televisão</li>
                        </div>
                        <div class="icones-beneficio">
                            <img src="../frontend/assets/img/Icon-Print.png" alt="">
                            <li> Impressora</li>
                        </div>
                        <div class="icones-beneficio">
                            <img src="../frontend/assets/img/Icon-Filing-Cabinet.png" alt="">
                            <li> Guarda-Volume</li>
                        </div>
                    </ul>

                    <hr>

                    <div class="conteiner-espaco">
                        <h2>Descrição do Espaço</h2>

                        <p class="descricao">
                            Descubra um ambiente moderno e funcional, ideal para profissionais, empresas e equipes que
                            buscam um local confortável e inspirador para trabalhar e realizar reuniões. Nosso espaço de
                            coworking foi pensado para oferecer praticidade, produtividade e bem-estar em um só lugar,
                            produtividade e bem-estar em um só lugar.
                        </p>

                        <!-- AVALIAÇÕES DOS USUÁRIOS -->
                        <div class="avaliacoes-usuarios">

                            <h2>Avaliações dos Hóspedes</h2>

                            <div class="comentario-user">
                                <div class="user-topo">
                                    <h3>Bruno Martins</h3>
                                    <span>⭐ 5.0</span>
                                </div>

                                <p>
                                    Ambiente excelente, muito confortável e organizado.
                                    Internet rápida e ótimo atendimento.
                                </p>
                            </div>

                            <div class="comentario-user">
                                <div class="user-topo">
                                    <h3>Ana Souza</h3>
                                    <span>⭐ 4.8</span>
                                </div>

                                <p>
                                    Espaço muito bonito e silencioso para reuniões.
                                    Voltarei mais vezes!
                                </p>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </section>


        <!-- LADO DIREITO -->
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

                        <!-- Dias -->
                        <a href="">1</a>
                        <a href="">2</a>
                        <a href="">3</a>
                        <a href="">4</a>
                        <a href="">5</a>
                        <a href="">6</a>
                        <a href="">7</a>
                        <a href="">8</a>
                        <a href="">9</a>
                        <a herf="">10</a>
                        <a herf="">11</a>
                        <a herf="">12</a>
                        <a herf="">13</a>
                        <a herf="">14</a>
                        <a herf="">15</a>
                        <a herf="">16</a>
                        <a herf="">17</a>
                        <a herf="">18</a>
                        <a herf="">19</a>
                        <a herf="">20</a>
                        <a herf="">21</a>
                        <a herf="">22</a>
                        <a herf="">23</a>
                        <a herf="">24</a>
                        <a herf="">25</a>
                        <a herf="">26</a>
                        <a herf="">27</a>
                        <a herf="">28</a>
                        <a herf="">29</a>
                        <a herf="">30</a>
                        <a herf="">31</a>
                        <a herf="" id="proximo-dia">1</a>
                        <a herf="" id="proximo-dia">2</a>
                        <a herf="" id="proximo-dia">3</a>
                        <a herf="" id="proximo-dia">4</a>

                    </div>
                    <div class="mapa">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5567.088938102533!2d-46.767782!3d-23.665432!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce53b60e501d01%3A0x56ec6dd0cbdcf39!2sMPCont%20Escrit%C3%B3rio%20Cont%C3%A1bil!5e1!3m2!1spt-BR!2sbr!4v1779205049363!5m2!1spt-BR!2sbr"
                            width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                    <a href="./reservas.php" class="button-link">AGENDAR</a>

                </div>

                </div>
                <div class="avaliacao-box">
                    <a herf="">Avaliações</a herf="">

                    <h1>4.8</h1>

                    <p>Faça a sua avaliação!</p>

                    <input type="text" placeholder="Comentar">

                </div>
                <a href="#" class="button-link">ENVIE SUA AVALIAÇÃO</a>

            </aside>
        </section>
    </section>



    <footer id="abaixo">
        <?php require_once "../backend/php/includes/footer.inc.php"; ?>
    </footer>


</body>

</html>