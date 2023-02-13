<?php 
echo "<h1>Perulangan</h1>";
echo "<h2>Countdown 10</h2>";

for ($count = 10; $count > -1; $count--) {
    echo "Hitung $count!<br>";
    if ($count == 0) {
        echo "Selesai!!<br><br>";
    };    
}

echo "<h2>Hitung Jumlah Warna Dalam Array</h2>";
$arrWarna = ['merah', 'biru', 'kuning', 'hijau', 'merah', 'ungu', 'turquoise', 'biru', 'merah', 'biru', 'merah', 'putih', 'biru', 'merah'];
$jumlahMerah = 0;
$jumlahBiru = 0;
$j = 0;
$k = 0;
$l = 0;
print_r($arrWarna);
for ($i = 0; $i < 14; $i++) {
    if ($arrWarna[$i] == 'merah') {
        $jumlahMerah++;
    }
}
echo "<br>jumlah warna merah ada " . $jumlahMerah . ".<br>";

while ($j <14) {
    if ($arrWarna[$j] == 'biru') {
        $jumlahBiru++;
    }
    $j++; 
}
echo "jumlah warna biru ada " . $jumlahBiru . ".<br>";

do {
    echo "<br>Sebut warna-warni " . ($k + 1) . " kali.";
    $k++;
} while ($k < 10);
echo "<br><br>Di dalam array warna...<br>";

foreach ($arrWarna as $key => $warna) {
    if ($l == 13) {
        echo "dan terdaftar warna " . $warna . " di indeks ke-" . $key . ".<br><br>";
        break;
    }
    echo "terdaftar warna " . $warna . " di indeks ke-" . $key . ",<br>";
    $l++;
}

echo "<h2>Data Siswa</h2>";
$dataSiswa = [
    ['nama' => 'Toni', 'kelas' => '2A'],
    ['nama' => 'Kresna', 'kelas' => '2C'],
    ['nama' => 'Palupi', 'kelas' => '2B'],
    ['nama' => 'Singgih', 'kelas' => '2C'],
    ['nama' => 'Oriza', 'kelas' => '2A'],
    ['nama' => 'Hani', 'kelas' => '2D'],
];

echo "<b>Siswa di luar kelas 2A:</b><br>";
foreach ($dataSiswa as $indeksSiswa => $siswa) {
    if ($siswa['kelas'] == '2A') {
        continue;
    }
    echo "Nama: " . $siswa['nama'] . "<br>";
    echo "Kelas: " . $siswa['kelas'] . "<br><br>";
}
echo "<b>Table Data Siswa</b><br>";
?>

<html>
    <head></head>
    <body>
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
            </tr>
            <?php
            foreach($dataSiswa as $siswa) {
            ?>
            <tr>
                <td><?php echo $siswa['nama'];?></td>
                <td><?php echo $siswa['kelas'];?></td>
            </tr>
            <?php }
            ?>
        </table>
    </body>
</html>
