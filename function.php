<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">

<h1>Menghitung Bangun Ruang</h1>
<?php
require_once 'class.php';



$bangunRuang = new RumusBangunRuang();
$s = 10;
$luasPersegi = $bangunRuang->hitungLuasPersegi($s);
echo "Luas Persegi dengan sisi $s adalah : $luasPersegi <br> <br>";

$p1 = 10;
$l1 = 5;
$luasPersegi = $bangunRuang->hitungLuasPersegiPanjang($p1, $l1);
echo "Luas Persegi Panjang dengan panjang $p1 dan lebar $l1 adalah : $luasPersegi <br> <br>";

$p2 = 13;
$l2 = 7;
$kelilingPersegi = $bangunRuang->hitungKelilingPersegiPanjang($p2, $l2);
echo "Keliling Persegi Panjang dengan panjang $p2 dan lebar $l2 adalah  : $kelilingPersegi <br> <br>";

$a = 10;
$t =  8;
$luasSegitiga = $bangunRuang->hitungLuasSegitiga($a, $t);
echo "Luas Segitiga dengan alas $a dan tinggi $t adalah : $luasSegitiga <br><br>";

$j1 = 10;
$luasLingkaran = $bangunRuang->hitungLuasLingkaran($j1);
echo "Luas Lingkaran dengan jari-jari $j1 adalah : $luasLingkaran <br><br>";

$j2 = 7;
$kelilingLingkaran = $bangunRuang->hitungKelilingLingkaran($j2);
echo "Keliling Lingkaran dengan jari-jari $j2 adalah : $kelilingLingkaran <br><br>";

?> 
</body>
</html>