<?php

@include_once 'config/config.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CYBERTIPS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/news-container.css">
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
      <div class="news-content-container">
      <?php
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      // Check if the news ID is provided in the URL
      if (isset($_GET['id'])) {
          $newsId = $_GET['id'];

          // Fetch the news content from the database
          $sql = "SELECT title, content, created_at, image FROM news WHERE id = $newsId";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              $title = $row['title'];
              $content = $row['content'];
              $img = $row['image'];
              $created_at = $row['created_at'];
            

              // Display the news content
              echo '<div class="news-content">';
              echo '<div class="news-content-img">';
              echo '<img src="admin/resources/img/' . $img. '" alt="News Image">';
              echo '</div>';
              echo '<h2>' . $title . '</h2>';
              echo '<p>' . $created_at . '</p>';
              echo '<div class="content">' . nl2br($content) . '</div>';
              echo '</div>';
          } else {
              echo 'No news found.';
          }
      } else {
          echo 'News ID not provided.';
      }

      $conn->close();
      ?>
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
</html>
