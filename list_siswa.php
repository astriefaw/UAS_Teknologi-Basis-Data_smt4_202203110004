<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pendaftar</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Daftar Pendaftar</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'config.php';
        $sql = "SELECT * FROM pendaftar";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $no = 1;
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$no."</td>
                        <td>".$row['nama']."</td>
                        <td>".$row['alamat']."</td>
                        <td>".$row['jenis_kelamin']."</td>
                        <td>".$row['agama']."</td>
                        <td>".$row['sekolah_asal']."</td>
                        <td>
                            <a href='form_edit.php?id=".$row['id']."'>Edit</a> | 
                            <a href='hapus.php?id=".$row['id']."'>Hapus</a>
                        </td>
                    </tr>";
                $no++;
            }
        } else {
            echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
