<?php

class mobil{
    private $mobil1 = "Roda 4";
    private $mobil2 = "Roda 6";
    
    public function tampil_mobil1(){
        return $this->mobil1;
    }
    public function tampil_mobil2(){
        return $this->mobil2;
    }
}

$mobil = new mobil();

echo "Mobil 1 : ". $mobil->tampil_mobil1() . "<br>";
echo "Mobil 2 : ". $mobil->tampil_mobil2() . "<br>";
echo '<br>';

?>