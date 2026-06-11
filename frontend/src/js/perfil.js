const btnPerfil = document.getElementById("perfil-btn");
const menuPerfil = document.getElementById("menu-perfil");

btnPerfil.addEventListener("click", function(e){
    e.preventDefault();

    if(menuPerfil.style.display === "block"){
        menuPerfil.style.display = "none";
    }else{
        menuPerfil.style.display = "block";
    }
});

document.addEventListener("click", function(e){

    if(
        !btnPerfil.contains(e.target) &&
        !menuPerfil.contains(e.target)
    ){
        menuPerfil.style.display = "none";
    }

});