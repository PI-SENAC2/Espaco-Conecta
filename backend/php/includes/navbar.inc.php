
<!-- TESTE NAVBAR -->

<style>
.nav-direita{
    flex: 1;
    display: flex;
    justify-content: flex-end;
    gap: 15px;
    position: relative;
}

.menu-perfil{
    display: block;
    position: absolute;
    top: 45px;
    right: 0;

    min-width: 140px;

    background-color: #fff;
    border-radius: 10px;

    box-shadow: 0 4px 12px rgba(0,0,0,0.2);

    z-index: 1000;
    overflow: hidden;
}

.menu-perfil.ativo{
    display: block;
}

.menu-perfil a{
    display: block;

    padding: 12px 16px;

    color: #000;
    text-decoration: none;
    font-weight: 600;

    transition: background-color 0.3s;
}

.menu-perfil a:hover{
    background-color: #f2f2f2;
    color: black;
}

.menu-perfil .btn{
    display: block;
    margin: 10px;
}

</style>
<!-- NAVBAR -->

<header class="header">
        <nav class="navbar">
            <div class="nav-links">
                <ul class="nav-list">

                    <li><a href="./index.php" class="linha">Home</a></li>
                    <li><a href="./reservas.php" class="linha">Reservas</a></li>
                    <li><a href="./sobre.php" class="linha">Sobre</a></li>
                </ul>
            </div>
            <div class="nav-logo">
                <a href="./index.php" id="logo">
                    <img src="./assets/img/logo-espaço-conecta.svg" alt="lOGO D">
                </a>
            </div>


        <div class="nav-direita">

    <a href="#" id="perfil-btn" class="logo-perfil">
        <img src="../frontend/assets/img/Img-perfil.svg" alt="Perfil">
    </a>
    <div id="menu-perfil" class="menu-perfil">
        <?php if(isset($_SESSION['email'])): ?>
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        <?php else: ?>
            <a href="./login.php">Logar</a>
        <?php endif; ?>
    </div>
</div>
        </nav>
        <script>
console.log('script navbar carregado');

const btn = document.getElementById('perfil-btn');
const menu = document.getElementById('menu-perfil');

console.log(btn);
console.log(menu);

menu.style.display = 'none';

btn.addEventListener('click', (e) => {
    e.preventDefault();

    menu.style.display =
        menu.style.display === 'block'
        ? 'none'
        : 'block';
});
</script>
    </header>