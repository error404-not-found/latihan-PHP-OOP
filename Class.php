<?php

class book{

    // Attribut
    public  $name,
            $publisher,
            $price,
            $stock;


    public function __construct(string $name,string $publisher,int $price,int $stock){
        $this->name     =$name;
        $this->publisher=$publisher;
        $this->price    =$price;
        $this->stock    =$stock;
    }

}

class idSiswa{

    // Attribut
    public  $name,
            $nis,
            $class;

    public function __construct(string $name,int $nis,string $class){
        $this->name     = $name;
        $this->nis      = $nis;
        $this->class    = $class;
    }
}

// namespace solving same class
namespace idSiswa\one {
    class idSiswa{
        public function tes(){
            echo "tes";
        }
    }

    class idGuru{
        public function no(){
            echo "no";
        }
    }
}

namespace idSiswa\two {
    class idSiswa{
        public function yes(){
            echo "yes";
        }
    }
}