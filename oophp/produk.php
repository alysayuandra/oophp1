<?php 


class Produk{
	public $judul = "judul", 
		   $penulis = "penulis", 
		   $penerbit = "penerbit", 
		   $harga = 0;

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Naruto";
// $produk2->tambahProperty = "Naruto";

// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "yayaya";
$produk3->penerbit = "ok";
$produk3->harga = 130000;


$produk4 = new Produk();
$produk4->judul = "Barbie";
$produk4->penulis = "ok";
$produk4->penerbit = "yayaya";
$produk4->harga = 130000;

echo "Komik:  " . $produk3->getLabel();
echo "<br>";
echo "Game: " . $produk4->getLabel();


 ?>