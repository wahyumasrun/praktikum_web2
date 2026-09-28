<?php

// Praktikum 2-7: Pengenalan PBO dengan PHP

// Praktikum 2: Membuat Class
// Praktikum 6: Menambahkan Method
class Mahasiswa
{
    // Property (Praktikum 2)
    public $nim;
    public $nama;
    public $prodi;
    public $semester;

    // Method (Praktikum 6)
    public function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Semester : " . $this->semester . "<br>";
    }
}



// Praktikum 3: Membuat Object
// Praktikum 4: Mengisi Property Object
$mhs1 = new Mahasiswa();
$mhs1->nim = "23001";
$mhs1->nama = "Andi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->semester = 4;



// Praktikum 5: Membuat Object Kedua
$mhs2 = new Mahasiswa();
$mhs2->nim = "23002";
$mhs2->nama = "Budi";
$mhs2->prodi = "Sistem Informasi";
$mhs2->semester = 2;



// Menampilkan data kedua object
// Setiap object punya data sendiri walau dibuat
// dari class yang sama (karena masing-masing object
// menyimpan property-nya sendiri secara independen)

echo "<strong>Data Mahasiswa 1:</strong><br>";
$mhs1->tampilkanData();

echo "<br><strong>Data Mahasiswa 2:</strong><br>";
$mhs2->tampilkanData();



// Praktikum 7: Membandingkan Prosedural dan PBO
// (contoh perbandingan singkat, versi PBO)

echo "<br><hr><strong>Contoh Praktikum 7 (versi PBO):</strong><br>";

class MahasiswaNama
{
    public $nim;
    public $nama;
    public $prodi;
    public $semester;

    public function tampilkanDataAll()
    {
        echo $this->nim;
        echo $this->nama;
        echo $this->prodi;
        echo $this->semester;
    }
}

$mhs = new MahasiswaNama();
$mhs->nama = "Andi";
$mhs->tampilkanDataAll();
?>