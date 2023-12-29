<?php 
include 'header.php';
include 'function.php';

$data_bayi = query("SELECT * FROM data_bayi");

if ( isset($_POST['submit']) ) {
  // var_dump($_POST);
  // die;
  if ( addAkta($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = '../data_bayi.php'
            </script>";
  }else{
    echo "<script>
    alert('data gagal ditambahkan');
    document.location.href = '../data_bayi.php'
    </script>";
  }
}


?>

<body>
  <div class="container mt-5">
    <h1 class="fw-bolder text-primary">Input Akta</h1>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="row mb-3">
        <label for="no_akta" class="col-sm-2 col-form-label">Nomor Akta</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="no_akta" name="no_akta">
        </div>
      </div>
      <div class="row mb-3">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
      </div>

      <div class="row mb-3">
        <label for="konfirm_nama" class="col-sm-2 col-form-label">Konfirmasi Nama </label>
        <div class="col-sm-8">
          <select class="form-select" aria-label="Default select example" name="konfirm_nama">
            <option selected>--Nama Bayi--</option>
            <?php foreach($data_bayi as $bayi) : ?>
            <option value="<?= $bayi['id']; ?>"><?=  $bayi['nama_lengkap']; ?></option>
            <?php endforeach ?>
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <label for="warga_negara" class="col-sm-2 col-form-label">Warga Negara</label>
        <div class="col-sm-8">
          <select class="form-select" aria-label="Default select example" name="warga_negara">
            <option selected>--Kewarganegaraan--</option>
            <option value="indonesia">WNI (warga negara indonesia)</option>
            <option value="asing">WNA (warga negara asing)</option>
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
        </div>
      </div>
      <div class="row mb-3">
        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
        </div>
      </div>
      <div class="row mb-3">
        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-8">
          <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
            <option selected>--jenis kelamin--</option>
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option>
          </select>
        </div>
      </div>
      <div class="row mb-3">
        <label for="bulan" class="col-sm-2 col-form-label">Bulan</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="bulan" name="bulan">
        </div>
      </div>
      <div class="row mb-3">
        <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="tahun" name="tahun">
        </div>
      </div>
      <div class="row mb-3">
        <label for="generasi" class="col-sm-2 col-form-label">Anak Ke - </label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="generasi" name="generasi">
        </div>
      </div>
      <button type="submit" name="submit" class="btn btn-primary mt-2" style="margin-left: 220px;">Simpan </button>

    </form>
  </div>

</body>