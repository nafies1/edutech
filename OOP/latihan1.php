<?php

//OOP Class Method

class karyawan{
    public $nama, $umur, $line;

    public function tampil_nama(){
        return $this->nama;
    }
    public function tampil_umur(){
        return $this->umur;
    }
    public function tampil_line(){
        return $this->line;
    }
}

$adi = new karyawan();
$ali = new karyawan();

$adi->nama = "Adi";
$adi->umur = "26";
$adi->line = "Backend Developer";

$ali->nama = "Ali";
$ali->umur = "24";
$ali->line = "Frontend Developer";

echo "Nama : ". $adi->tampil_nama() . "<br>";
echo "Umur : ". $adi->tampil_umur() . "<br>";
echo "Line : ". $adi->tampil_line() . "<br>";
echo '---------------------------------<br>';
echo "Nama : ". $ali->tampil_nama() . "<br>";
echo "Umur : ". $ali->tampil_umur() . "<br>";
echo "Line : ". $ali->tampil_line() . "<br>";

echo '<br>';

?>