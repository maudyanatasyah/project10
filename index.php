<?php
	function rupiah($angka){
		$hasil_rupiah = number_format($angka,2,',','.');
		return $hasil_rupiah;
	}
?>
<html>
<head>
  <title>Arkademy</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Produk</h1>
  <a href="simpan.php">Tambah Data</a><br><br>
  <div class="container">
  <table border="1" width="100%">
  <tr>
	<th>No</th>
    <th>Nama_produk</th>
    <th>Keterangan</th>
    <th>Harga</th>
    <th>Jumlah</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Include / load file koneksi.php//
  include "koneksi.php";
  // Buat query untuk menampilkan semua data siswa
  $no = 1;
  $sql = $pdo->prepare("SELECT * FROM produk");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
	echo "<td>".$no++;
    echo "<td>".$data['Nama_produk']."</td>";
    echo "<td>".$data['Keterangan']."</td>";
    echo "<td>Rp ".rupiah($data['Harga'])."</td>";
    echo "<td>".$data['Jumlah']."</td>";
    echo "<td><a href='ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
  </div>
</body>
</html>         