<?php
require_once("config/loader.php");
require 'vendor/autoload.php'; // نصب SendGrid SDK با Composer
if (isset($_POST['send-Email'])) {
  $userEmail=$_POST['email'];
  // echo "ok";
  function sendOTP($toEmail, $otp) {
    $subject = "کد یکبار مصرف شما";
    $message = "کد یکبار مصرف شما: $otp";
    $headers = "From: mvhditk2006@gmail.com";

    if (mail($toEmail, $subject, $message, $headers)) {
        echo "ایمیل با موفقیت ارسال شد.";
    } else {
        echo "خطا در ارسال ایمیل.";
    }
}
$otp = rand(1000,9999);
sendOTP($userEmail, $otp);
}


?>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OTP</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <div class="container" id="container">
    <div class="form-container sign-in">
      <form method="post">
        <h1>OTP</h1>
        <br>
        <input type="email" name="email" placeholder="enter your email to get OTP">
        <!-- <input type="text" placeholder="enter your OTP"> -->
        <br>
        <a href="#">Forget your Password?</a>
        <div style="display: inline;">
            <button type="submit" name="send-Email">Send To Email</button>     
        </div>
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Welcome Back!</h1>
          <p>Enter your Personal details to use all of site features</p>
          <button class="hidden" id="login">Sign In</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Hello, Friend!</h1>
          <p>Register with your Personal details to use all of site features</p>
          <button class="hidden" id="register">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="./assets/script/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>