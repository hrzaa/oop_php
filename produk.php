<?php

//class
class produk
{
        //property
        public  $judul = "judul",
                $penulis = "penulis",
                $penerbit = "penerbit",
                $harga = 0;

        //method
        public function getLabel()
        {
                return "$this->penulis, $this->penerbit";
        }
}
// $produk1 = new produk();
// //objek-> property = 
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahahha";
// var_dump($produk2);

//object
$produk3 = new produk();

$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "shonen jump";
$produk3->harga = 3000000;

$produk4 = new produk();

$produk4->judul = "Metal Slug";
$produk4->penulis = "arararara";
$produk4->penerbit = "hareza";
$produk4->harga = 2000000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
