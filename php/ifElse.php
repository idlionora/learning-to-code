<?php
$nama = "";
$nilai = 80;
$wawancara = "lulus";

$warna = 'Biru';
$ukuran = 'L';

$biaya = 80000;
$biaya_tambahan = 15000;

if($nama != "" || $nama != null) {
    echo "<h2>Selamat Datang, $nama</h2>";
} else {
    echo "<h2>Selamat Datang, Kawan</h2>";
}

if ($nilai >= 85) {
    echo "Anda lulus tes tulis. Nilai Anda A,";
    $kategoriNilai = "A";
} else if ($nilai >=70) {
    echo "Anda lulus tes tulis. Nilai Anda B,";
    $kategoriNilai = "B";
} else if ($nilai >=60) {
    echo "Anda mendapat nilai C,";
    $kategoriNilai = "C";
} else if ($nilai >=50){
    echo "Anda mendapat nilai D,";
    $kategoriNilai = "D";
} else {
    echo "Maaf Anda tidak lulus.";
    $kategoriNilai = "E";
}

switch ($kategoriNilai) {
    case 'A':
        echo " sangat memuaskan.";
        break;
    case 'B':
        echo " memuaskan.";
        break;
    case 'C':
        echo " cukup.";
        break;
    case 'D':
        echo " kurang.";
        break;
    default: 
        break;
}
if ($nilai >=50) {
    if ($wawancara == "lulus") {
        echo "<br>Selamat, kami nyatakan Anda dapat bergabung dengan perusahaan kami.<br>";
    } else {
        echo "<br>Mohon maaf, Anda tidak lulus tes wawancara.<br>";
    }
}
//pengecekan kondisi ganda
echo "<h2>Pembelian Baju</h2>";

if ($warna == 'Biru' || $ukuran == "XL") {
    $biaya = 90000;    
}

if ($warna == 'Merah' && $ukuran == 'XL') {
    echo "Total harga: " . ($biaya + $biaya_tambahan);
} else {
    echo "Total harga: ".$biaya;
}

echo ($biaya == 80000 ? "<br>Biaya merupakan biaya asli." : "<br>Biaya dikenakan tambahan " . ($biaya == 90000 ? "10000" : "15000"));
?>
