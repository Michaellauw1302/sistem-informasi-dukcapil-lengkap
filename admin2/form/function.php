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
function tambah($data){
    global $conn;
    $foto = upload();
    $nama = htmlspecialchars($data['nama']);
    $usia = htmlspecialchars($data['usia']);
    $nik = htmlspecialchars($data['nik']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
    $tempat_lahir = htmlspecialchars($data['tempat_lahir']);
    $tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
    $alamat = htmlspecialchars($data['alamat']);
    $agama = htmlspecialchars($data['agama']);
    $kwn = htmlspecialchars($data['kwn']);
    $no_telp = htmlspecialchars($data['no_telp']);
    $pekerjaan = htmlspecialchars($data['pekerjaan']);
    $pendidikan = htmlspecialchars($data['pendidikan']);
    $email = htmlspecialchars($data['email']);
    $status = htmlspecialchars($data['status']);
    

    $query = "INSERT INTO warga VALUES
              ('','$nama','$usia','$foto','$nik','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$alamat','$agama','$kwn',' $no_telp','$pekerjaan','$pendidikan','$email','$status');
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function addBayi($data){
  global $conn;
  $nama_lengkap = htmlspecialchars($data['nama_lengkap']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $tempat_tgl_lahir = htmlspecialchars($data['tempat_tgl_lhr']);
  $tempat_lahir = htmlspecialchars($data['tempat_lahir']);
  $generasi = htmlspecialchars($data['generasi']);
  $penanganan = htmlspecialchars($data['penolong_kelahiran']);
  $berat = htmlspecialchars($data['berat']);
  $panjang = htmlspecialchars($data['panjang']);
  $foto = upload();

  $query = "INSERT INTO data_bayi VALUES 
           ('','$nama_lengkap','$jenis_kelamin','$tempat_tgl_lahir','$tempat_lahir','$generasi','$penanganan','$berat','$panjang','$foto');
  ";
  
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function addAkta($data){
  global $conn;
  $no_akta = htmlspecialchars($data['no_akta']);
  $id_bayi = htmlspecialchars($data['konfirm_nama']);
  $nama = htmlspecialchars($data['nama']);
  $warga_negara = htmlspecialchars($data['warga_negara']);
  $tempat_lahir = htmlspecialchars($data['tempat_lahir']);
  $tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $bulan = htmlspecialchars($data['bulan']);
  $tahun = htmlspecialchars($data['tahun']);
  $generasi = htmlspecialchars($data['generasi']);
  $query = "INSERT INTO detail_akta VALUES
            ('$no_akta','$id_bayi','$warga_negara','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$bulan','$tahun','$nama','$generasi');
  ";
  
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
function inputKtp($data){
  global $conn;
  $nik = htmlspecialchars($data['nik']);
  $foto = upload();
  $nama = htmlspecialchars($data['nama']);
  $conf_nama = htmlspecialchars($data['conf_nama']);
  $usia = htmlspecialchars($data['usia']);
  $tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
  $tempat_lahir = htmlspecialchars($data['tempat_lahir']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $alamat = htmlspecialchars($data['alamat']);
  $rt = htmlspecialchars($data['rt']);
  $rw = htmlspecialchars($data['rw']);
  $desa_kelurahan = htmlspecialchars($data['desa_kelurahan']);
  $kecamatan = htmlspecialchars($data['kecamatan']);
  $agama = htmlspecialchars($data['agama']);
  $status = htmlspecialchars($data['status']);
  $pekerjaan = htmlspecialchars($data['pekerjaan']);
  $kwn = htmlspecialchars($data['kwn']);

  $query = "INSERT INTO ktp VALUES
          ('$nik','$foto','$conf_nama','$usia','$tanggal_lahir','$tempat_lahir','$jenis_kelamin','$alamat','$rt','$rw','$desa_kelurahan','$kecamatan','$agama','$status','$pekerjaan','$kwn','$nama');
  ";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);

}

function upload(){
  $namaFile = $_FILES['foto']['name'];
  $tipeFile = $_FILES['foto']['type'];
  $error = $_FILES['foto']['error'];
  $tmpName = $_FILES['foto']['tmp_name'];
  $ukuranFile = $_FILES['foto']['size'];
  
  //ekstensi yang diperbolehkan
  $extention = ['jpg', 'jpeg', 'png', 'pdf'];
  $ekstensiFile = explode('.',$namaFile);
  $ekstensiFile = strtolower(end($ekstensiFile));
  if ( !in_array($ekstensiFile, $extention) ) {
    echo "
				<script>
					alert('file tidak sesuai');
				</script>
		";
  }
  if ($ukuranFile > 1000000  ) {
    echo "
        <script>
          alert('ukuran file melebihi batas yang ditentukan');
        </script>
    ";
    return false;
  }
  
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiFile;
  move_uploaded_file($tmpName, '../foto_warga/'.$namaFileBaru);
  return $namaFileBaru;
  
}

function updateBayi($data){
  global $conn;
  $id = $data['id'];
  $nama_lengkap = htmlspecialchars($data['nama_lengkap']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $tempat_tgl_lahir = htmlspecialchars($data['tempat_tgl_lhr']);
  $tempat_lahir = htmlspecialchars($data['tempat_lahir']);
  $generasi = htmlspecialchars($data['generasi']);
  $penanganan = htmlspecialchars($data['penolong_kelahiran']);
  $berat = htmlspecialchars($data['berat']);
  $panjang = htmlspecialchars($data['panjang']);
  $fotoLama = $data['fotoLama'];
  
  if ( $_FILES['foto']['error'] === 4 ) {
    $foto = $fotoLama;
  }else{
    $foto = upload();
  }

  $query = "UPDATE data_bayi SET
    nama_lengkap = '$nama_lengkap',
    jenis_kelamin = '$jenis_kelamin',
    tempat_tgl_lahir = '$tempat_tgl_lahir',
    tempat_dilahirkan = '$tempat_lahir',
    anak_keberapa = '$generasi',
    penolong_kelahiran = '$penanganan',
    berat = '$berat',
    panjang = '$panjang',
    foto = '$foto'
    WHERE id='$id'
   ";
   mysqli_query($conn, $query);
   return mysqli_affected_rows($conn);

}

function update($data){
    global $conn;
    $id = $data['id'];
    
    $nama = htmlspecialchars($data['nama']);
    $usia = htmlspecialchars($data['usia']);
    $nik = htmlspecialchars($data['nik']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
    $tempat_lahir = htmlspecialchars($data['tempat_lahir']);
    $tanggal_lahir = htmlspecialchars($data['tanggal_lahir']);
    $alamat = htmlspecialchars($data['alamat']);
    $agama = htmlspecialchars($data['agama']);
    $kwn = htmlspecialchars($data['kwn']);
    $no_telp = htmlspecialchars($data['no_telp']);
    $pekerjaan = htmlspecialchars($data['pekerjaan']);
    $pendidikan = htmlspecialchars($data['pendidikan']);
    $email = htmlspecialchars($data['email']);
    $status = htmlspecialchars($data['status']);
    $fotoLama = $data['fotoLama'];

    if ( $_FILES['foto']['error'] === 4 ) {
      $foto = $fotoLama;
    }else{
      $foto = upload();
    }

    $query = " UPDATE warga SET
               foto = '$foto',
               usia = '$usia',
               nama = '$nama',
               nik = '$nik',
               jenis_kelamin = '$jenis_kelamin',
               tempat_lahir = '$tempat_lahir',
               tanggal_lahir = '$tanggal_lahir',
               alamat = '$alamat',
               agama = '$agama',
               kwn = '$kwn',
               no_telp = '$no_telp',
               pekerjaan = '$pekerjaan',
               pendidikan = '$pendidikan',
               email = '$email',
               status = '$status'
               WHERE id = '$id'
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

  
}


function hapusWarga($id){
  global $conn;
  
  mysqli_query($conn, "DELETE FROM warga WHERE id=$id ");

  return mysqli_affected_rows($conn);
}

function hapusBayi($id){
  global $conn;
  mysqli_query($conn, "DELETE FROM data_bayi WHERE id=$id ");
  return mysqli_affected_rows($conn);
}
