<?php

// Tugas Praktikum: Sistem Sederhana Rental Kendaraan

// Class 1: Kendaraan
// Property: nomor, merk, jenis
// Method  : tampilkanData(), statusKendaraan()
class Kendaraan
{
    public $nomor;
    public $merk;
    public $jenis;
    public $tersedia; // true = tersedia, false = sedang disewa

    public function tampilkanData()
    {
        echo "Nomor : " . $this->nomor . "<br>";
        echo "Merk : " . $this->merk . "<br>";
        echo "Jenis : " . $this->jenis . "<br>";
    }

    public function statusKendaraan()
    {
        if ($this->tersedia) {
            echo $this->merk . " (" . $this->nomor . ") berstatus: Tersedia<br>";
        } else {
            echo $this->merk . " (" . $this->nomor . ") berstatus: Sedang disewa<br>";
        }
    }
}

// Class 2: Pelanggan
// Property: id, nama, alamat
// Method  : tampilkanData(), sewaKendaraan()
class Pelanggan
{
    public $id;
    public $nama;
    public $alamat;

    public function tampilkanData()
    {
        echo "ID : " . $this->id . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Alamat : " . $this->alamat . "<br>";
    }

    // Method ini menghubungkan Pelanggan dengan object Kendaraan
    public function sewaKendaraan(Kendaraan $kendaraan)
    {
        if ($kendaraan->tersedia) {
            $kendaraan->tersedia = false;
            echo $this->nama . " berhasil menyewa " . $kendaraan->merk . " (" . $kendaraan->nomor . ")<br>";
        } else {
            echo $this->nama . " gagal menyewa " . $kendaraan->merk . ", kendaraan sedang tidak tersedia<br>";
        }
    }
}


// Implementasi PHP: minimal 2 object

// Object dari class Kendaraan
$kendaraan1 = new Kendaraan();
$kendaraan1->nomor = "B 1234 XYZ";
$kendaraan1->merk = "Honda Beat";
$kendaraan1->jenis = "Motor";
$kendaraan1->tersedia = true;

$kendaraan2 = new Kendaraan();
$kendaraan2->nomor = "B 5678 ABC";
$kendaraan2->merk = "Toyota Avanza";
$kendaraan2->jenis = "Mobil";
$kendaraan2->tersedia = true;

// Object dari class Pelanggan
$pelanggan1 = new Pelanggan();
$pelanggan1->id = "P001";
$pelanggan1->nama = "Andi";
$pelanggan1->alamat = "Jl. Merdeka No. 10";

$pelanggan2 = new Pelanggan();
$pelanggan2->id = "P002";
$pelanggan2->nama = "Budi";
$pelanggan2->alamat = "Jl. Sudirman No. 5";


// Menampilkan data awal
echo "<strong>Data Kendaraan:</strong><br>";
$kendaraan1->tampilkanData();
$kendaraan1->statusKendaraan();
echo "<br>";
$kendaraan2->tampilkanData();
$kendaraan2->statusKendaraan();

echo "<br><strong>Data Pelanggan:</strong><br>";
$pelanggan1->tampilkanData();
echo "<br>";
$pelanggan2->tampilkanData();


// Proses penyewaan kendaraan
echo "<br><strong>Proses Penyewaan:</strong><br>";
$pelanggan1->sewaKendaraan($kendaraan1); // berhasil
$pelanggan2->sewaKendaraan($kendaraan1); // gagal, sudah disewa Andi

echo "<br><strong>Status Kendaraan Setelah Disewa:</strong><br>";
$kendaraan1->statusKendaraan();
$kendaraan2->statusKendaraan();
?>