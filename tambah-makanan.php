<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama_makanan     = $_POST['nama_makanan'];
    $kategori_makanan = $_POST['kategori_makanan'];
    $stok_makanan     = $_POST['stok_makanan'];
    $tgl_kadaluarsa   = $_POST['tgl_kadaluarsa'];

    $query = "INSERT INTO Makanan (nama_makanan, kategori_makanan, stok_makanan, tgl_kadaluarsa)
              VALUES ('$nama_makanan', '$kategori_makanan', '$stok_makanan', '$tgl_kadaluarsa')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Bahan makanan berhasil ditambahkan.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Bahan Makanan</title>
</head>
<body>
    <h2>Tambah Bahan Makanan</h2>

    <form method="POST" action="">
        <label for="nama_makanan">Nama Makanan:</label>
        <input type="text" name="nama_makanan" required><br>

        <label for="kategori_makanan">Kategori Makanan:</label>
        <input type="text" name="kategori_makanan" required><br>

        <label for="stok_makanan">Stok Makanan:</label>
        <input type="number" name="stok_makanan" required><br>

        <label for="tgl_kadaluarsa">Tanggal Kadaluarsa:</label>
        <input type="date" name="tgl_kadaluarsa" required><br>

        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>
