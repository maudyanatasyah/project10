<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
if(isset($_POST['edit'])){
// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$Nama_produk = $_POST['Nama_produk'];
$Keterangan = $_POST['Keterangan'];
$Harga = $_POST['Harga'];
$Jumlah = $_POST['Jumlah'];
// Proses ubah data ke Database
$sql = $pdo->prepare("UPDATE produk SET Nama_produk=:Nama_produk, Keterangan=:Keterangan, Harga=:Harga, Jumlah=:Jumlah WHERE id=:id");
$sql->bindParam(':id', $id);
$sql->bindParam(':Nama_produk', $Nama_produk);
$sql->bindParam(':Keterangan', $Keterangan);
$sql->bindParam(':Harga', $Harga);
$sql->bindParam(':Jumlah', $Jumlah);
$sql->execute(); // Eksekusi / Jalankan query
if($sql){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='ubah.php'>Kembali Ke Form</a>";
}}
?>