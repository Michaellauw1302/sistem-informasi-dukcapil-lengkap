<?php 

session_start();

if ( !isset($_SESSION['login']) )  {
 header('Location:../index.php');
 exit;
}
include 'function.php';
?>

<?php include 'header.php' ?>
<h1 style="text-align:center; margin-top:25px">KARTU KELUARGA</h1>

<h4 style="text-align:center; margin-top:15px">No. </h4>
<div class="container mb-5"></div>
<div class="container mt-5">
  <a href="kk_pdf.php" class="btn btn-primary" style="float: right;" name="download">Download
    PDF</a>
  <div class="container bottom-0 end-0 bottom-0 end-0">
    <p>Nama Kepala Keluarga :</p>
    <p>Alamat : </p>
    <p>RT / RW : </p>
    <P>Kode Pos : </P>
    <p>Desa/Kelurahan :</p>
    <p>Kecamatan : </p>
    <p>Kabupaten/Kota : </p>
    <p>Provinsi : </p>

  </div>

</div>
<div class="container mt2">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Lengkap :</th>
        <th scope="col">Nik</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Tempat Lahir</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Agama</th>
        <th scope="col">Pendidikan</th>
        <th scope="col">Jenis Pekerjaan</th>
        <th scope="col">Golongan Darah</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Michael</td>
        <td>fsfdsafasfasdf</td>
        <td>laki</td>
        <td>MATARAM</td>
        <td>13-02-2002</td>
        <td>KATOLIK</td>
        <td>SMK/SEDERAJAT</td>
        <td>MAHASISWA</td>
        <td>A</td>
      </tr>
    </tbody>
  </table>
</div>

</body>

</html>