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
        </div>
        <div class="next-button">
          <a href="guest-network.php">Next</a>
        </div>
      </div>
      <div class="learning-modules-container">
        <div class="module-title">
          <h1>Best practices that may help you</h1>
        </div>
        <div class="module-body">
          <div class="module-img">
            <img src="../resources/best-practices.png" alt="module-img" />
          </div>
          <p>
          Do you think you're safe on your home network? think again. Help yourself with this module on the best practices for securing your home network according to the National Security Agency of the United States Department of Defense.
          </p>
          <h2>
            Upgrade to a new system, software, or device and keep it up-to-date
          </h2>
          <p>
          Upgrading your software or system may provide some patches for some problems to be solved and some new features for end-users like you, but it also comes with security updates, so it is necessary to routinely update your software or system.
          </p>
          <p>It is also advised that you utilize your personal router to optimize administrative control over the routing and wireless functions of your home network. Additionally, for network separation from your more reliable and private gadgets, use contemporary router features to set up a distinct wireless network for visitors.</p>
          <h2>
            Implementing safety precautions on the home network
          </h2>
          <p>
          Let's say you don't want to buy a personal router and want to use the router provided by your Internet Service Provider (ISP). To make sure that your home network is secure, you must change the password on the network configuration page and the Wi-Fi password.
          </p>
          <!-- <p>You can use a tool called a password generator to generate a stronger password. <a href="../password-generator.php">Try here</a> </p> -->
          <p>To go to the network configuration page of the router or admin page, you will go to the web browser and type your default gateway on the admin page or default IP address that you usually see on the bottom of the router. If you don't see the admin page or default IP address, you can use your computer or laptop to see the default gateway for your network configuration page on the router or the admin page.</p>
          <p>To find your default gateway, open your command prompt or terminal if you use a MAC, type ipconfig or ifconfig for the MAC user, and if the Ethernet network interface configuration shows, find the gateway. If you use Wi-Fi, find the wireless LAN adapter. If you use an Ethernet cable, find the Ethernet adapter.</p>
          <div class="module-img">
            <img src="../resources/cmd.png" alt="module-img" />
          </div>
          <p>After you go to the network configuration page or admin page, you will log in. The password and username are usually on the bottom of the router. After you log in, you can change the password and username for the router's network configuration page or admin page, as well as your Wi-Fi password. You can use a tool called a password generator to generate a stronger password. <a href="../password-generator.php">Try here</a></p>
          <h2>
            Conclusion
          </h2>
          <p>
          Changing your password can make your network hard to access and crack. Passwords ought to be strong, exclusive to a person, and hard to crack. It is one of the ways that it will help you protect your home network. The next page is about creating a guest network on your home network.
          </p>
          <div class="quiz-container">
            <h2>Question for this page!</h2>
            <h2>Being <input type="text" id="answer1" class="quiz-input"> on the new patches is good for the devices and software.</h2>
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
      var correctAnswer = "up-to-date";
      if (userAnswer.toLowerCase() === correctAnswer.toLowerCase()) {
        document.getElementById('feedback').textContent = "Correct! Always update your devices and software to provide a new patch of security.";
      } else {
        document.getElementById('feedback').textContent = "Incorrect, the answer is 'up-to-date' Being up-to-date on the new patches is good for the devices and software.";
      }
    }
  </script>
</html>
