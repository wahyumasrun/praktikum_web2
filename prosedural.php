<?php

$nim = "23001";
$nama = "Andi";
$prodi = "Sistem Informasi";
$semester = 4;

$nim1 = "23002";
$nama1 = "Indi";
$prodi1 = "Sistem Informasi";
$semester1 = 4;

function tampilkanData($nim, $nama, $prodi, $semester)
{
    echo "NIM : " . $nim . "<br>";
    echo "Nama : " . $nama . "<br>";
    echo "Prodi : " . $prodi . "<br>";
    echo "Semester : " . $semester . "<br>";
}

tampilkanData($nim, $nama, $prodi, $semester); "<br>";
tampilkanData($nim1, $nama1, $prodi1, $semester1);

?>
