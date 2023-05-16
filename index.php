<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CYBERTIPS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/video.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  </head>
  <body>
    <div class="navigator">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <img id="logo" class="logo" src="resources/cyb6.png" alt="CYBERTIPS Logo" />
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>

    <div class="main">
      <h1>Welcome to CYBERTIPS</h1>
        <p>This website will be use for increasing the awareness of the student of the Fort Bonifacio Senior HighSchool</p>
        <div class="video-container">
          <video id="main-video" controlsList="nodownload" class="main_video" oncontextmenu="return false;" autoplay>
          <!-- credit to the editor of the video: Miss Kimberly Vargas -->
            <?php
              $video_src = "resources/intro.mp4";
              $video_type = mime_content_type($video_src);
            ?>
            <source src="<?php echo $video_src ?>" type="<?php echo $video_type ?>">
            Your browser does not support the video tag.
          </video>
        </div>
        <div class="button-menu">
          <div class="button-menu-list">
            <a href="tips.php">Tips</a>
        </div>

          <div class="button-menu-list">
            <a href="learning_materials.php">Modules</a>
          </div>

          <div class="button-menu-list">
            <a href="news.php">News</a>
          </div>
                
        </div>
    </div>

    <div class="footer">
      <h>CYBERTIPS</h>
    </div>
  </body>
  <script>
        window.addEventListener('load', function() {
            var logo = document.getElementById('logo');
            logo.addEventListener('click', function() {
                window.location.href = 'index.php';
            });
        });
  </script>
  <script>
  var video = document.getElementById('main-video');

  // Add a click event listener to the video
  video.addEventListener('click', function() {
    if (video.paused) {
      video.play();
    } else {
      video.pause();
    }
  });
</script>
</html>
