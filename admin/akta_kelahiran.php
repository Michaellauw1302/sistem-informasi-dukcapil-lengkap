<?php 

if ( !isset($_SESSION['login']) )  {
  header('Location:../index.php');
  exit;
 }
 
include 'header.php';

?>

<body>
  <div class="container mt-5">
    <h1>Akta Kelahiran</h1>
  </div>
</body>