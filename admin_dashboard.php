<!DOCTYPE html>
<?php
$db = new Mysqli;
$db->connect('localhost', 'root', '', 'register');
if (isset($_POST['search'])) {
  $searchKey = $_POST['search'];
  $sql = "select * from users where name like '%$searchKey%'";
} else {
  $sql = "SELECT * FROM users";
  $searchKey = "";
}
$rows = $db->query($sql);
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Amazon User Dashboard</title>
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
    position: relative;
  }

  .header {
    background-color: #131a22;
    padding: 2rem;
    padding-left: 4rem;
    height: 8rem;
    color: #fff;
    width: 100%;
    display: flex;
    justify-content: space-between;
  }

  .sidenav {
    position: absolute;
    background-color: #fff;
    border-right: 1px solid #131a22;
    height: 100%;
    left: 0;
    width: 20rem;

  }

  .logo {
    display: flex;
    justify-content: center;
    background-color: #131a22;
    padding: 2rem 0;
    height: 8rem;
  }

  nav ul {
    list-style: none;
  }

  nav ul li {
    background-color: #f0c14b;
    text-align: center;
    padding: 1rem 0;
    width: 100%;
    border-left: 4px solid #131a22;
  }

  nav ul li a {
    text-decoration: none;
    width: 100%;
    color: #000;
  }

  .wrapper {
    height: 100vh;
    margin-left: 20rem;
  }

  table,
  th,
  td {
    border-bottom: 1px solid #d9d9d9;
    border-collapse: collapse;
    text-align: center;
  }

  th,
  td {
    padding: 1rem 0;
  }

  th {
    background-color: #232f3e;
    color: #fff;
  }

  table {
    width: 100%;
  }

  tr:hover {
    background-color: #f2f2f2;
  }

  .fa-search {
    color: #fff;
  }

  .fa-trash {
    color: #f0c14b;
  }

  input {
    padding: 1.2rem;
    outline: none;
    width: 40rem;
  }

  button {
    background-color: #f0c14b;
    padding: 1.2rem;
    border: 1px solid #f0c14b;
    cursor: pointer;
  }
</style>

<body>
  <div class="sidenav">
    <div class="logo">
      <img src="logo_white.png" alt="Amazon Logo" />
    </div>
    <nav>
      <ul>
        <li><a href="#">User management</a></li>
      </ul>
    </nav>
  </div>
  <section class="main">
    <div class="container">
      <div class="wrapper">

        <form action="" method="POST">
          <div class="header">
            <h2>Admin Dashboard</h2>
            <div class="search">
              <input type="text" name="search" placeholder="Search here" />
              <!-- <button type="submit" name="search"><i class="fas fa-search"></i></button> -->
            </div>
          </div>
          <div class="table">
            <table class="table--user">
              <thead>
                <tr>
                  <th>User ID</th>
                  <th>Name</th>
                  <th>Mobile number or email</th>
                  <th>Password</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <?php while ($row = mysqli_fetch_assoc($rows)) : ?>
                    <td><?php echo $row['uid'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td>
                      <a href="deleted.php?id=<?php echo $row['uid'] ?>"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
              <?php endwhile;  ?>
              </tbody>
            </table>
          </div>
        </form>
      </div>
    </div>
  </section>
</body>

</html>