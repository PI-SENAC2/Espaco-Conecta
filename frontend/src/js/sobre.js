console.log("sobre.js carregado");
document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("contatoForm");
    const mensagemSucesso = document.getElementById("mensagem-sucesso");

    console.log(form);
    console.log(mensagemSucesso);

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        mensagemSucesso.style.display = "block";

        this.reset();
    });

});