<?php 

include 'function.php';
$id = $_GET['id'];

if (hapusWarga($id)) {
  echo "<script>
            alert('data berhasil dihapus');
            document.location.href = '../data_warga.php'
            </script>";
}
echo "<script>
            alert('data gagal dihapus');
            document.location.href = '../data_warga.php'
            </script>";


?>