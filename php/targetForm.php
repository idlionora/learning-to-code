<?php 
$nama = $_GET["nama"]??$_POST['nama'];
$alamat = $_GET['alamat']??$_POST['alamat'];
//variabel GET adalah array, kita mengambil satu persatu sesuai index
var_dump($_GET)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Form1</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="nama"/>
        <input type="alamat" name="alamat"/>
        <input type="submit"/>
    </form>
    <h1>Selamat Datang, <?php echo $nama; ?></h1>
    <p>Anda tinggal di <?php echo $alamat; ?>.</p>
    <p>Selamat belajar pemrograman dasar PHP.</p>
</body>
</html>
