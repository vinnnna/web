<?php

    class Cth2
    {
        public $nama;
        private $harga;
        private $stok;

        //constructor

        public function __construct(string $nama = "Kopi", int $harga = 5000, int $stok = 25)
        {
            $this-> nama = $nama;
            $this-> harga = $harga;
            $this-> stok = $stok;
        }
    

    public function setNama (string $nama)
    {
        $this-> nama = $nama;
    }
    
    public function getNama()
    {
        return $this-> nama;
    }


    public function setHarga (int $harga)
    {
        $this-> harga = $harga;
    }

    public function getHarga()
    {
        return $this-> harga;
    }

    public function setStok (int $stok)
    {
        $this-> stok = $stok;
    }

    public function getStok()
    {
        return $this-> stok;
    }

    public function display():void
    {
        echo "Nama Benda : " .$this->getNama() ."<br>";
        echo "Harga : " .$this->getHarga() ."<br>";
        echo "Stok : " .$this->getStok();
    }

    /* public function display(): void
    {
        echo $this->getHarga();
        echo $this->getNama();
        echo $this->getStok();
    } */
}

$contoh1 = new Cth2();

    $contoh1->setNama(nama: "Buku");
    $contoh1->setHarga(harga: 35000);


    echo $contoh1->getNama();
    echo $contoh1->getHarga();
    echo $contoh1->getStok();


 echo $contoh1-> display();
 ?>