<?php

//class
class produk
{
    //property
    public  $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;

    //method construct
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        //menerima parameter untuk mengisi property yang ada didalam kelas
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    //method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }


    public function getInfoProduk()
    {
        // Naruto | Masahi Kisimoto, Shonen Jump (Rp. 3000000) - 100 halaman
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})-{$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
        return $str;
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
$produk1 = new Komik("Naruto", "Masahi Kisimoto", "Shonen Jump", 3000000, 100, 0, "komik");
$produk2 = new Game("Metal slug", "arararaar", "hareza", 20000000, 0, 50, "game");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
// Naruto | Masahi Kisimoto, Shonen Jump (Rp. 3000000) - 100 halaman
// Metal slug | arararaar, kimochi (Rp. 20000000) - 50 jam
