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
      <div class="tips-intro">
        <h1>Tips<h1>
        <p>You can adopt this tips so that you can improve your cyber awareness and security</p>
      </div>
      <div class="tips-container">
        <div class="tip-details">
          <img src="resources/low-battery.png" alt="low bat">
          <h1>Running out of battery?</h1>
          <p>You don't have a power bank. No choice but to use a public charging station? You should know this before you do that.</p>
          <a href="tips/juice-jacking.php" class="read-more" id="read-more">Read more</a>
          <!-- <button id="read-more">Read more</button> -->
        </div>
        <div class="tip-details">
          <img src="resources/post.png" alt="post">
          <h1>Ready to post your picture?</h1>
          <p>You're ready to post your vacation photo, quote of the day, or anything else you want to share? You should think before you post.</p>
          <a href="tips/think-before-you-share.php" class="read-more">Read more</a>
        </div>
        <div class="tip-details">
          <img src="resources/pera.png" alt="atm">
          <h1>Are you using e-wallet/atm card?</h1>
          <p>You've always used an ATM card or e-wallet to purchase your goods, so how are you sure your ATM card or e-wallet is secured?.</p>
          <a href="tips/protect-your-money.php" class="read-more">Read more</a>
        </div>
      </div>
    </div>

    <div class="footer">
      <h>CYBERTIPS</h>
    </div>
  </body>
</html>
