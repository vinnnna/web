<?php

interface Kendaraan
{
    // Syarat Interface:
    // 1. tidak memiliki attributes

    public function onMachine():void;
}

class Beat implements Kendaraan
{

    public bool $startMachine;

    public function onMachine():void
    {
        $this->startMachine = true;

        if($this->startMachine == true)
        {
            echo "Mesin Beat hidup";
        }
        elseif($this->startMachine == false)
        {
            echo "Mesin Beat mati";
        }
    }
}

class Avanza implements Kendaraan
{
    public bool $startMachine;

    public function onMachine(): void
    {
        $this->startMachine = false;

        if($this->startMachine == true)
        {
            echo "Mesin Avanza hidup";
        }
        elseif($this->startMachine == false)
        {
            echo "Mesin Avanza mati";
        }
    }
}

class KendaraanUser
{
    // deklarasi ulang nama interface serta member variable
    public Kendaraan $kendaraan;

    // membuat constructor

    public function __construct(Kendaraan $kendaraan)
    {
        $this->kendaraan = $kendaraan;
    }

    public function startonMachine()
    {
        $this->kendaraan->onMachine();
    }
}

// insialisasi class objek

$beat1 = new Beat();
$avanza1 = new Avanza();

$kendaraanUser1 = new KendaraanUser($avanza1);
$kendaraanUser2 = new KendaraanUser($beat1);

$kendaraanUser1 -> startonMachine();
echo"<br>"; 
$kendaraanUser2 -> startonMachine();

?>
