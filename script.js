const searchInput = document.getElementById('searchInput');
const typeFilter = document.getElementById('typeFilter');
const searchBtn = document.getElementById('searchBtn');
const propertyCards = document.querySelectorAll('.property-card');
const notFound = document.getElementById('notFound');

function searchProperty() {

  document.getElementById('property').scrollIntoView({
    behavior: 'smooth'
  });

  const keyword = searchInput.value.toLowerCase();
  const type = typeFilter.value;

  let found = false;

  propertyCards.forEach(card => {

    const name = card.dataset.name.toLowerCase();
    const location = card.dataset.location.toLowerCase();
    const propertyType = card.dataset.type;

    const matchKeyword =
      name.includes(keyword) ||
      location.includes(keyword);

    const matchType =
      type === 'all' || propertyType === type;

    if(matchKeyword && matchType){
      card.style.display = 'block';
      found = true;
    } else {
      card.style.display = 'none';
    }

  });

  if(found){
    notFound.style.display = 'none';
  } else {
    notFound.style.display = 'block';
  }
}

searchBtn.addEventListener('click', searchProperty);

searchInput.addEventListener('keyup', searchProperty);

typeFilter.addEventListener('change', searchProperty);


// Slider
const slides = document.querySelectorAll('.slide');
const nextBtn = document.querySelector('.next');
const prevBtn = document.querySelector('.prev');

let currentSlide = 0;

function showSlide(index){

  slides.forEach(slide => {
    slide.classList.remove('active');
  });

  slides[index].classList.add('active');
}

nextBtn.addEventListener('click', () => {
  currentSlide++;

  if(currentSlide >= slides.length){
    currentSlide = 0;
  }

  showSlide(currentSlide);
});

prevBtn.addEventListener('click', () => {
  currentSlide--;

  if(currentSlide < 0){
    currentSlide = slides.length - 1;
  }

  showSlide(currentSlide);
});

setInterval(() => {
  currentSlide++;

  if(currentSlide >= slides.length){
    currentSlide = 0;
  }

  showSlide(currentSlide);
}, 4000);


// Navbar Shadow
window.addEventListener('scroll', () => {
  const header = document.querySelector('header');

  if(window.scrollY > 50){
    header.style.background = 'rgba(2,6,23,0.95)';
  } else {
    header.style.background = 'rgba(15,23,42,0.8)';
  }
});