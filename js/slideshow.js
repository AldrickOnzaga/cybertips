var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var prev = document.querySelector('.prev');
  var next = document.querySelector('.next');
  
  // If n is greater than the number of slides, reset to the first slide
  if (n > slides.length) {
    slideIndex = 1;
  }
  
  // If n is less than 1, set to the last slide
  if (n < 1) {
    slideIndex = slides.length;
  }
  
  // Hide all slides
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  // Show the current slide
  slides[slideIndex - 1].style.display = "block";
  
  // Disable the previous button if on the first slide
  if (slideIndex == 1) {
    prev.classList.add('disabled');
  } else {
    prev.classList.remove('disabled');
  }
  
  // Disable the next button if on the last slide
  if (slideIndex == slides.length) {
    next.classList.add('disabled');
  } else {
    next.classList.remove('disabled');
  }
}

// Add event listeners to previous and next buttons
document.querySelector('.prev').addEventListener('click', function () {
  plusSlides(-1);
});

document.querySelector('.next').addEventListener('click', function () {
  plusSlides(1);
});

// Add event listener for keyboard arrow keys
document.addEventListener('keydown', function (event) {
  if (event.code === 'ArrowLeft') {
    plusSlides(-1);
  } else if (event.code === 'ArrowRight') {
    plusSlides(1);
  }
});
