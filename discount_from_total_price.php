<?php

class Barang
{
    private $harga;
    private $diskon;

    public function __construct(int $harga = 5000, int $diskon = 5)
    {
        $this-> harga = $harga;
        $this-> diskon = $diskon;
    }

    public function setHarga(int $harga)
    {
        $this-> harga = $harga;
    }
    
    public function getHarga()
    {
        $totalharga = 5000;
        
        return ($totalharga * $this->harga);
    }

    public function getJam()
    {
        return $this-> jam;
    }

    public function getTotal (int $jumlahJam)
    {
        $total = 0;

        if($jumlahJam >= 5 && $jumlahJam <=10)
        {
            $total += $jumlahJam * $this->harga * $this->diskon / 100;

            return ($jumlahJam * $this->harga - $total);
        }
        elseif ($jumlahJam >= 11 && $jumlahJam <= 25)
        {
            $total += $jumlahJam * $this->harga * $this->diskon + 10 / 100;

            return ($jumlahJam * $this->harga - $total);

        } else
        {
            return $this->harga * $jumlahJam;
        }
    }

    public function display():void
    {
        echo "Jam Rental : " .$this->getJam() ."<br>";
        echo "Harga Sebelum Diskon : " .$this->getHarga() ."<br>";
    }
}

$barang = new Barang();
echo "Harga Setelah Diskon: Rp. " .$barang->getTotal(jumlahJam: 5);