<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data tamu</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h1>Data tamu sekolah</h1>

    <table border='2'>
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>keterangan</th>
            <th>jam kehadiran</th>
        </tr>

    <?php
        $data = mysqli_query($conn, "SELECT * FROM tamu_ps");
        while($item = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td><?= $item['id']; ?></td>
        <td><?= $item['nama']; ?></td>
        <td><?= $item['keterangan']; ?></td>
        <td><?= $item['jam_kehadiran']; ?></td>
        <td>
            <a href="edit.php?id=<?= $item['id']; ?>">Edit</a>
        </td>
    </tr>
    <?php } ?>

    </table>
    <a href="tambah.php">Tambah</a>
</body>
</html>