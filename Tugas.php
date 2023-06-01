<?php

echo("================================== 1 ==================================\n");

$namaPanggilan = "Aziz";
$tanggal = date("j");

if (strlen($namaPanggilan) == ($tanggal - 2)) {
    echo "Berhasil";
} elseif (strlen($namaPanggilan) < $tanggal) {
    echo "Sedikit lagi";
} else {
    echo "Coba lagi";
}

echo "\n";
echo "================================== 2 ==================================\n";


$anggotaKelompok = [
    ["nama" => "Muhammad Rizky Aziz", "nim" => "499420"],
    ["nama" => "Muhammad Hanif Sauqi", "nim" => "213212"],
    ["nama" => "Yodhimas Geffananda", "nim" => "698363"],
    ["nama" => "Bima Bayu Sofana", "nim" => "323291"],
    ["nama" => "Rasyid Kusnady", "nim" => "797899"]
];

foreach ($anggotaKelompok as $anggota) {
    $nama = $anggota["nama"];
    $nim = $anggota["nim"];

    if (($nim%2) == 0) {
        echo "Nama: $nama, NIM: $nim, Peran: Back-end Developer\n";
    }
    else{
        echo "Nama: $nama, NIM: $nim, Peran: Front-end Developer\n";
    }
}

echo "================================== 3 ==================================\n";


$kotaKKN = [
    "Lampung",
    "Riau",
    "Jambi",
    "Bengkulu",
    "Makassar",
    "Kendari",
    "Gorontalo",
    "Samarinda",
    "Papua",
    "Nusa Tenggara Barat"
];

$namaDepan = str_split($namaPanggilan);
$tujuanKKN;

foreach ($namaDepan as $huruf) {
    $x = -1;
    foreach ($kotaKKN as $kota) {
        if (strtolower(substr($kota, 0, 1)) === strtolower($huruf)) {
            $tujuanKKN = $kota;
            $x = 0;
            break 2;
        }
        if($x == -1){
            $tujuanKKN = "Jawa Timur";
        }
    }
}

echo "Nama: $namaPanggilan\n";
echo "Tujuan KKN: $tujuanKKN\n";

?>