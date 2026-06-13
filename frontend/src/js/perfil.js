document.addEventListener('DOMContentLoaded', () => {
    const perfilBtn = document.getElementById('perfil-btn');
    const menuPerfil = document.getElementById('menu-perfil');

    console.log(perfilBtn);
    console.log(menuPerfil);

    menuPerfil.style.display = 'none';

    perfilBtn.addEventListener('click', (e) => {
        e.preventDefault();

        if(menuPerfil.style.display === 'block'){
            menuPerfil.style.display = 'none';
        }else{
            menuPerfil.style.display = 'block';
        }
    });
});