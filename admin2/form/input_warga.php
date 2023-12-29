<?php 

include 'header.php';
require 'function.php';

if ( !isset($_SESSION['login']) )  {
  header('Location:../../index.php');
  exit;
 }

if (isset($_POST["submit"]) ) {
  // var_dump($_POST);
  // var_dump($_FILES);
  // die;
  
  if ( tambah($_POST) > 0 ) {
      echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = '../data_warga.php'
            </script>";
    }else{
      echo "<script>
              alert('data gagal ditambahkan');
            </script>";
    }
}

?>

<body>
  <div class="container mt-5 mb-5 fw-bold text-primary" style="margin-bottom: 150px;">
    <h1>Form Registrasi Data Warga Baru</h1>
    <form action="" method="post" class="mb-5" enctype="multipart/form-data">
      <div class="row mb-3 mt-5 ">
        <label for="foto" class="col-sm-2 col-form-label">foto</label>
        <div class="col-sm-8">
          <input type="file" class="form-control" id="foto" name="foto">
        </div>
      </div>
      <div class="row mb-3 mt-5 ">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
      </div>
      <div class="row mb-3  mt-5">
        <label for="usia" class="col-sm-2 col-form-label">Usia</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="usia" name="usia">
        </div>
      </div>
      <div class="row mb-3 mt-5 ">
        <label for="nik" class="col-sm-2 col-form-label">Nik</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="nik" name="nik">
        </div>
      </div>

      <!-- kalo ngga bisa keinput ganti radio button nya -->

      <div class="row mb-3 mt-5 ">
        <label for="nik" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <select name="jenis_kelamin" style="width: 200px; margin-left:10px;" class="form-select"
          aria-label="Default select example">
          <option selected>Tidak Diketahui</option>
          <option value="laki-laki">LAKI-LAKI</option>
          <option value="perempuan">PEREMPUAN</option>
        </select>
      </div>

      <div class="row mb-3 mt-5 ">
        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
        </div>
      </div>

      <div class="row mb-3 mt-5 ">
        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
        </div>
      </div>

      <div class="row mb-3 mt-5 ">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
      </div>
      <div class="row mb-3 mt-5 ">
        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
        <select name="agama" style="width: 200px; margin-left:10px;" class="form-select"
          aria-label="Default select example">
          <option selected>Tidak Diketahui</option>
          <option value="katolik">katolik</option>
          <option value="kristen">kristen</option>
          <option value="hindu">hindu</option>
          <option value="budha">budha</option>
          <option value="islam">islam</option>
          <option value="konghucu">konghucu</option>

        </select>
      </div>
      <div class="row mb-3 mt-5 ">
        <label for="kwn" class="col-sm-2 col-form-label">Kewarganegaraan</label>
        <select name="kwn" style="width: 200px; margin-left:10px;" class="form-select"
          aria-label="Default select example">
          <option selected>Tidak Diketahui</option>
          <option value="wni">WNI</option>
          <option value="wna">WNA</option>
        </select>
      </div>
      <div class="row mb-3 mt-5 ">
        <label for="no_telp" class="col-sm-2 col-form-label">Nomor Telpon</label>
        <div class="col-sm-8">
          <input type="number" class="form-control" id="no_telp" name="no_telp">
        </div>
      </div>
      <div class="row mb-3 mt-5 ">
        <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
        </div>
      </div>
      <div class="row mb-3 mt-5 ">
        <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="pendidikan" name="pendidikan">
        </div>
      </div>
      <div class="row mb-3 mt-5 ">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-8">
          <input type="email" class="form-control" id="email" name="email">
        </div>
      </div>
      <div class="row mb-3 mt-5 ">
        <label for="status" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-8">
          <input type="status" class="form-control" id="status" name="status">
        </div>
      </div>
      <button type="submit" name="submit" class="btn btn-primary mt-2 mb-5" style="margin-left: 220px;">Simpan </button>
      <a href="../data_warga.php" class="btn btn-primary mt-2 mb-5">Cencel</a>
    </form>
  </div>
</body>