const kontenhide = document.querySelector('#dropdown');
const search = document.querySelector('.hidden-konten');

search.addEventListener('click', function() {
  kontenhide.style.display = kontenhide.style.display === 'flex' ? 'none' : 'flex';
});

document.addEventListener('click', function(event) {
  if (!search.contains(event.target) && !kontenhide.contains(event.target)) {
    kontenhide.style.display = 'none';
  }
});

const humburger = document.querySelector('.konten-humberger');
const kontenhum = document.querySelector('.kontenhum');

humburger.addEventListener('click', function() {
  kontenhum.style.display = kontenhum.style.display === 'flex' ? 'none' : 'flex';
});


const navbar = document.querySelector('.navbar');
const bar = document.querySelector('.bar');
const darkmode = document.querySelector('#darkmode-toggle');
const lightimg = document.querySelector('#light');
const darkimg = document.querySelector('#dark');
const searchhide = document.querySelector('.dropdown');
const container = document.querySelector('.benefit');
const kategoridark = document.querySelector('.kategori');
const footer = document.querySelector('footer');

darkmode.addEventListener('click', function() {
  bar.classList.toggle('header-darkmode');
  navbar.classList.toggle('navbar-darkmode');
  lightimg.classList.toggle('hide-img');
  darkimg.classList.toggle('hide-img');
  searchhide.classList.toggle('dropdown-darkmode');
  container.classList.toggle('container-darkmode');
  kategoridark.classList.toggle('kategori-darkmode');
  footer.classList.toggle('footer-dark');
});





let currentSlide = 0;

function moveSlide(direction) {
    const slides = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.box').length;
    
    const visibleSlides = 3;
    
    const maxSlides = totalSlides - visibleSlides;
    
    currentSlide += direction;

    if (currentSlide > maxSlides) {
        currentSlide = maxSlides; 
    } else if (currentSlide < 0) {
        currentSlide = 0; 
    }

    slides.style.transform = `translateX(${-currentSlide * (100 / visibleSlides)}%)`;
}


let currentIndex = 0;
const slides = document.querySelectorAll('.sliding');
const totalSlides = slides.length;
const visibleSlides = 5; 
const maxIndex = totalSlides - visibleSlides; 
let autoScrollInterval;

function goToSlide(index) {
  const sliderWrapper = document.getElementById('sliderWrapper');
  sliderWrapper.style.transform = `translateX(-${index * (100 / visibleSlides)}%)`;
  currentIndex = index;
}

function nextSlide() {
  if (currentIndex === maxIndex) {
    goToSlide(0); 
  } else {
    goToSlide(currentIndex + 1);
  }
  resetAutoScroll(); 
}

function prevSlide() {
  if (currentIndex === 0) {
    goToSlide(maxIndex); 
  } else {
    goToSlide(currentIndex - 1);
  }
  resetAutoScroll(); 
}

function startAutoScroll() {
  autoScrollInterval = setInterval(() => {
    nextSlide();
  }, 3000); 
}

function resetAutoScroll() {
  clearInterval(autoScrollInterval);
  startAutoScroll(); 
}

startAutoScroll();






function searchProducts() {
  let input = document.getElementById('searchBar').value.toLowerCase();
  let categories = document.querySelectorAll('.category-container');

  categories.forEach(categoryContainer => {
    let products = categoryContainer.querySelectorAll('.product');
    let hasVisibleProduct = false;

    products.forEach(product => {
      let productName = product.textContent.toLowerCase();
      if (input && productName.startsWith(input)) {
        product.style.display = 'block';
        hasVisibleProduct = true;
      } else {
        product.style.display = 'none'; 
      }
    });
    if (hasVisibleProduct) {
      categoryContainer.style.display = 'block';
    } else if (input === "") {
      categoryContainer.style.display = 'block';
    } else {
      categoryContainer.style.display = 'none'; 
    }
  });
}