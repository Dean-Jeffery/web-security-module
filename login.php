<?php
session_start();
require('inc/connection.inc.php');

if (isset($_POST['username'])and isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
}




 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="/css/styles.css">
  </head>
  <body>
    <h1>Login</h1>


<!-- LOGIN FORM -->
    <form class="" action="/action_page.php" method="post">


    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>




  </body>
</html>
