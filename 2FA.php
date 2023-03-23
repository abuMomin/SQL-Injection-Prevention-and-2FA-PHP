<?php
    @include 'config.php';
    

    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $fa = mysqli_real_escape_string($conn, $_POST['fa']);

        $select = " SELECT * FROM user_form WHERE email = '$email' && 2fa = '$fa' ";
        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
          $row = mysqli_fetch_array($result);
          $insert = " UPDATE user_form SET authenticated = '1' WHERE email = '$email'";
          mysqli_query($conn, $insert);
          header('location:login_form.php');
        }
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>2-Factor Authenticator</title>
    <link rel="stylesheet" type="text/css" href="CSS/2fa.css">
  </head>
  <body>
    <div class="container">
      <h1>2-Factor Authenticator</h1>
      <p>Enter the 4-digit code from your authenticator app:</p>
      <form method="post">
        <input type="email" name="email" require_placeholder="Enter your email">
        <input type="text" name="fa" maxlength="4" require_placeholder="Your OTP">
        <br>
        <input type="submit" name="submit" value="Submit">
      </form>
    </div>
  </body>
</html>