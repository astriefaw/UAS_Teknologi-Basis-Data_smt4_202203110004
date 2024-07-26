<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Selamat Datang di Pendaftaran Mahasiswa Baru</h1>
    <nav>
        <ul>
            <li><a href="form_daftar.php">Daftar Baru</a></li>
            <li><a href="list_siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    <?php
    if (isset($_GET['message']) && $_GET['message'] == 'success') {
        echo "<p class='success'>Pendaftaran Mahasiswa Baru Berhasil!</p>";
    }
    ?>
</body>
</html>
