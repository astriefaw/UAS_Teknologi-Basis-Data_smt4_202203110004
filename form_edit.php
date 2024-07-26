<?php
include 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM pendaftar WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Pendaftar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Edit Pendaftar</h1>
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required><br>
        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" <?php if($row['jenis_kelamin']=='Laki-laki'){echo 'checked';} ?> required>Laki-laki
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" <?php if($row['jenis_kelamin']=='Perempuan'){echo 'checked';} ?> required>Perempuan<br>
        <label for="agama">Agama:</label><br>
        <select name="agama" id="agama">
            <option <?php if($row['agama']=='Islam'){echo 'selected';} ?>>Islam</option>
            <option <?php if($row['agama']=='Kristen'){echo 'selected';} ?>>Kristen</option>
            <option <?php if($row['agama']=='Hindu'){echo 'selected';} ?>>Hindu</option>
            <option <?php if($row['agama']=='Budha'){echo 'selected';} ?>>Budha</option>
            <option <?php if($row['agama']=='Atheis'){echo 'selected';} ?>>Atheis</option>
        </select><br>
        <label for="sekolah_asal">Sekolah Asal:</label><br>
        <input type="text" id="sekolah_asal" name="sekolah_asal" value="<?php echo $row['sekolah_asal']; ?>" required><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
