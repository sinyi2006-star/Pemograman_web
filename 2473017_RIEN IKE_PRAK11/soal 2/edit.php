<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM siswa WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>edit_2473017</title>
</head>
<body>
    <div style="width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc;">
        <h3 style="text-align: center;">Edit Data Siswa</h3>
        <form action="proses_edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
            <label>Nama:</label><br>
            <input type="text" name="nama" value="<?php echo $row['nama']; ?>" style="width: 100%; margin-bottom: 10px;" required><br>
            
            <label>Kelas:</label><br>
            <input type="text" name="kelas" value="<?php echo $row['kelas']; ?>" style="width: 100%; margin-bottom: 10px;" required><br>
            
            <button type="submit" style="background-color: green; color: white; padding: 5px;">Update</button>
            <a href="index.php"><button type="button" style="background-color: #007bff; color: white; padding: 5px;">Kembali</button></a>
        </form>
    </div>
</body>
</html>