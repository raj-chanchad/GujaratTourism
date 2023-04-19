<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <link rel="icon" href="logo.png">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');

    input {
      caret-color: red;
    }

    body {
      margin: 0;
      width: 100vw;
      height: 100vh;
      background: #ecf0f3;
      display: flex;
      align-items: center;
      text-align: center;
      justify-content: center;
      place-items: center;
      overflow: hidden;
      font-family: poppins;
    }

    .container {
      position: relative;
      width: 350px;
      height: 570px;
      border-radius: 20px;
      padding: 20px;
      box-sizing: border-box;
      background: #ecf0f3;
      box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
    }

    .logo {
      height: 100px;
      width: 100px;
      background: url("logo.png");
      background-size: cover;
      margin: auto;
      margin-top: 20px;
      border-radius: 50%;
      box-sizing: border-box;
      box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
    }

    .title {
      margin-top: 10px;
      font-weight: 900;
      font-size: 1.8rem;
      color: #1DA1F2;
      letter-spacing: 1px;
    }

    .inputs {
      text-align: left;
      margin-top: 30px;
    }

    label,
    input,
    button {
      display: block;
      width: 100%;
      padding: 0;
      border: none;
      outline: none;
      box-sizing: border-box;
    }

    label {
      margin-bottom: 4px;
      font-family: sans-serif;
    }

    label {
      margin-top: 12px;
    }

    input::placeholder {
      color: gray;
    }

    input {
      background: #ecf0f3;
      padding: 10px;
      padding-left: 20px;
      height: 50px;
      font-size: 14px;
      border-radius: 10px;
      box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
    }

    button {
      color: white;
      margin-top: 20px;
      background: #1DA1F2;
      height: 40px;
      border-radius: 20px;
      cursor: pointer;
      font-weight: 900;
      box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
      transition: 0.5s;
    }

    button:hover {
      box-shadow: none;
    }

    h1 {
      position: absolute;
      top: 0;
      left: 0;
    }


    a {
      color: #000;
      font-family: sans-serif;
      text-align: right;
    }

    h5 {
      color: #000;
      font-family: sans-serif;
    }
  </style>
</head>

<body>


  <!-- <div class="container">
    <div class="logo"></div>
    <div class="title">LOGIN</div>
    <div class="inputs">
    <form  method="post">
      <label>E-mail</label>
      <input type="text" name="mail" placeholder="Enter your email" required>
      <label>Password</label>
      <input type="password" name="password" placeholder="Enter password" required>
      <a href="forgot.html"><h5>Forgot password</h5></a>
      <button type="submit" name="submit">LOGIN</button>
      <h5 style="text-align: center;">Don't have account?&ensp;&ensp;<a href="signup.php" style="color: blue;">Create account</a></h5>
    </form>
    </div>
  </div> -->
</body>

</html>




<?php
include 'dbconnect.php';


if (isset($_POST['submit'])) {

  $email = $_POST["mail"];
  $Password = $_POST["password"];


  $sql = "select * from register where email = '$email' and password = '$Password'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count == 1) {
    $_SESSION["username"] = $row["firstname"];
    $_SESSION["image"] = $row["image"];
    header("Location: home.php");
  } else {
    echo "<script>alert ('Invalid Username or Password')</script>";
  }
}
?>