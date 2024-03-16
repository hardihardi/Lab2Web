<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>

<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
    $nim = "312010281";
    $nama = 'Hardianto';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>
    <h2>Form Input</h2>
    <form method="post">
    <label>Nama: </label>
    <input type="text" name="nama">
    <input type="submit" value="Kirim">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo 'Selamat Datang ' . $_POST['nama'];
    } elseif (isset($_GET['nama'])) {
        echo 'Selamat Datang ' . $_GET['nama'];
    }
    ?>
</body>

</html>