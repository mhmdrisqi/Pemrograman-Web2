<?php 

$nama = $_GET['name'];
$matkul = $_GET['matkul'];
$UTS = $_GET['UTS']; 
$UAS = $_GET['UAS'];
$Tugas = $_GET['Tugas'];
$total_nilai = ($UTS + $UAS + $Tugas) / 3;

if ($total_nilai > 75) {
    $keterangan = "Lulus";
} else {
    $keterangan = "Tidak Lulus";
}

?>