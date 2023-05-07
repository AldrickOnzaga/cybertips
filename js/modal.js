// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("read-more");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// Get all the images in the modal
var images = document.getElementsByClassName("modal-image");

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Add an event listener to the modal "shown.bs.modal" event
modal.addEventListener(function() {
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    for (var i = 0; i < images.length; i++) {
      images[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > images.length) {
      slideIndex = 1
    }
    images[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
});
