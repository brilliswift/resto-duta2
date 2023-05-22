<?php
include 'koneksi.php';

$query  = "SELECT * FROM Makanan";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    echo "Error: " . mysqli_error($koneksi);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Bahan Makanan</title>
</head>
<body>
    <h2>Daftar Bahan Makanan</h2>

    <table border="1">
        <tr>
            <th>ID Makanan</th>
            <th>Nama Makanan</th>
            <th>Kategori Makanan</th>
            <th>Stok Makanan</th>
            <th>Tanggal Kadaluarsa</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['id_makanan'] ?></td>
                <td><?= $row['nama_makanan'] ?></td>
                <td><?= $row['kategori_makanan'] ?></td>
                <td><?= $row['stok_makanan'] ?></td>
                <td><?= $row['tgl_kadaluarsa'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
