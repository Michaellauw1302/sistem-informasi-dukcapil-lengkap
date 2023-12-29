<?php


include 'header.php';
if ( !isset($_SESSION['login']) )  {
  header('Location:../../index.php');
  exit;
 }
?>

<body>
  <div class="container mt-5 fw-bold text-primary">
    <h1>Form Registrasi Kartu Keluarga</h1>
  </div>
</body>