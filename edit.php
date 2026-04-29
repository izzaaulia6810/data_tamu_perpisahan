<?php include 'koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM  tamu_ps WHERE id='$id'");
$item = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <form method="post">
        <h1>Ubah data</h1>
        nama <input type="text" name="nama" value="<?= $item['nama']; ?>"><br><br>
        keterangan 
        <select name="keterangan">
        <option value="">Pilih kelompok</option>
        <option value="orang_tua">Orang tua</option>
        <option value="guru">Guru</option>
        <option value="siswa">Siswa</option>
        <option value="tamu_kusus">Tamu kusus</option>
    </select><br><br>
        jam kehadiran <input type="text" name="jam" value="<?= $item['jam_kehadiran']; ?>"><br><br>

        <button type="submit" name="update">Simpan</button>
    </form>
</body>
</html>
<?php
if(isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE tamu_ps SET
    nama='$_POST[nama]',
    keterangan='$_POST[keterangan]',
    jam_kehadiran='$_POST[jam]'
    WHERE id='$id'
    ");

 header("Location: index.php");
}
?>