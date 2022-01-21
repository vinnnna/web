<?php

class Barang
{
    private $harga; //variable global (ketika didalam class), memanggil menggunakan $this
    private $diskon;

    public function __construct(int $harga = 5000, int $diskon = 5)
    {
        $this-> harga = $harga;
        $this-> diskon = $diskon;
    }

    public function getTotal (int $jumlahJam)
    {
        $total = 0; //variable local (didalam fungsi)

        if($jumlahJam >= 5)
        {
            $total += $jumlahJam * $this->harga; //+= 

            return $total;
        }
        elseif ($jumlahJam >= 6 && $jumlahJam <= 10)
        {
            $total += $jumlahJam * $this->harga;

            return $total;

        } else
        {
            return $total;
        }
    }
}

$barang = new Barang();
echo $barang->getTotal(jumlahJam: 16);