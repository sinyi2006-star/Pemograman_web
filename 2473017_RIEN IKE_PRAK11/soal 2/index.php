<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index_2473017</title>
</head>
<body>
    <div style="width: 500px; margin: auto;">
        <h2 style="text-align:center;">Data Siswa</h2>
        <a href="tambah.php"><button style="background-color: green; color: white; padding: 5px;">Tambah Data</button></a>
        <br><br>
        <table border="1" cellspacing="0" cellpadding="8" width="100%">
            <tr style="background-color: #f2f2f2;">
                <th>ID</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
            <?php
            include 'koneksi.php';
            $sql = "SELECT * FROM siswa";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nama"] . "</td>";
                    echo "<td>" . $row["kelas"] . "</td>";
                    echo "<td>
                            <a href='edit.php?id=" . $row["id"] . "'><button style='background-color: #007bff; color: white;'>Edit</button></a>
                            <a href='hapus.php?id=" . $row["id"] . "'><button style='background-color: red; color: white;'>Hapus</button></a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>