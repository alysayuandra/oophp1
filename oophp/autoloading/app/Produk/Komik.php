<?php 

class Komik extends Produk implements InfoProduk{
	public $jmlHalaman;
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
		
		parent::__construct($judul, $penulis = "penulis", $penerbit = "penerbit", $harga);

		$this->jmlHalaman = $jmlHalaman;

	}
	public function getInfoProduk(){
		{
		$str = "Komik : ". $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	
	}
}
}








 