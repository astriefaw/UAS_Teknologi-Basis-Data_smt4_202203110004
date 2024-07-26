<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM pendaftar WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Hapus berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
