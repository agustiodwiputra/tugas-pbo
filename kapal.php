<?php 
class kapal{
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
$kapal = new kapal();
$kapal->setmerk('tanker');
$kapal->settransportasi('laut');
$kapal->setbahan_bakar('minyak-solar');
$kapal->cetak();
echo "<br>";

$kapal = new kapal();
$kapal->setmerk('fery');
$kapal->settransportasi('laut');
$kapal->setbahan_bakar('solar');
$kapal->cetak();
echo "<br>";

$kapal = new kapal();
$kapal->setmerk('pesiar');
$kapal->settransportasi('laut');
$kapal->setbahan_bakar('solar');
$kapal->cetak();
echo "<br>";

$kapal = new kapal();
$kapal->setmerk('kapal-selam');
$kapal->settransportasi('laut');
$kapal->setbahan_bakar('solar');
$kapal->cetak();
echo "<br>";

$kapal = new kapal();
$kapal->setmerk('kapal-cargo');
$kapal->settransportasi('laut');
$kapal->setbahan_bakar('solar');
$kapal->cetak();
echo "<br>";

