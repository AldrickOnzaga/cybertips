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
      <div class="news-container">
        
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
      function fetchNews() {
        // Make an AJAX request to fetch the news from the server
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
            var newsContainer = document.querySelector('.news-container');
            newsContainer.innerHTML = xhr.responseText;
          }
        };
        xhr.open('GET', 'config/fetch_news.php', true);
        xhr.send();
      }

      // Call fetchNews initially to populate the news container
      fetchNews();

      // Refresh the news every 5 seconds (adjust as needed)
      setInterval(fetchNews, 50000000);

      // Redirect to index.php when the logo is clicked
      window.addEventListener('load', function() {
        var logo = document.getElementById('logo');
        logo.addEventListener('click', function() {
          window.location.href = 'index.php';
        });
      });
    </script>
</html>
