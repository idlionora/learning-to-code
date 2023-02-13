<?php 

$contohKalimat = "Aku suka makan martabak manis, terutama rasa coklat keju.";
echo '"' . $contohKalimat . '"<br>';
echo "Dalam kalimat tersebut terdapat " . str_word_count($contohKalimat) . " kata.<br>";

echo "<br>Ubah kata martabak menjadi roti, hasilnya yaitu:<br>";
echo '"' . str_replace('martabak', 'roti', $contohKalimat) . '"<br>';

echo "<br><b><em>referensi lain bisa lihat di php.net/manual</em></b><br>";

echo "<h1>Membuat Fungsi Sendiri</h1>";
function cetakSelamatDatang($nama = 'Kawan') {
    $lokasi = 'dari Bandung';
    if ($nama == 'Kawan') {
        $lokasi = 'di tempat masing-masing';
    }
    echo "Selamat datang, $nama $lokasi!<br>"; 
}
$nama = "Nurul Azizah";
cetakSelamatDatang();
cetakSelamatDatang($nama); //fungsi tidak dapat membaca variabel di luar dirinya scr otomatis
echo $lokasi??"(Variabel lokasi yang disebut dalam fungsi tdk dapat dipanggil secara global.)<br>";

echo "<h1>Belajar Tentang Return</h1>";
$kataPengganti = "pizza";
function ubahJadiCrepes($kata){
    if ($kata != "crepes") {
        return "crepes";
    } else {
        return "$kata yang ";
    }
};
function ubahVarJadiCrepes(&$variabel){
    $variabel = "crepes";
}
echo 'Mari kita panggil lagi kalimat atas: <br>"' . $contohKalimat . '"<br>';
echo 'Ubah kata martabak 1: <br>"' . str_replace("martabak", $kataPengganti, $contohKalimat) . '"<br>';
echo 'Ubah kata martabak 2: <br>"' . str_replace("martabak", ubahJadiCrepes($kataPengganti), $contohKalimat) . '"<br>';
ubahVarJadiCrepes($kataPengganti);
echo 'Ubah kata martabak 3: <br>"' . str_replace("martabak", ubahJadiCrepes($kataPengganti), $contohKalimat) . '"<br>';

echo "<h2>Contoh Lain Mengubah Variabel</h2>";
$contohAngka = 5;
function kaliLima(&$angka) {
    $angka = $angka * 5;
}
echo "Angka awal adalah $contohAngka.<br>";
for ($i = 0; $i < 5; $i++) {
    kaliLima($contohAngka);
    echo "Dikali lima menjadi " . $contohAngka . ".<br>";
}
echo "Hasil akhirnya adalah $contohAngka.<br>";
?>
