<?php
include 'config.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah_asal = $_POST['sekolah_asal'];

$sql = "INSERT INTO pendaftar (nama, alamat, jenis_kelamin, agama, sekolah_asal)
VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php?message=success");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
