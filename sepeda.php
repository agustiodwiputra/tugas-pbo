<?php 
class sepeda{
	var $merk;
	var $transportasi;
	var $bahan_bakar;

	public function setmerk($merk=''){
		$this->merk=$merk;
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
$sepeda = new sepeda();
$sepeda->setmerk('avanza');
$sepeda->settransportasi('darat');
$sepeda->setbahan_bakar('tanpa-bahan-bakar/tenaga');
$sepeda->cetak();
echo "<br>";

$sepeda = new sepeda();
$sepeda->setmerk('nissan');
$sepeda->settransportasi('darat');
$sepeda->setbahan_bakar('tanpa-bahan-bakar/tenaga');
$sepeda->cetak();
echo "<br>";

$sepeda = new sepeda();
$sepeda->setmerk('galardo');
$sepeda->settransportasi('darat');
$sepeda->setbahan_bakar('tanpa-bahan-bakar/tenaga');
$sepeda->cetak();
echo "<br>";

$sepeda = new sepeda();
$sepeda->setmerk('ferari');
$sepeda->settransportasi('darat');
$sepeda->setbahan_bakar('tanpa-bahan-bakar/tenaga');
$sepeda->cetak();
echo "<br>";

$sepeda = new sepeda();
$sepeda->setmerk('bmw');
$sepeda->settransportasi('darat');
$sepeda->setbahan_bakar('tanpa-bahan-bakar');
$sepeda->cetak();
echo "<br>";

