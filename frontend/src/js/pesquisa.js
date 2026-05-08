const cards = document.querySelectorAll(".produto-card");
const searchInput = document.getElementById("searchInput");

function filtrar() {
  const espacosSelecionados = [];
  const capacidadesSelecionadas = [];
  const busca = searchInput.value.toLowerCase();

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
    const texto = card.textContent.toLowerCase();

    const matchEspaco =
      espacosSelecionados.length === 0 || espacosSelecionados.includes(espaco);

    const matchCapacidade =
      capacidadesSelecionadas.length === 0 || capacidadesSelecionadas.includes(capacidade);

    const matchBusca = texto.includes(busca);

    if (matchEspaco && matchCapacidade && matchBusca) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });
}