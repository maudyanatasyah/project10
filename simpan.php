<html>
<head>
  <title>Arkademy</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Tambah Data Produk</h1>
  <form method="post" action="prosessimpan.php">
    <table cellpadding="10">
<input type="hidden" name="id">
      <tr>
        <td>Nama_produk</td>
        <td><input type="text" name="Nama_produk"></td>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td><input type="text" name="Keterangan"></td>
        </td>
      </tr>
      <tr>
        <td>Harga</td>
        <td><input type="text" name="Harga"></td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td><input type="text"  name="Jumlah"></td>
      </tr>
    </table>
    <hr>
    <input type="submit" name="save" value="Simpan">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>