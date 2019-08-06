<?php

class mobil{
    protected $merek;

    function  tampil_merek($toyota) {
        $this->merek = $toyota;
    }
    public function  tampil_merek1(){
        $this->merek;
    }
}
//Class inheritence
class kerangka extends mobil{
    protected $t_merek;

    function iniadalah($kerangka) {
        $this->t_merek = $kerangka;
    }
    public function  tampil_merek2(){
        $this->t_merek;
    }
}

$panggil_mobil = new kerangka;

$panggil_mobil->tampil_merek("Ini adalah mobil toyota");
$panggil_mobil->iniadalah("Ini adalah mobil warna merah");

echo "Mobil : ". $panggil_mobil->tampil_merek1() . "<br>";
echo "Warna : ". $panggil_mobil->tampil_merek2() . "<br>";

?>