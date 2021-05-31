<?php

$nama = "Hafidz Ubaidillah";
$jk = "Laki-laki";
$alamat = "Pongangan Rejo RT. 04 RW. 03";
$kecamatan = "Manyar";
$kabupaten = "Gresik";
$provinsi = "Jawa Timur";
$kodepos = "61151";
$foto = "hafidz.jpg";

$data[] = ["Hafidz Ubaidillah", "Laki-laki", "Pongangan Rejo RT. 04 RW. 03", "Manyar", "Gresik", "Jawa Timur", "61151", "hafidz.jpg", "21/02/2001"];
  
function hitung_umur($tanggal_lahir){
$bdate      =   '21/02/2001';
$ageyears   =   date_diff(date_create($bdate), date_create('now'))->y;
$agemonths  =   date_diff(date_create($bdate), date_create('now'))->m;
$agedays    =   date_diff(date_create($bdate), date_create('now'))->d;
return array($agedays, $agemonths, $ageyears);
}
