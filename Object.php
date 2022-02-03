<?php
require_once "Class.php";

$book = new book("", "", 0, 0);
var_dump($book);

$siswa = new idSiswa("", 0, "");
var_dump($siswa);

//call namespace 
$tes = new idSiswa\one\idSiswa();
echo $tes->tes() . PHP_EOL;

$yes = new idSiswa\two\idSiswa();
echo $yes->yes() . PHP_EOL;

// import namespace
use idSiswa\one\{idsiswa as murid, idGuru as guru}; //use alias (as)

$retes = new murid();
echo $retes->tes() . PHP_EOL;

$retes2 = new guru();
echo $retes2->no();

use abstrac\{siswa, sd, smp};

$biodataSiswaSd = new sd();


$biodataSiswaSd->namaLengkap("wakando");
$biodataSiswaSd->jenisKelamin("Laki");
$biodataSiswaSd->kelas("enam");
$biodataSiswaSd->alamat("Rusia");
