<?php

class Big_Human
{
    // data member
    public $nama;
    public $marga;

    public function __construct(string $marga = "Yang", string $nama = "R")
    {
        $this->nama = $nama;
        $this->marga = $marga;
    }

    public function setNama (string $nama)
    {
        $this->nama = $nama;
    }

    public function getNama ()
    {
        return $this->nama;
    }

    public function display():void
    {
        echo "Nama : " .$this->getNama() ."<br>";
        echo "Marga : " .$this->getMarga();
    }

    public function getMarga()
    {
        return $this->marga;
    }
}

class Tiny_Human extends Big_Human
{

}

$tiny_human1 = new Tiny_Human;
echo $tiny_human1->display();
?>