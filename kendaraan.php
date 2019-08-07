<?php 
class motor{
	var $merk;
	var $transportasi;
	var $bahan_bakar;

	public function setmerk($merk=''){
		$this->jenis=$jenis;
	}
	public function settransportasi($transportasi=''){
		$this->transportasi=$transportasi;
	}
	public function setbahan_bakar($bahan_bakar=''){
		$this->bahan_bakar=$bahan_bakar;
	}
	public function cetak(){
		echo'merk :'.$this->merk.",";
		echo'transportasi :'.$this->transportasi.",";
		echo'bahan_bakar :'.$this->bahan_bakar.",";;
	}
}
$motor = new kendaraan();
$motor->setmerk('mio j');
$motor->settransportasi('darat');
$motor->setbahan_bakar('bensin');
$motor->cetak();
echo "<br>";

$motor = new kendaraan();
$motor->setmerk('kawasaki');
$motor->settransportasi('darat');
$motor->setbahan_bakar('pertamax');
$motor->cetak();
echo "<br>";

$motor = new kendaraan();
$motor->setmerk('supra');
$motor->settransportasi('darat');
$motor->setbahan_bakar('bensin');
$motor->cetak();
echo "<br>";

$motor = new kendaraan();
$motor->setmerk('vario 150');
$motor->settransportasi('darat');
$motor->setbahan_bakar('bensin');
$motor->cetak();
echo "<br>";

$motor = new kendaraan();
$motor->setmerk('satria fu');
$motor->settransportasi('darat');
$motor->setbahan_bakar('pertamax');
$motor->cetak();
echo "<br>";

