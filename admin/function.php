<?php 
$conn = mysqli_connect("localhost","root", "", "dukcapil");

function query($query){
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row  = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
  }
  return $rows;
}

function register($data){
  global $conn;
  $nama = htmlspecialchars($data['nama_lengkap']);
  $alamat = htmlspecialchars($data['alamat']);
  $email = htmlspecialchars($data['email']);
  $username = strtolower( stripslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);
  

  //cek username

  $cekUsername = mysqli_query($conn, "SELECT username FROM user WHERE username='$username' " );
  
  if (mysqli_fetch_assoc($cekUsername)) {
    echo "
    <script>
      alert('username sudah digunakan');
    </script>
   ";
   return false;
  }

  //cek pasword
  if ( $password !== $password2 ) {
    echo "
          <script>
            alert('konfirmasi password tidak sesuai');
          </script>
    ";
    return false;
  }

  // return 1;
  
  $password = password_hash($password, PASSWORD_DEFAULT);
  mysqli_query($conn, "INSERT INTO user VALUES
                        ('','$nama','$alamat','$username','$email','$password');
   ");

   return mysqli_affected_rows($conn);
}


?>