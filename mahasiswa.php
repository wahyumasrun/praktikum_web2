<?php
// ================================================
// mahasiswa.php
// Praktikum 9: Studi Kasus Kedua - Sistem Mahasiswa
// ================================================

class Mahasiswa
{
    // Property
    public $nim;
    public $nama;
    public $prodi;
    public $nilai;

    // Method: menampilkan data mahasiswa beserta gradenya
    public function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo "Grade : " . $this->tentukanGrade() . "<br>";
    }

    // Method: menentukan grade berdasarkan nilai
    public function tentukanGrade()
    {
        if ($this->nilai >= 80) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 60) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }
}

// ------------------------------------------------
// Membuat object dan mengisi property
// (contoh sesuai modul: NIM 23001, Andi, SI, nilai 85)
// ------------------------------------------------
$mhs1 = new Mahasiswa();
$mhs1->nim = "23001";
$mhs1->nama = "Andi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->nilai = 85;

echo "<strong>Data Mahasiswa 1:</strong><br>";
$mhs1->tampilkanData();

// ------------------------------------------------
// Contoh tambahan object kedua untuk menguji
// berbagai rentang nilai/grade
// ------------------------------------------------
$mhs2 = new Mahasiswa();
$mhs2->nim = "23002";
$mhs2->nama = "Budi";
$mhs2->prodi = "Sistem Informasi";
$mhs2->nilai = 55;

echo "<br><strong>Data Mahasiswa 2:</strong><br>";
$mhs2->tampilkanData();
?>