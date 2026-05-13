<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/style/sobre.css">
</head> 
<body>
    <!--------- Header ----------->
    <?php require_once "../backend/php/includes/navbar.inc.php"; ?>

    <!------ Hero ------>
    <section id="home" class="hero">
        <div class="hero-content">
        </div>
    </section>
    <section class="if">
    <div class = "sobre">
    <h1>Muito além de um espaço de trabalho!</h1>
    <p>Descubra um ambiente pensado para inspirar, conectar e proporcionar experiências completas. Aqui, você encontra não só áreas para trabalhar, mas também espaços para eventos, convivência, criação de conteúdo, encontros sociais e momentos especiais.</p>
</div>
</section>
   
<!------ Sobre ------>
<section id="sobre a gente" class="sobre-section">
    <div class="sobre-content">
    </div>
   </section>
   <section class="else">
    <div class="sobre_else">
        <div class="card">
            <span>+6</span>
            <p>Espaços para Reuniões & Treinamentos</p>
        </div>
        <div class="card">
            <span>+4</span>
            <p>Espaços para Eventos & festas</p>
        </div>
        <div class="card">
            <span>+3</span>
            <p>Espaços para Produção & Conteúdo</p>
        </div>
        <div class="card">
            <span>+10</span>
            <p>Espaços para Trabalhos individuais ou em equipe</p>
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
            <div class="texto-2">
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
<!----------FORMULÁRIO---------->
        <div class="formulario">
        <div class="fundo">
            <div class="formularios">
                <input type="text" placeholder="Nome">
                <input type="text" placeholder="Email">
                <textarea placeholder="Mensagem"></textarea>>
            </div>

        <div class="informacoes">
            <h2>Entre em contato</h2>
            <p>Precisa de suporte, tem alguma dúvida sobre reservas ou quer se tornar um parceiro? Nossa eque está à disposição.</p>
            <button>ENVIAR</button>
            </div>
        </div>
        </div>
    </section>

<!----------FOOTER---------->
    <?php require_once "../backend/php/includes/footer.inc.php"; ?>
</body>

