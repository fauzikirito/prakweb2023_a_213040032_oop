<?php

// Constant
/*
- Sebuah identifier untuk menyimpan nilai.
- Nilainya tidak dapat berubah.
- Menggunakan keyword define() atau const.
- Menggunakan define, tidak bisa disimpan dalam kelas.
- Constant bisa disimpan dalam kelas.
*/

// define("NAMA", "Kirigaya Kazuto");
// echo NAMA;

// echo "<br>";

// const UMUR = 18;
// echo UMUR

// class Coba {
//     const NAMA = "Kirigaya Kazuto";
// }

// echo Coba::NAMA;

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>