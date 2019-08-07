<?php 
class mobil{
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
$mobil = new mobil();
$mobil->setmerk('avanza');
$mobil->settransportasi('darat');
$mobil->setbahan_bakar('bensin');
$mobil->cetak();
echo "<br>";

$mobil = new mobil();
$mobil->setmerk('nissan');
$mobil->settransportasi('darat');
$mobil->setbahan_bakar('pertamax');
$mobil->cetak();
echo "<br>";

$mobil = new mobil();
$mobil->setmerk('galardo');
$mobil->settransportasi('darat');
$mobil->setbahan_bakar('pertamax');
$mobil->cetak();
echo "<br>";

$mobil = new mobil();
$mobil->setmerk('ferari');
$mobil->settransportasi('darat');
$mobil->setbahan_bakar('pertamax');
$mobil->cetak();
echo "<br>";

$mobil = new mobil();
$mobil->setmerk('bmw');
$mobil->settransportasi('darat');
$mobil->setbahan_bakar('pertamax');
$mobil->cetak();
echo "<br>";

