<?php
//   include "classes/dbh.classes.php";
//   include "classes/signup.classes.php";

//   include "classes/signup-contr.classes.php";

// $test = new SignupContr(isset($_POST["uid"]), isset($_POST["pwd"]), isset($_POST["pwdrepeat"]), isset($_POST["email"]));
// echo $test->pwdMatch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <section>
    <div class="wrapper flexRow">
      <div class="index-signup">
        <h4>Sign Up</h4>
        <p>Don't have and account yet? Sign up here!</p>
        <form class="flexCol" action="includes/signup.inc.php" method="POST">
          <input type="text" name="uid" id="" placeholder="Username">
          <input type="password" name="pwd" id="" placeholder="Password">
          <input type="password" name="pwdrepeat" id="" placeholder="Repeat Password">
          <input type="text" name="email" id="" placeholder="E-mail">
          <br>
          <button type="submit" name="submit">Sign Up</button>          
        </form>
      </div>
      <div class="index-login">
        <h4>LOGIN</h4>
        <p>Don't have and account yet? Sign up here!</p>
        <form class="flexCol" action="includes/login.inc.php" method="POST">
          <input type="text" name="uid" id="" placeholder="Username">
          <input type="password" name="pwd" id="" placeholder="Password">
          <br>
          <button type="submit" name="submit">LOGIN</button>
        </form>
      </div>
    </div>
  </section>
</body>
</html>