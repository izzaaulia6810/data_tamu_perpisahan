<?php 
$conn = mysqli_connect("localhost", "root", "", "rekap_data");

if(!$conn) {
    die("koneksi gagal: " . mysqli_connect_error());
}
?>