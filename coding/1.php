<?php
//start
$nim = $_POST["NIM"];
$kehadiran = $_POST["kehadiran"];
$tugas = $_POST["tugas"];
$kuis = $_POST["kuis"];
$UTS = $_POST["UTS"];
$UAS = $_POST["UAS"];


$nilaiakhir = $kehadiran*0.05 + $tugas*0.25 + $kuis*0.20 + $UTS*0.25 +$UAS*0.25;

if($nilaiakhir>=90){
    $grade = "A";
}else if($nilaiakhir>=80){
    $grade = "B";
}else if($nilaiakhir>=60){
    $grade = "C";
}else{
    $grade ="D";
}

echo "Nilai anda adalah $nilaiakhir dan grade anda $grade"
?>