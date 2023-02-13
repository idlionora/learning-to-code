<?php 
if (!empty($_POST['proses'])){
    print_r($_POST);
} 
//!empty() bisa ditukar dengan isset()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Form2</title>
</head>
<body>
    <h2>Parsing Array</h2>
    <form action="" method="post">
        Nama: <input type="text" name="nama" />
        <br><br>
        Alamat: <textarea name="alamat" rows="8" col="200"></textarea>
        <br><br>
        Program Studi:
        <select name="program_studi">
            <option value="SI">Sistem Informasi</option>
            <option value="TI">Teknik Informatika</option>
            <option value="MI">Management Informatika</option>
        </select>
        <br><br>
        <input type="submit" name="proses" value="submit">
    </form>
    <br>
    <h2>Isian Form Menuju targetForm.php</h2>
    <form action="targetForm.php" method="post">
        Nama: <input type="text" name="nama" />
        Alamat: <input type="text" name="alamat" /><br><br>
        <input type="submit" value="submit" />
    </form>
</body>
</html>

