document.getElementById('btnToggle').addEventListener('click', function() {
  document.getElementById('menu').classList.toggle('hidden');
});

// humberger
   // JavaScript to handle the hamburger menu state
   document.addEventListener('DOMContentLoaded', (event) => {
    const hamburgerButton = document.getElementById('hamburgerButton');
    const menu = document.getElementById('menu');

    // Check the menu state in localStorage
    const menuState = localStorage.getItem('menuState');

    if (menuState === 'open') {
        menu.classList.remove('hidden');
    } else {
        menu.classList.add('hidden');
    }

    hamburgerButton.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        // Save the menu state in localStorage
        if (menu.classList.contains('hidden')) {
            localStorage.setItem('menuState', 'closed');
        } else {
            localStorage.setItem('menuState', 'open');
        }
    });
});


// navbar
// window.addEventListener('scroll', function() {
//   const navbar = document.querySelector('.navbar');
//   if (window.scrollY > 0) {
//     navbar.classList.add('scrolled');
//   } else {
//     navbar.classList.remove('scrolled');
//   }
// });

// active
document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll('.nav-link');

  links.forEach(link => {
    link.addEventListener('click', function () {
      links.forEach(otherLink => {
        otherLink.classList.remove('active-nav-link');
      });
      this.classList.add('active-nav-link');
    });
  });
});


// card slide
let sliderContainer = document.getElementById('sliderContainer');
let slider = document.getElementById('slider');
let cards = slider.getElementsByTagName('li');

let elementsToShow = 2;

if (document.body.clientWidth < 1000) {
  elementsToShow = 1;
}

let sliderContainerWidth = sliderContainer.clientWidth;

let cardWidth = sliderContainerWidth / elementsToShow;

slider.style.width = cards.length * cardWidth + 'px';
slider.style.transition = 'margin';
slider.style.transitionDuration = '1s';


for (let index = 0; index < cards.length; index++) {
  const element = cards[index];
  element.style.width = cardWidth + 'px';
}

function prev() {
  if (+slider.style.marginLeft.slice(0, -2) != -cardWidth * (cards.length - elementsToShow))
      slider.style.marginLeft = ((+slider.style.marginLeft.slice(0, -2)) - cardWidth) + 'px';
}

function next() {
  if (+slider.style.marginLeft.slice(0, -2) != 0)
      slider.style.marginLeft = ((+slider.style.marginLeft.slice(0, -2)) + cardWidth) + 'px';
}

// count
// Function to animate counting
function animateValue(id, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    document.getElementById(id).textContent = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

// Function to check if an element is in the viewport
function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// Function to start animation when element is in viewport
function startCountAnimation() {
  const counters = document.querySelectorAll('.count');
  const targets = [1000, 100000, 1000];
  counters.forEach((counter, index) => {
    if (isInViewport(counter)) {
      animateValue(`counter${index + 1}`, 0, targets[index], 2000);
    }
  });
}

// Event listener for scroll event
window.addEventListener('scroll', startCountAnimation);

// Trigger animation for elements already in viewport
startCountAnimation();

// Fungsi untuk menutup formulir
function closeForm() {
  // Sembunyikan formulir dengan mengubah properti display menjadi none
  document.getElementById("myForm").style.display = "none";
}

// Mengaitkan fungsi closeForm dengan tombol "exit"
document.getElementById("closeForm").addEventListener("click", closeForm);


document.getElementById("closeForm").addEventListener("click", closeForm);
