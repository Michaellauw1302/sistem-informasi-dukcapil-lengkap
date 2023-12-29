<?php 
if (isset($_POST)) {
var_dump($_POST);

}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Cara Menambah Baris Baru pada Table Menggunakan Javascript </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
  <button onclick="tambah();">Tambah Baris</button><br /><br />
  <form action="" method="post">
    Nama Lengkap: <input type="text" name="nama" id="nama" /><br /><br />
    Paket Kursus: <input type="text" name="paket" id="paket" /><br /><br />
    Waktu Kursus: <input type="text" name="lama" id="lama" /><br /><br />


    <table border="1">

      <tr>
        <th>Nama Murid</th>
        <th>Paket Kursus</th>
        <th>Waktu Kursus(Bulan)</th>
      </tr>

      <tr>
        <td>Ando</td>
        <td>Design Grapish</td>
        <td>10</td>
      </tr>

      <tr>
        <td>Bannu</td>
        <td>Web Design</td>
        <td>5</td>
      </tr>

      <tr>
        <td>Chelsea</td>
        <td>Web Master</td>
        <td>9</td>
      </tr>

      <tr>
        <td>Dennies</td>
        <td>Web Programming</td>
        <td>15</td>
      </tr>
      <button type="submit" name="submit">SIMPAn</button>
    </table>
  </form>

</body>

<script>
function tambah() {
  // untuk ambil nilai pada input
  var nama = document.getElementById('nama').value;
  var paket = document.getElementById('paket').value;
  var lama = document.getElementById('lama').value;


  // 0 = baris awal pada tabel
  var table = document.getElementsByTagName('table')[0];

  // tambah baris kosong pada tabel
  // 0 = dihitung dari atas 
  // table.rows.length = menambahkan pada akhir baris
  // table.rows.length/2 = menambahkan data pada baris tengah tabel , urutan baris ke 2 
  var newRow = table.insertRow(table.rows.length / 2);

  // tambah cell pada baris baru
  var cell1 = newRow.insertCell(0);
  var cell2 = newRow.insertCell(1);
  var cell3 = newRow.insertCell(2);

  // tambah nilai ke dalam cell
  cell1.innerHTML = nama;
  cell2.innerHTML = paket;
  cell3.innerHTML = lama;
}
</script>

</html>