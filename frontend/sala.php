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
                        <span>1</span>
                        <span>2</span>
                        <span>3</span>
                        <span>4</span>
                        <span>5</span>
                        <span>6</span>
                        <span>7</span>
                        <span>8</span>
                        <span>9</span>
                        <span>10</span>
                        <span>11</span>
                        <span>12</span>
                        <span>13</span>
                        <span>14</span>
                        <span>15</span>
                        <span>16</span>
                        <span>17</span>
                        <span>18</span>
                        <span>19</span>
                        <span>20</span>
                        <span>21</span>
                        <span>22</span>
                        <span>23</span>
                        <span>24</span>
                        <span>25</span>
                        <span>26</span>
                        <span>27</span>
                        <span>28</span>
                        <span>29</span>
                        <span>30</span>
                        <span>31</span>
                        <span id="proximo-dia">1</span>
                        <span id="proximo-dia">2</span>
                        <span id="proximo-dia">3</span>
                        <span id="proximo-dia">4</span>

                    </div>
                    <div class="mapa">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1213.138224705454!2d-46.76541312008867!3d-23.65997988435086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5388c4ee6147%3A0xf3190cacc306c077!2sFitClass%20CT%20de%20Lutas!5e0!3m2!1spt-BR!2sbr!4v1778815531345!5m2!1spt-BR!2sbr"
                            width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                   
                       <a href="./reservas.php" class="button-link">AGENDAR</a>
                    
                </div>

                </div>
                <div class="avaliacao-box">
                    <span>Avaliações</span>

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