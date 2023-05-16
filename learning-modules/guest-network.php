<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CYBERTIPS</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/video.css">
    <link rel="stylesheet" href="../css/password-generator.css">
    <link rel="stylesheet" href="../css/quiz.css">
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
          <a href="../learning_materials.php">Return</a>
        </div>
      </div>
      <div class="next-prev-container">
        <div class="prev-button">
            <a href="securing-home-network.php">Previous</a>
        </div>
        <div class="next-button">
          <a href="#"></a>
        </div>
      </div>
      <div class="learning-modules-container">
        <div class="module-title">
          <h1>Creating a guest network</h1>
        </div>
        <div class="module-body">
          <div class="module-img">
            <img src="../resources/guest-net.png" alt="guest-network" />
          </div>
          <p>Why would you create a guest network? If it is to give a guest access to the internet, then why don't you use your private network for your guest? because of security threats. On the second page of the module, "Best practices that may help you," it will show you how to create a guest network.</p>
          <p>On the previous page, the module talked about how you should use a strong password to keep your devices hard to crack, easy to access, and exclusive to the person who uses them. It is also taught how to go to the admin page or network configuration page of the router. Now access the admin page or network configuration page to create a guest network.</p>
          <p>The guest network is a separate network from your private network, or primary network, which you use on your devices. The guest network is usually used by guests to connect to the internet.</p>
          <p>Routers have an easy-to-setup guest network; however, some routers don't have this feature; therefore, this module will show you how to create a guest network. After you log in to the admin page or network configuration page, find guest network or guest access.</p>
          <div class="module-img">
            <img src="../resources/guest.png" alt="guest-network" />
          </div>
          <p>Now you have created a guest network for your guest.</p>
          <h2>
            Conclusion
          </h2>
          <p>Creating a guest network for your guests is hospitable and also one of the best practices to avoid getting malicious programs or files into your network. It is essentially necessary to put a password on your guest network; it is preferable to use WPA2 or WPA3 for your security.</p>
          <div class="quiz-container">
            <h1>Question for this page!</h1>
            <h2>The guest devices can carry  <input type="text" id="answer1" class="quiz-input"> that can be inserted into the home network.</h2>
            <button onclick="checkAnswer()" class="quiz-button">Submit</button>
            <p id="feedback" class="quiz-feedback"></p>
          </div>
          </div>
      </div>
    </div>
    <div class="footer">
      <h>CYBERTIPS</h>
    </div>
  </body>
  <script>
    // Clear the input field when the page is refreshed
    window.onload = function() {
      document.getElementById('answer1').value = '';
    };

    function checkAnswer() {
      // Get the user's answer
      var userAnswer = document.getElementById('answer1').value;

      // Compare the user's answer to the correct answer
      var correctAnswer = "security threats";
      if (userAnswer.toLowerCase() === correctAnswer.toLowerCase()) {
        document.getElementById('feedback').textContent = "Correct! The guest devices can carry security threats that you aren't aware of; therefore, create a guest network.";
      } else {
        document.getElementById('feedback').textContent = "Incorrect. The answer is 'security threats'. The guest devices can carry security threats that will become a problem on the home network.";
      }
    }
  </script>
</html>
