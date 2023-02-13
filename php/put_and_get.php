<?php 

$message = "Selamat Datang!\n";
file_put_contents("selamat_datang.txt", $message, FILE_APPEND);

$isiKonten = file_get_contents("selamat_datang.txt");
echo "$isiKonten";

$dataAnggota = [
    ['nama' => 'Toni', 'gol_darah' => 'B'],
    ['nama' => 'Oriza', 'gol_darah' => 'O'],
    ['nama' => 'Palupi', 'gol_darah' => 'B'],
    ['nama' => 'Kresna', 'gol_darah' => 'AB']
];
echo '<br><br>';
print_r($dataAnggota);

$serializedData = serialize($dataAnggota);
echo '<br><br>data yang sudah di-serialize:<br>' . $serializedData . '<br><br>'; 
file_put_contents('dataAnggota.txt', $serializedData);
$dataAnggotaFile1 = file_get_contents('dataAnggota.txt');
$unserializedData = unserialize($dataAnggotaFile1);
print_r($unserializedData);

$dataInJSON = json_encode($dataAnggota);
echo '<br><br>data dalam file json:<br>' . $dataInJSON . '<br><br>';
file_put_contents('dataAnggota.json', $dataInJSON); 
$dataAnggotaFile2 = file_get_contents('dataAnggota.json');
$dataFromJSON = json_decode($dataAnggotaFile2, true);

echo 'json_decode() tanpa parameter kedua:<br>';
print_r(json_decode($dataAnggotaFile2));
echo '<br><br>json_decode() dengan parameter kedua true:<br>';
print_r($dataFromJSON);
?>
