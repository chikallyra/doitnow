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
document.addEventListener('DOMContentLoaded', () => {
  const counters = [
      { id: 'counter1', end: 120 }, // Adjust the end value as needed
      { id: 'counter2', end: 100 }, // Adjust the end value as needed
      { id: 'counter3', end: 300 }   // Adjust the end value as needed
  ];

  const animateCount = (element, start, end, duration) => {
      let current = start;
      const increment = end > start ? 1 : -1;
      const stepTime = Math.abs(Math.floor(duration / (end - start)));
      
      const timer = setInterval(() => {
          current += increment;
          element.textContent = current;
          if (current === end) {
              clearInterval(timer);
          }
      }, stepTime);
  };

  const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              counters.forEach(counter => {
                  const element = document.getElementById(counter.id);
                  if (!element.classList.contains('counted')) {
                      animateCount(element, 0, counter.end, 2000); // Animate over 2 seconds
                      element.classList.add('counted'); // Add class to ensure it only animates once
                  }
              });
              observer.disconnect(); // Stop observing once animation is triggered
          }
      });
  }, {
      threshold: 0.5 // Adjust this threshold as needed
  });

  counters.forEach(counter => {
      const element = document.getElementById(counter.id);
      observer.observe(element);
  });
});


