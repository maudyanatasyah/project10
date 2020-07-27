<html>
<head>
  <title>Arkademy</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Ubah Data Produk</h1>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Ambil data ID yang dikirim oleh index.php melalui URL
  if(isset($_GET['id'])){
  $id = $_GET['id'];
  // Query untuk menampilkan data produk berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM produk WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="prosesubah.php?id=<?php echo $id; ?>">
    <table cellpadding="8">
	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
      <tr>
        <td>Nama_Produk</td>
        <td><input type="text" name="Nama_produk" value="<?php echo $data['Nama_produk']; ?>"></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td><input type="text" name="Keterangan" value="<?php echo $data['Keterangan']; ?>"></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td><input type="text" name="Harga" value="<?php echo $data['Harga']; ?>"></td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td><input type="text" name="Jumlah" value="<?php echo $data['Jumlah']; ?>"></td>
      </tr>
    </table>
    <hr>
    <input type="submit" name="edit" value="Ubah">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>
<?php
}
?>




