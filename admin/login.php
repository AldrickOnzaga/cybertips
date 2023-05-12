<?php
include_once '../config/config.php';

session_start();

if(isset($_POST['submit'])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $select = "SELECT * FROM admin WHERE name = '$username'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        $hashed_password = $row['password'];

        if(password_verify($password, $hashed_password)){
            if($row['user_type'] == 'admin'){
                $_SESSION['admin_name'] = $row['name'];
                header('location:index.php');
        }else{
            $error[] = 'Incorrect email or password. Please try again';
        }
    }else{
        $error[] = 'Incorrect email or password. Please try again';
    }
    }}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CYBERTIPS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div class="login">
        <div class="login-logo">
            <img src="../resources/cyb6.png" alt="CYBERTIPS Logo" />
        </div>
        <form action="" method="post">
            <?php
                if(isset($error)){
                    foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?>
            <input type="username" name="username" required placeholder="Username">
            <input type="password" name="password" required placeholder="Password">
            <input type="submit" name="submit" value="login" class="form-btn">
        </form>
    </div>
  </body>
</html>
