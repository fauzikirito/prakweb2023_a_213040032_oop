<?php 
class Produk {
    public  $judul = "Judul",
            $penulis = "Penulis",
            $penerbit = "Penerbit",
            $harga = 0;

    public function sayHello() {
        return "Hello World!";
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Boku no Pico";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "VillageRhapsody";
// $produk2->tambahProperty = "Hehe"
// var_dump($produk2->judul);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shounen Jump";
$produk3->harga = 30000000;
//var_dump($produk3);

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// $produk3->getLabel();

$produk4 = new Produk();
$produk4->judul = "Borutod";
$produk4->penulis = "Masashi Kishimoto";
$produk4->penerbit = "Shounen Jump";
$produk4->harga = 30000000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

?>