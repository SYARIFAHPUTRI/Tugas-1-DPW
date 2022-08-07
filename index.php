<?php

echo "Hewan";
echo "<hr>";

class Hewan {
    public $jumlah_kaki,$bisa_terbang;
}

class Kucing extends Hewan {
    function bersuara()
    {
        return "meong meong meong";
    }
    function bisa_terbang()
    {
        return "Tidak Bisa Terbang";
    }
}

class Anjing extends Hewan {
    function bersuara()
    {
        return "guk guk guk guk";
    }
    function bisa_terbang()
    {
        return "Tidak Bisa Terbang";
    }
}

class Elang extends Hewan {
    function bersuara()
    {
        return "Miiippp Miiippp Miiippp";
    }
    function bisa_terbang()
    {
        return "Bisa Terbang";
    }
}

class Angsa extends Hewan {
    function bersuara()
    {
        return "kwaakkkkkkkkkk kwaakkkkk";
    }
    function bisa_terbang()
    {
        return "Bisa Terbang";
    }
}

$Cimmy = new Kucing;
$Cimmy->jumlah_kaki = 4;
echo "Cimmy adalah Kucing <br>";
echo "Punya Kaki Sebanyak: " .$Cimmy->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Cimmy->bisa_terbang()."<br>";
echo "Bersuara: " .$Cimmy->bersuara()."<br>";

echo "<hr>";

$YeonTan = new Anjing;
$YeonTan->jumlah_kaki = 4;
echo "YeonTan Adalah Anjing <br>";
echo "Punya Kaki Sebanyak: " .$YeonTan->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$YeonTan->bisa_terbang()."<br>";
echo "Bersuara: " .$YeonTan->bersuara()."<br>";

echo "<hr>";

$Commo = new Elang;
$Commo->jumlah_kaki = 2;
echo "Commo Adalah Elang <br>";
echo "Punya Kaki Sebanyak: " .$Commo->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Commo->bisa_terbang()."<br>";
echo "Bersuara: " .$Commo->bersuara()."<br>";

echo "<hr>";

$Yunggi = new Angsa;
$Yunggi->jumlah_kaki = 2;
echo "Yungi Adalah Angsa <br>";
echo "Punya Kaki Sebanyak: " .$Yunggi->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Yunggi->bisa_terbang()."<br>";
echo "Bersuara: " .$Yunggi->bersuara()."<br>";

echo "<hr>";

?>