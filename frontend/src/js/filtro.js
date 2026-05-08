const checkboxes = document.querySelectorAll("input[type=checkbox]");
const cards = document.querySelectorAll(".card");

checkboxes.forEach(cb => {
  cb.addEventListener("change", filtrar);
});

function filtrar() {
  const espacosSelecionados = [];
  const capacidadesSelecionadas = [];

  checkboxes.forEach(cb => {
    if (cb.checked) {
      if (["individual", "reuniao", "equipe"].includes(cb.value)) {
        espacosSelecionados.push(cb.value);
      } else {
        capacidadesSelecionadas.push(cb.value);
      }
    }
  });

  cards.forEach(card => {
    const espaco = card.dataset.espaco;
    const capacidade = card.dataset.capacidade;

    const matchEspaco =
      espacosSelecionados.length === 0 || espacosSelecionados.includes(espaco);

    const matchCapacidade =
      capacidadesSelecionadas.length === 0 || capacidadesSelecionadas.includes(capacidade);

    if (matchEspaco && matchCapacidade) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });
}