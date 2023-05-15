<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CYBERTIPS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/video.css">
    <link rel="stylesheet" href="css/password-generator.css">
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
    <div class="return">
        <div class="return-button">
          <a href="learning-modules/securing-home-network.php">Return</a>
        </div>
      </div>
      <div class="next-prev-container">
        <div class="prev-button">
        </div>
        <div class="next-button">
          <a href="#"></a>
        </div>
      </div>
    <div class="password-generator-container">
                <div class="password-generator"> 
                    <form method="post">
                        <h1>Password Generator</h1>
                        <label for="length">Password length (8-32):</label>
                        <div class="slidecontainer">
                            <input type="range" min="8" max="32" value="8" class="slider" id="length" name="length">
                            <span id="slider-value"></span>
                        </div>                    
                        <br><br>
                        <input type="checkbox" id="uppercase" name="uppercase" value="1">
                        <label for="uppercase">Include uppercase letters (A-Z)</label><br>
                        <input type="checkbox" id="lowercase" name="lowercase" value="1" checked>
                        <label for="lowercase">Include lowercase letters (a-z)</label><br>
                        <input type="checkbox" id="numbers" name="numbers" value="1" checked>
                        <label for="numbers">Include numbers (0-9)</label><br>
                        <input type="checkbox" id="special" name="special" value="1">
                        <label for="special">Include special characters (!@#$%^&*)</label><br><br>
                        <input type="submit" name="generate" value="Generate Password">
                    </form>
                </div>
            </div>
    </div>
    <div class="footer">
      <h>CYBERTIPS</h>
    </div>
  </body>
</html>