<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $id_user           = $_POST['id_user'];
    $id_makanan        = $_POST['id_makanan'];
    $jumlah_penjualan  = $_POST['jumlah_penjualan'];
    $tgl_penjualan     = $_POST['tgl_penjualan'];

    $query = "INSERT INTO Penjualan (id_user, id_makanan, jumlah_penjualan, tgl_penjualan)
              VALUES ('$id_user', '$id_makanan', '$jumlah_penjualan', '$tgl_penjualan')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Data penjualan berhasil ditambahkan.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Penjualan</title>
</head>
<body>
    <h2>Tambah Penjualan</h2>

    <form method="POST" action="">
        <label for="id_user">ID User:</label>
        <input type="number" name="id_user" required><br>

        <label for="id_makanan">ID Makanan:</label>
        <input type="number" name="id_makanan" required><br>

        <label for="jumlah_penjualan">Jumlah Penjualan:</label>
        <input type="number" name="jumlah_penjualan" required><br>

        <label for="tgl_penjualan">Tanggal Penjualan:</label>
        <input type="datetime-local" name="tgl_penjualan" required><br>

        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>
