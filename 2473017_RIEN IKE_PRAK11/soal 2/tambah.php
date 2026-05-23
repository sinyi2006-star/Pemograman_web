<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah_2473017</title>
</head>
<body>
    <div style="width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc;">
        <h3 style="text-align: center;">Tambah Data Siswa</h3>
        <form action="proses_tambah.php" method="POST">
            <label>Nama:</label><br>
            <input type="text" name="nama" style="width: 100%; margin-bottom: 10px;" required><br>
            
            <label>Kelas:</label><br>
            <input type="text" name="kelas" style="width: 100%; margin-bottom: 10px;" required><br>
            
            <button type="submit" style="background-color: green; color: white; padding: 5px;">Simpan</button>
            <a href="index.php"><button type="button" style="background-color: #007bff; color: white; padding: 5px;">Kembali</button></a>
        </form>
    </div>
</body>
</html>