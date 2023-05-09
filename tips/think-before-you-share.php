<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CYBERTIPS</title>
    <!-- <script type="text/javascript" src="../js/slideshow.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script> -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/video.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  </head>
  <body>
    <div class="navigator">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <img id="logo" class="logo" src="../resources/cyb6.png" alt="CYBERTIPS Logo" />
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="../about.php">About</a></li>
        <li><a href="../contact.php">Contact</a></li>
      </ul>
    </div>

    <div class="main">
      <div class="return">
        <div class="return-button">
          <a href="../tips.php">Return</a>
        </div>
      </div>
      <div class="slideshow-container">
        <div class="mySlides">
          <img src="../resources/think-before-you-share/1.png">
        </div>
        <div class="mySlides">
          <img src="../resources/think-before-you-share/2.png">
        </div>
        <div class="mySlides">
          <img src="../resources/think-before-you-share/3.png">
        </div>
        <div class="mySlides">
          <img src="../resources/think-before-you-share/4.png">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
    </div>
    <div class="footer">
      <h>CYBERTIPS</h>
    </div>
  </body>
  <script>
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
  </script>
</html>
