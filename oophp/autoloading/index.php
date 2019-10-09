<?php 

require_once 'App/init.php';


$produk1 = new Komik("Naruto", "Yayayayaa", "OK", 13000, 100);
$produk2 = new Game("Barbie", "OK", "Yayayaa", 10000, 50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

