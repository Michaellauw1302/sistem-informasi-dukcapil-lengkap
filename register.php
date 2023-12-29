<?php 
include '../dukcapil/admin/function.php';

if (isset($_POST['submit'])) {
    if ( register($_POST) > 0 ) {
      echo "
            <script>
                alert('selamat datang admin');
            </script>
      ";
    }else{
      echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="container mt-5">
    <h1 class="fw-bolder text-primary">Registrasi Pegawai Administrasi</h1>
    <form action="" method="post">
      <div class="mb-3">
        <label for="nama_lengkap" class="form-label mt-2">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama_lengkap" aria-describedby="nama_lengkap" name="nama_lengkap">
      </div>
      <div class="">
        <label for=" alamat" class="form-label mt-2">Alamat</label>
        <input type="text" class="form-control" id="alamat" aria-describedby="alamat" name="alamat">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label mt-5">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="email" name="email">
      </div>
      <div class="mb-3">
        <label for="username" class="form-label mt-2">Username</label>
        <input type="text" class="form-control" id="username" aria-describedby="username" name="username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label mt-2">password</label>
        <input type="password" class="form-control" id="password" aria-describedby="password" name="password">
      </div>
      <div class="mb-3">
        <label for="password2" class="form-label mt-2">Konfirmasi password</label>
        <input type="password" class="form-control" id="password2" aria-describedby="password2" name="password2">
      </div>


      <button type="submit" class="btn btn-primary mt-5  mb-5" name="submit">Daftar</button>
      <a href="index.php" class="btn btn-primary mt-5  mb-5">Cencel</a>
    </form>

  </div>

</body>

</html>