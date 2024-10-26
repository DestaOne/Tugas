<?php

class RumusBangunRuang {

    
    public function hitungLuasPersegi($sisi) {
        $luasPersegi = $sisi * $sisi;
        return $luasPersegi;
    }
    public function hitungLuasPersegiPanjang($panjang, $lebar) {
        $luasPersegiPanjang = $panjang * $lebar;
        return $luasPersegiPanjang;
    }

    public function hitungKelilingPersegiPanjang($panjang, $lebar) {
        $kelilingPersegiPanjang = 2 * ($panjang + $lebar);
        return $kelilingPersegiPanjang;
    }

    public function hitungLuasSegitiga($alas, $tinggi) {
        $luasSegitiga = 1/2 * $alas * $tinggi;
        return $luasSegitiga;
    }

    public function hitungLuasLingkaran($jari) {
        $luasLingkaran = 3.14 * ($jari * $jari);
        return $luasLingkaran;
    }

    public function hitungKelilingLingkaran($jari) {
        $kelilingLingkaran = 2 * 3.14 * $jari ;
        return $kelilingLingkaran;
    }

    

    
}


