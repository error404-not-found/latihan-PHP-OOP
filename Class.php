<?php

class book
{

    // Attribut
    public  $name,
        $publisher,
        $price,
        $stock;


    public function __construct(string $name, string $publisher, int $price, int $stock)
    {
        $this->name     = $name;
        $this->publisher = $publisher;
        $this->price    = $price;
        $this->stock    = $stock;
    }
}

class idSiswa
{

    // Attribut
    public  $name,
        $nis,
        $class;

    public function __construct(string $name, int $nis, string $class)
    {
        $this->name     = $name;
        $this->nis      = $nis;
        $this->class    = $class;
    }
}

// namespace solving same class
namespace idSiswa\one {
    class idSiswa
    {
        public function tes()
        {
            echo "tes";
        }
    }

    class idGuru
    {
        public function no()
        {
            echo "no";
        }
    }
}

namespace idSiswa\two {
    class idSiswa
    {
        public function yes()
        {
            echo "yes";
        }
    }
}


namespace abstrac {

    // class Biodatasiswa 
    // {
    //     public string   $nama,
    //         $jenisKelamin,
    //         $kelas,
    //         $alamat;
    // }


    abstract class siswa
    {

        abstract public function namaLengkap(string $nama);
        abstract public function jenisKelamin(string $jenisKelamin);
        abstract public function kelas(string $kelas);
        abstract public function alamat(string $alamat);
    }


    class sd extends siswa
    {

        public function namaLengkap($nama = "")
        {
            echo "nama lengkap: $nama" . PHP_EOL;
        }
        public function jenisKelamin($jenisKelamin = "")
        {
            echo "jenis kelamin: $jenisKelamin" . PHP_EOL;
        }
        public function kelas($kelas = "")
        {
            echo "kelas: $kelas" . PHP_EOL;
        }
        public function alamat($alamat = "")
        {
            echo "Alamt: $alamat" . PHP_EOL;
        }
    }
}
