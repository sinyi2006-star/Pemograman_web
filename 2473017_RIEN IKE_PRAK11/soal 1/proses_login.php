<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_2473017</title>
</head>
<body>
    <?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "admin") {
        echo "<h2>Login berhasil!</h2>";
        echo "<h1>Selamat datang, <span style='color:blue;'>admin</span>.</h1>";
        echo "<a href='login.php' style='color:purple; font-size: 20px;'>kembali ke halaman login</a>";
    } else {
        echo "<h2 style='color:red;'>Username : $username Tidak Terdaftar!</h2>";
        echo "<a href='login.php' style='color:purple; font-size: 20px;'>kembali ke halaman login</a>";
    }
    ?>
</body>
</html>