<?php
//INTEGER & FLOAT
$numA = 20;
$numB = 3;

echo round($numA/$numB, 2);
echo "<br>";
echo $numA++;
echo "<br>";
echo "<br>";

//STRING
$nama = "Dadang";
$sambutan = "Selamat datang, $nama";
$sambutNama = 'Selamat datang, $nama';
echo $sambutan;
echo "<br>";
echo $sambutNama;
echo "<br>";
echo $sambutNama . " " . $nama;
echo "<br>";
echo "<br>";

//BOOLEAN
$nilaiA = "true";
$nilaiB = true;
$nilaiC = 10;
$nilaiD = 5;
$nilaiE = $nilaiD < $nilaiD;

echo $nilaiA;
echo "<br>";
echo var_dump($nilaiA);
echo "<br>";
echo $nilaiB;
echo "<br>";
echo var_dump($nilaiB);
echo "<br>";
echo "angka $nilaiC lebih kecil daripada $nilaiD, adalah ";
echo var_dump($nilaiE);
echo "<br>";
echo "<br>";

//ARRAY
$arrHewan = array("sapi", "ayam", "kambing");
$arrHewan = ["sapi", "kambing", "ayam"];
$arrHewan[] = "kucing";
$arrHewan[99] = "anjing";
$arrHewan[0] = "kerbau";
// echo $arrHewan; //hanya akan menampilkan tulisan "Array", tidak isinya
// echo "<br>";
echo $arrHewan[1];
echo "<br>";
echo $arrHewan[20] ?? "index kosong"; //memanggil index yg kalau undefined panggil varibel selanjutnya (string)
print_r($arrHewan);
echo "<br>";
var_dump($arrHewan);
echo "<br>";
echo "<br>";

//ARRAY ASOSIATIF
$dataDiri[] = "Nurul Azizah";
$dataDiri[] = "A";
$dataDiri[] = "Cimahi";
// $dataDiri["nama"] = "Nurul Azizah";
// $dataDiri["goldarah"] = "A";
// $dataDiri["alamat"] = "Cimahi";

var_dump($dataDiri);
echo "<br>";
echo "Nama: " . $dataDiri[0] . "<br>";
echo "Gol. Darah: " . $dataDiri[1] . "<br>";
echo "Alamat: " . $dataDiri[2] . "<br>";
echo "<br>";
//Array Asosiatif
$dataDiri = [
    "nama" => "Nurul Azizah",
    "goldarah" => "A",
    "alamat" => "Cimahi"
]; // $dataDiri[0], $dataDiri[1], dan $dataDiri[3] tidak terbaca pada tahap ini karena tertimpa $dataDiri = []
echo "Nama: " . $dataDiri["nama"] . "<br>";
echo "Gol. Darah: " . $dataDiri["goldarah"] . "<br>";
echo "Alamat: " . $dataDiri["alamat"] . "<br>";
echo "<br>";

//ARRAY MULTIDIMENSI
$arrayBelanja = [["jeruk", "pepaya", "pisang"], "Sabtu", 3];
$herbivora = ["kambing", "sapi", "kerbau"];
$karnivora = ["harimau", "singa", "serigala"];
$omnivora = ["ayam", "monyet", "babi"];
$binatang = ["herbivora"=>$herbivora, "karnivora"=>$karnivora, "omnivora"=>$omnivora];
var_dump($arrayBelanja);
echo "<br>";
print_r($arrayBelanja);
echo "<br>" . $arrayBelanja[0][1] . " dimakan " . $binatang["omnivora"][1] . "<br>";
echo "<br>";

//NULL
$pesan = null;
$pesanTidakAda;
echo $pesan;
echo $pesanTidakAda??null;
$hasil = 5 + 5 / 2 * 10;
echo $hasil;
?>
