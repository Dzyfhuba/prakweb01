<?php

// $nama = "Hafidz Ubaidillah";
// $jk = "Laki-laki";
// $alamat = "Pongangan Rejo RT. 04 RW. 03";
// $kecamatan = "Manyar";
// $kabupaten = "Gresik";
// $provinsi = "Jawa Timur";
// $kodepos = "61151";
// $foto = "hafidz.jpg";
function hitungUmur($tanggallahir)
{
$bday = new DateTime('21.02.2001'); // Your date of birth
$today = new Datetime(date('d.m.y'));
$diff = $today->diff($bday);
return $diff->y.' tahun, '.$diff->m.' bulan, '.$diff->d.' hari';
}
$data = [
    [
        'nama' => 'Hafidz Ubaidillah',
        'jk' => 'Laki-laki',
        'alamat' => 'Pongangan Rejo RT. 04 RW. 03',
        'kecamatan' => 'Manyar',
        'kabupaten' => 'Gresik',
        'provinsi' => 'Jawa Timur',
        'kodepos' => '61151',
        'foto' => 'hafidz.jpg',
        'tanggallahir' => '21/02/2001',
    ],
];

// echo 'Umur saya adalah ' . hitungUmur(1994, 2015) . ' tahun';
