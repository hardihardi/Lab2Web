<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Latihan - PHP Dasar</title>
</head>
<body>
<h1>Belajar PHP Dasar</h1>
<p>Hello World</p>
<?php
$nim = "312010281";
$nama = 'Hardianto';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>
<h2>Form Input</h2>
<form method="get">
<label>Nama: </label>
<input type="text" name="nama">
<input type="submit" value="Kirim">
</form>
<?php
if (isset($_GET['nama'])) {
    echo 'Selamat Datang ' . $_GET['nama'];
}
?>
</body>
</html>