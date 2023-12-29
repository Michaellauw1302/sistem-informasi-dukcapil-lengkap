<?php 
if ( !isset($_SESSION['login']) )  {
 header('Location:../index.php');
 exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="../css/sidebars.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/sidebars.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="index_admin.php">Catatan Sipil Desa BumiGora</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="btn btn-primary" aria-current="page" href="index_admin.php">Home</a>
          <a href="folder_data.php" class="btn btn-primary" style="float: right;">Folder Data Penduduk</a>
          <a href="form/index_registrasi.php" class="btn btn-primary" style="float: right;">Registrasi Penduduk</a>
          <a href="logout.php" class="btn btn-primary" style="float: right;">Logout</a>
        </div>
      </div>
    </div>
  </nav>