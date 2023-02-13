<?php
// Contoh pencetakan kode di PHP
function selamatDatang() {
	echo "<p>Selamat datang teman-teman Codepolitan :)</p>";
}
$pesan_nama = ' adalah nama lengkapku.';
// hanya underscore yang bisa untuk variabel, tidak strip/ minus
$namaLengkap = 2000;
$namaLengkap = 'nurul azizah';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testing PHP with HTML</title>
</head>
<body>
	<h1>Selamat Datang</h1>
	<p>
		<?php 
		echo ucwords($namaLengkap);
		echo $pesan_nama;
		echo "<br>";
		echo selamatDatang();
		?>
	</p>		
</body>
</html>
