<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa Baru</h1>
    <form action="proses_pendaftaran.php" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" required><br>
        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" required>Laki-laki
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>Perempuan<br>
        <label for="agama">Agama:</label><br>
        <select name="agama" id="agama">
            <option>Islam</option>
            <option>Kristen</option>
            <option>Hindu</option>
            <option>Budha</option>
            <option>Atheis</option>
        </select><br>
        <label for="sekolah_asal">Sekolah Asal:</label><br>
        <input type="text" id="sekolah_asal" name="sekolah_asal" required><br><br>
        <input type="submit" value="Daftar">
    </form>
</body>
</html>
