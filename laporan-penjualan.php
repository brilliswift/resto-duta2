<?php
include 'koneksi.php';

$query  = "SELECT lp.id_laporan, u.username, lp.tgl_laporan, lp.total_pendapatan
           FROM Laporan_Penjualan lp
           JOIN User u ON lp.id_user = u.id_user";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    echo "Error: " . mysqli_error($koneksi);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penjualan</title>
</head>
<body>
    <h2>Laporan Penjualan</h2>

    <table border="1">
        <tr>
            <th>ID Laporan</th>
            <th>Username</th>
            <th>Tanggal Laporan</th>
            <th>Total Pendapatan</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['id_laporan'] ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['tgl_laporan'] ?></td>
                <td><?= $row['total_pendapatan'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
