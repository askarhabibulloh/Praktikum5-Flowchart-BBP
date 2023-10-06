<?php
$angka = $_POST["angka"];

function cekbilangan($a){
    if($a % 2 ==0){
        echo "Angka $a adalah genap";
    }else{
        echo "Angka $a adalah ganjil";
    }
}
 cekbilangan($angka);
?>