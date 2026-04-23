<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
    <link rel="stylesheet" href="styleTambah.css">
</head>
<body>
    <h1>Tambah data</h1>
    <form method="post">
    nama <input type="text" name="nama"> <br><br>
    keterangan:
    <select name="keterangan">
        <option value="">Pilih kelompok</option>
        <option value="orang_tua">Orang tua</option>
        <option value="guru">Guru</option>
        <option value="siswa">Siswa</option>
        <option value="tamu_kusus">Tamu kusus</option>
    </select><br><br>
    jam kehadiran <input type="text" name="jam"> <br><br>


    <button type="submit" name="simpan">simpan</button>
    </form>

    <?php 
    if(isset($_POST['simpan'])) {
        mysqli_query($conn, "INSERT INTO tamu_ps (nama, keterangan, jam_kehadiran) VALUES (
        '$_POST[nama]',
        '$_POST[ket]',
        '$_POST[jam]'
        )");

        header("Location: index.php");
    }
    ?>
</body>
</html>