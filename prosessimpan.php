<?php
// Load file koneksi.php
include "koneksi.php";
if(isset($_POST['save'])){
// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$Nama_produk = $_POST['Nama_produk'];
$Keterangan = $_POST['Keterangan'];
$Harga = $_POST['Harga'];
$Jumlah = $_POST['Jumlah'];
// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO produk(id, Nama_produk, Keterangan, Harga, Jumlah) VALUES(:id,:Nama_produk,:Keterangan,:Harga,:Jumlah)");
$sql->bindParam(':id', $id);
$sql->bindParam(':Nama_produk', $Nama_produk);
$sql->bindParam(':Keterangan', $Keterangan);
$sql->bindParam(':Harga', $Harga);
$sql->bindParam(':Jumlah', $Jumlah);
$sql->execute(); // Eksekusi query insert
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location:index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='simpan.php'>Kembali Ke Form</a>";
}}
?>