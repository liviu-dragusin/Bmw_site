function zoomIn(element) {
    element.style.transform = 'scale(1.3)'
  }
  function zoomInModels(element) {
    element.style.transform = 'scale(1.1)'
  }
  
function zoomOut(element) {
    element.style.transform = 'scale(1)';
  }
function IndepartareIn(element){
  element.style.transform = 'scale(0.95)'
}
function IndepartareOut(element) {
  element.style.transform = 'scale(1)';
}
  document.addEventListener("DOMContentLoaded", function() {
    const textElement = document.querySelector('.text-bmw');

    const fadeIn = () => {
        let opacity = 0;

        const fadeEffect = setInterval(() => {
            textElement.style.opacity = `${opacity}`;
            opacity += 0.03;

            if (opacity >= 1) {
                clearInterval(fadeEffect);
            }
        }, 50);
    };

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                fadeIn();
                observer.unobserve(textElement);
            }
        });
    });

    observer.observe(textElement);
});