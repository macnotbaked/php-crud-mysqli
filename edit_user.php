<!DOCTYPE html>
<?php
$db = new Mysqli;

$db->connect('localhost', 'root', '', 'register');

$uid = $_GET['id'];
$sql = "select * from users where uid = '$uid'";
$rows = $db->query($sql);
$row = $rows->fetch_assoc();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sqlu = "update users set name='$name', phone='$phone',password='$password' where uid='$uid'";

    $db->query($sqlu);

    header('location: user_dashboard.php');
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amazon User Edit</title>
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

    h2 {
        font-weight: 400;
        margin-bottom: 1rem;
    }

    label {
        font-weight: 700;
        font-size: 1.2rem;
    }

    input {
        width: 100%;
        padding: 0.7rem;
        border-radius: 0.3rem;
        border: 1px solid #a6a6a6;
        margin-bottom: 1.2rem;
        outline: none;
    }

    input:focus {
        box-shadow: 0 0 5px rgba(240, 193, 75, 1);
        border: 2px solid rgba(240, 193, 75, 1);
    }

    .pass {
        margin-bottom: unset;
    }

    .alert {
        font-size: 1.1rem;
    }

    .fa-info {
        margin-right: 0.7rem;
        color: #00bfff;
        margin-bottom: 1.2rem;
    }

    .submit {
        cursor: pointer;
        background: linear-gradient(to bottom, #f7dfa1 0%, #f0c14b 100%);
        border-color: #a88734 #9c7e31 #846a29;
    }

    .submit:hover {
        background: linear-gradient(to bottom, #f0c14b 0%, #f0bf42 100%);
    }

    .button {
        text-decoration: none;
        color: #000;
        padding: 0.7rem;
        width: 100%;
        background: #fff;
        border: 1px solid #f0c14b;
        display: flex;
        justify-content: center;
        border-radius: 0.3rem;
        font-size: 1.2rem;
    }
</style>

<body>
    <section class="register">
        <div class="container">
            <div class="wrapper">
                <div class="logo">
                    <img src="logo_black.png" alt="Amazon Logo" />
                </div>
                <div class="form">
                    <h2>Edit account</h2>
                    <form action="" method="POST">
                        <label for="name">Your name</label> <br />
                        <input required type="text" name="name" value="<?php echo $row['name'] ?>" /> <br />

                        <label for="number/email">Mobile number or email</label> <br />
                        <input required type="text" name="phone" value="<?php echo $row['phone'] ?>" /><br />

                        <label for="password">Password</label> <br />
                        <input required class="pass" type="password" name="password" placeholder="At least 6 characters" title="Must contain at least 6 or more characters" value="<?php echo $row['password'] ?>" />
                        <br />
                        <span class="alert"><i class="fas fa-info"></i>Passwords must be at least 6
                            characters.</span>
                        <br />

                        <input class="submit" type="submit" name="submit" value="Save edit" />
                        <a href="user_dashboard.php" class="button">Cancel</a>


                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>