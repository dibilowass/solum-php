const cardsList = document.querySelector('.cards-list');
const prevButton = document.querySelector('.prev-btn');
const nextButton = document.querySelector('.next-btn');

let totalItens = document.querySelectorAll('.item-card').length;
let currentIndex = 0;

// Função para mover os itens
function slideItems() {
  cardsList.style.transform = `translateX(-${currentIndex * 220}px)`; // 220px é a largura do card + a margem
}

// Função para mover para o próximo item
function nextItem() {
  currentIndex++;
  
  // Se chegar no final, volta para o primeiro item
  if (currentIndex >= totalItens) {
    currentIndex = 0;
  }
  
  slideItems();
}

// Função para mover para o item anterior
function previousItem() {
  currentIndex = (currentIndex - 1 + totalItens) % totalItens; // Looping para o início quando negativo
  slideItems();
}

// Eventos de clique nas setas
prevButton.addEventListener('click', previousItem);
nextButton.addEventListener('click', nextItem);
