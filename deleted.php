<!DOCTYPE html>
<?php
$db = new Mysqli;

$db->connect('localhost', 'root', '', 'register');

$uid = $_GET['id'];
$sql = "delete from users where uid='$uid'";
$val = $db->query($sql);
?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Amazon Registration</title>
  <link rel="icon" href="amazon_icon.svg" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Roboto:wght@400;700;900&display=swap");

  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  html {
    font-size: 62.5%;
  }

  body {
    font-size: 1.6rem;
    color: #000;
    font-family: "Poppins", sans-serif;
    line-height: 1.6;
  }

  .register {
    height: 100vh;
    display: flex;
    align-items: center;
  }

  .container {
    max-width: 50rem;
    margin: 0 auto;
  }

  .wrapper {
    height: 100vh;
  }

  .form {
    padding: 1.4rem 1.8rem;
    border: 1px solid #d9d9d9;
    border-radius: 0.3rem;
    width: 36rem;
  }

  .logo {
    padding: 1.4rem 0;
    display: flex;
    justify-content: center;
  }

  .main {
    border: 1px solid #d9d9d9;
    padding: 2rem;
    width: 36rem;
  }

  .button {
    text-decoration: none;
    color: #000;
    padding: 0.7rem;
    width: 100%;
    background: linear-gradient(to bottom, #f7dfa1 0%, #f0c14b 100%);
    border-color: #a88734 #9c7e31 #846a29;
    display: flex;
    justify-content: center;
    border-radius: 0.3rem;
  }

  .button:hover {
    background: linear-gradient(to bottom, #f0c14b 0%, #f0bf42 100%);
  }

  h2 {
    font-weight: 400;
    margin-bottom: 1rem;
    text-align: center;
  }
</style>

<body>
  <section class="register">
    <div class="container">
      <div class="wrapper">
        <div class="logo">
          <img src="logo_black.png" alt="Amazon Logo" />
        </div>
        <div class="main">
          <h2>Successfully deleted</h2>
          <a class="button" href="admin_dashboard.php">Go to dashboard > ></a>
        </div>
      </div>
    </div>
  </section>
</body>

</html>