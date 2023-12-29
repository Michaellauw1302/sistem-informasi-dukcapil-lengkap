<?php 
include 'function.php';
$id = $_GET['id'];

if (hapusBayi($id)) {
  echo "<script>
            alert('data berhasil dihapus');
            document.location.href = '../data_bayi.php'
            </script>";
}
echo "<script>
            alert('data gagal dihapus');
            document.location.href = '../data_bayi.php'
            </script>";



?>