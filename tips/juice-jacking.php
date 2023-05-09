<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CYBERTIPS</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/video.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="../js/slideshow.js"></script>
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
          <img src="../resources/juice-jacking/1.png">
        </div>
        <div class="mySlides">
          <img src="../resources/juice-jacking/2.png">
        </div>
        <div class="mySlides">
          <img src="../resources/juice-jacking/3.png">
        </div>
        <div class="mySlides">
          <img src="../resources/juice-jacking/4.png">
        </div>
        <div class="mySlides">
          <img src="../resources/juice-jacking/5.png">
        </div>
        <div class="mySlides">
          <img src="../resources/juice-jacking/6.png">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
    </div>

    <div class="footer">
      <h>CYBERTIPS</h>
    </div>
  </body>
</html>
