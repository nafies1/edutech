<?php

class mobil{
    protected $merek = "toyota";
    private $warna;

    public function tampil_merek(){
        return $this->merek;
    }
}

$mobil = new mobil();
echo $mobil->tampil_merek();
echo '<br>';

?>