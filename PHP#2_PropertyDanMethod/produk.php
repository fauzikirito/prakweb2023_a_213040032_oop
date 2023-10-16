<?php 

// Jualan Produk
// Komik
// Game

class produk {
    public $judul, 
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function sayHello() {
        return "Hello World!";
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new produk();
// $produk -> judul = "SAO";

// $produk2 = new produk();
// $produk2 -> judul = "VillageRhapsody";
// $produk2 -> tambahProperty = "HeheBoy";

$produk1 = new produk("Naruto", "Masashi Kishimoto","Shonen Jump", 30000);
// $produk3->judul = "Naruto";
// $produk3->penulis = "Mashashi Kishimoto";
// $produk3->penerbit = "Shounen Jump";
// $produk3->harga = 30000;

$produk2 = new produk("Uncharted","Neil Druckmann","Sony Computer",250000);
// $produk4->judul = "Sen no Kiseki";
// $produk4->penulis = "Kazuya";
// $produk4->penerbit = "NiS America";
// $produk4->harga = 400000;

echo "Komik : " . $produk1 -> getLabel();
echo "<br>";
echo "Game : " . $produk2 -> getLabel();
//echo $produk3->sayHello();
//echo $produk3->getLabel();


?>