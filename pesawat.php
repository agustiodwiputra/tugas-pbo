<?php 
class pesawat{
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
$pesawat = new pesawat();
$pesawat->setmerk('Air Asia');
$pesawat->settransportasi('udara');
$pesawat->setbahan_bakar('Aftur');
$pesawat->cetak();
echo "<br>";

$pesawat = new pesawat();
$pesawat->setmerk('H215 Super Puma');
$pesawat->settransportasi('Udara');
$pesawat->setbahan_bakar('Aftur');
$pesawat->cetak();
echo "<br>";

$pesawat = new pesawat();
$pesawat->setmerk('Garuda Indonesia');
$pesawat->settransportasi('Udara');
$pesawat->setbahan_bakar('Aftur');
$pesawat->cetak();
echo "<br>";

$pesawat = new pesawat();
$pesawat->setmerk('Lion Air');
$pesawat->settransportasi('Udara');
$pesawat->setbahan_bakar('Aftur');
$pesawat->cetak();
echo "<br>";

$pesawat = new pesawat();
$pesawat->setmerk('EC725 Super Cougar');
$pesawat->settransportasi('Udara');
$pesawat->setbahan_bakar('Aftur');
$pesawat->cetak();
echo "<br>";

