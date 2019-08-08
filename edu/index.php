<?php 

//CLASS, PROPERTY, METHOD, OBJEK

//SORUM KENDARAAN
//MOBIL MERK TAHUN HARGA JENIS(MATIC/MANUAL)
//MOTOR MERK TAHUN HARGA JENIS(MATIC/MANUAL)

class Kendaraan {
	public $kendaraanApa, $merk, $tahun;

	

	public function getNama() {
		return "$this->merk, $this->tahun";
	}
	public function getInfoKendaraan() {
		$pas = "{$this->kendaraanApa} {$this->getNama()}";
		return $pas;
	}

	public function __construct($kendaraanApa = "kendaraanApa", $merk = "merk", $tahun = "tahun" ) {
		$this->kendaraanApa = $kendaraanApa;
		$this->merk = $merk;
		$this->tahun = $tahun;
	}

}

class Mobil extends Kendaraan {
					//METHOD TURUAN DARI CLASS KENDARAAN
	public function getInfoKendaraan() {
		$pas = "Mobil : {$this->kendaraanApa} {$this->getNama()}";
		return $pas;
	}

}



$kendaraan1 = new Mobil("Toyota","Avanza","2017");

echo $kendaraan1->getInfoKendaraan();

?>