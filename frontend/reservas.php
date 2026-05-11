<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="./src/style/reservas.css">
</head>
<body>

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

<!--Espaços cadastrados-->
<div class="espacos">
    <h3>Espaços cadastrados</h3>
</div>
        </section>


<!--Preferências-->
<section class="preferencias">
    <div class="painel-preferencias">
        <div class="titulo-preferencias">
            <h3>Notificações</h3>
        </div>
        <div class="linha-preferencia">
            <span>Email</span>
            <input type="checkbox">
        </div>
        <div class="linha-preferencia">
            <span>SMS</span>
            <input type="checkbox">
        </div>
        <div class="titulo-preferencias">
            <h3>Preferências</h3>
        </div>
        <div class="linha-preferencia">
            <span>Idioma</span>
        </div>
        <div class="linha-preferencia">
            <span>Política de reembolso</span>
        </div>
        <div class="linha-preferencia">
            <span>Termos de uso</span>
        </div>
        <div class="linha-preferencia">
            <span>Ajuda</span>
        </div>
    </div>

    <button>Adicionar Espaço</button>
</section>

</section>
<footer>
    <?php require_once "../backend/php/includes/footer.inc.php"; ?>
</footer>

</body>
</html>