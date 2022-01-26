<?php 

require 'App/init.php';

// $produk1 = new Komik("Naruto", "Masahi Kisimoto", "Shonen Jump", 3000000, 100,);
// $produk2 = new Game("Metal slug", "arararaar", "kimochi", 20000000, 50);


// $cetakProduk = new cetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

Use App\Service\User as ServiceUser;
Use App\Produk\User as ProdukUser; 

new ProdukUser();
echo "<br>";
new ServiceUser();