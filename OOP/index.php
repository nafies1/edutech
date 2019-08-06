<?php

#CLASS, METHOD, PROPERTY DAN OBJECT




class mobil {
    //property
    var $kerangka;
    var $merek;
    var $spion;
    var $mesin;

    //method
    function maju(){
        return "maju dong<br>";
    } 

    //method yang dieksekusi lebih dulu
    //construct(), penulisannya khusus didahului __
    function __construct(){
        echo "Ini construct <br>";
    }

    //method yang dieksekusi belakangan
    //destruct(), penulisannya khusus didahului __
    function __destruct(){
        echo "<br>Ini destruct <br>";
    }
    function merek(){
        return " honda";
    }
}

//object => $garasi/$mobil
//inisialisasi class
$garasi = new mobil();
//panggil method
echo $garasi->maju();
echo "<br>";
echo $garasi->merek();
echo "<br>";

public
private
protected

//##########################################



?>