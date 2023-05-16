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
      <img id="logo" class="logo" src="resources/cyb6.png" alt="CYBERTIPS Logo">
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
      <div class="password-generator-container">
        <div class="password-generator"> 
          <form method="post" id="password-generator">
            <h1>Password Generator</h1>
            <label for="length">Password length (8-32):</label>
            <div class="slidecontainer">
              <input type="range" min="8" max="32" value="8" class="slider" id="length" name="length">
              <br>
              <span id="slider-value">8</span>
            </div>                    
            <input type="checkbox" id="uppercase" name="uppercase" value="1">
            <label for="uppercase">Include uppercase letters (A-Z)</label>
            <input type="checkbox" id="lowercase" name="lowercase" value="1" checked>
            <label for="lowercase">Include lowercase letters (a-z)</label>
            <input type="checkbox" id="numbers" name="numbers" value="1" checked>
            <label for="numbers">Include numbers (0-9)</label>
            <input type="checkbox" id="special" name="special" value="1">
            <label for="special">Include special characters ("!@#$%^&*_-")</label>
            <input type="submit" name="generate" value="Generate Password">
          </form>
          <div class="generated-password">
            <h2>Generated password</h2>
            <p id="generated-password"></p>
          </div>
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
    // Function to generate a random password
    function generatePassword() {
      // Define the characters to include in the password based on the selected criteria
      var uppercaseChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
      var lowercaseChars = "abcdefghijklmnopqrstuvwxyz";
      var numberChars = "0123456789";
      var specialChars = "!@#$%^&*_-";

      // Get the user-selected options
      var length = document.getElementById("length").value;
      var includeUppercase = document.getElementById("uppercase").checked;
      var includeLowercase = document.getElementById("lowercase").checked;
      var includeNumbers = document.getElementById("numbers").checked;
      var includeSpecialChars = document.getElementById("special").checked;

      // Create a character pool based on the selected options
      var characterPool = "";
      if (includeUppercase) {
        characterPool += uppercaseChars;
      }
      if (includeLowercase) {
        characterPool += lowercaseChars;
      }
      if (includeNumbers) {
        characterPool += numberChars;
      }
      if (includeSpecialChars) {
        characterPool += specialChars;
      }

      // Generate the password by selecting random characters from the character pool
      var password = "";
      for (var i = 0; i < length; i++) {
        var randomIndex = Math.floor(Math.random() * characterPool.length);
        password += characterPool.charAt(randomIndex);
      }

      // Display the generated password
      document.getElementById("generated-password").innerText = password;
    }

    // Attach an event listener to the form submit event
    document.getElementById("password-generator").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent form submission
      generatePassword(); // Generate the password
    });
  </script>
  <script>
    window.addEventListener('DOMContentLoaded', function() {
      // Get the range input element
      const rangeInput = document.getElementById('length');

      // Set the initial value of the range slider to 8
      rangeInput.value = 8;

      // Get the span element to display the slider value
      const sliderValue = document.getElementById('slider-value');

      // Update the span element with the initial value
      sliderValue.textContent = rangeInput.value;

      // Add an event listener to the range input
      rangeInput.addEventListener('input', function() {
        // Update the span element with the current value of the range slider
        sliderValue.textContent = rangeInput.value;
      });
    });
  </script>
</html>