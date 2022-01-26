<?php

//class
class produk
{
    //property
    public  $judul,
        $penulis,
        $penerbit,
        $harga;

    //method construct
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        //menerima parameter untuk mengisi property yang ada didalam kelas
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}
class cetakInfoProduk
{
    public function cetak($produk)
    {
        // $str = "Naruto, | Masashi kisimoto, shonen jump (Rp. 30000) | |   ";
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}




//object
$produk1 = new produk("Naruto", "Masahi Kisimoto", "Shonen Jump", 3000000);
$produk2 = new produk("Metal slug", "arararaar", "hareza", 20000000);


echo "Komik : $produk1->penulis, $produk1->penerbit";
echo "<br>";
echo "Game : $produk2->penulis, $produk2->penerbit";
echo "<br>";
$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($produk1);
