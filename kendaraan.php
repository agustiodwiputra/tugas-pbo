<?php 
class kendaraan{
	var $jenis;
	var $transportasi;
	var $bahan_bakar;

	public function setjenis($jenis=''){
		$this->jenis=$jenis;
	}
	public function settransportasi($transportasi=''){
		$this->transportasi=$transportasi;
	}
	public function setbahan_bakar($bahan_bakar=''){
		$this->bahan_bakar=$bahan_bakar;
	}
	public function cetak(){
		echo'jenis :'.$this->jenis.",";
		echo'transportasi :'.$this->transportasi.",";
		echo'bahan_bakar :'.$this->bahan_bakar.",";
		echo' :'.$this->;
	}
}
$motor = new kendaraan();
$motor->setjenis('motor');
$motor->settransportasi('darat');
$motor->setbahan_bakar('bensin');
$motor->cetak();
echo "<br>";
