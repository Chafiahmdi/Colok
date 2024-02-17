wmiCarousel('#ProductPromotions', 3500);
wmiCarousel('#ServicesPromotions', 4500);
function wmiCarousel(containerSelector, duration) {
  let slidecount;
  let slideIndex = 1;
  let container = document.querySelector(containerSelector);
  let slides = container.querySelectorAll('.PromotionsList > li');
  let dots = container.querySelectorAll('.controls > span.dot');
  let isPaused = false;
  let timer;
  /*Slideshow*/
  function SlideShow() {
    if (!isPaused) {
      let i;
      ChangeSlide(slideIndex);
      for (i = 0; i < slides.length; i++) {
        dots.forEach(function(dot) {
          dot.classList.remove('active');
        });
        dots[slideIndex - 1].classList.add('active');
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1;
      }
      /*Dots*/
      dots.forEach(function(dot) {
        dot.addEventListener('click', function() {
          dots.forEach(function(sibling) {
            sibling.classList.remove('active');
          });
          dot.classList.add('active');
          slidecount = dot.dataset.slide;
          ChangeSlide(slidecount);
          slideIndex = slidecount;
        });
      });
      clearTimeout(timer);
      timer = setTimeout(SlideShow, duration);
    }
  }
  /*Change Slide*/
  function ChangeSlide(slidenum) {
    var prevIndex = null;
    slides.forEach(function(item, index) {
      item.classList.remove('transform');
      item.classList.remove('active');
      if (item.dataset.slideValue == slidenum) {
        prevIndex = (index - 1 + slides.length) % slides.length;
        item.classList.add('active');
      }
    });
    if (prevIndex !== null) {
      slides[prevIndex].classList.add('transform');
    }
  }
  // Pause on hover
  container.addEventListener('mouseenter', function() {
    isPaused = true;
    clearTimeout(timer);
  });

  // Resume on mouse leave
  container.addEventListener('mouseleave', function() {
    isPaused = false;
    timer = setTimeout(SlideShow, duration);
  });
  SlideShow();
}