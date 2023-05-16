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
      <p>
        We are CYBERTIPS, a website dedicated to providing information about online safety and security. Our mission is to help educate people about the risks of the internet and provide tips and resources to stay safe online.
      </p>
      <br></br>
      <div class="contact-us">
        <h1>
          CONTACT US
        </h1>
        <p>
          If there is anything you want to discuss with us, Please email us at:
        </p>
        <p>
          email@email.com
        </p>
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
