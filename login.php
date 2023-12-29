<?php

include '../dukcapil/admin/function.php';

session_start();

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");

  if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {
      $_SESSION["login"] = true;

      if (isset($_POST['remember'])) {
        setcookie('id', $row['id'], time() + 1);
        setcookie('key', hash('sha256', $row['username']));
      }
      header('Location:../dukcapil/admin/index_admin.php');
      exit;
    }
  }
  $error = true;

  echo "
      <script>
              alert('username/password salah');
      </script>
    ";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login_style.css">

  <title>Login</title>
</head>


<body>

  <form action="" method="POST" style="margin-top: 50px;">

    <div class="imgContainer">
      <img src="admin/img/user.png" alt="avatar" class="avatar">

    </div>
    <div class="container">
      <label for="username" style="color:lightskyblue; font-weight:bolder;"><b>Username</b></label>
      <input type="text" placeholder="username" name="username">

      <label for="password" style="color:lightskyblue; font-weight:bolder;"><b>password</b></label>
      <input type="password" placeholder="password" name="password">

      <button type="submit" name="login" style="font-weight:bolder;">Login</button>

    </div>

  </form>

</body>

</html>