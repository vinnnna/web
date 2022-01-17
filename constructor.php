<?php

class Jurusan
{
    // yang lama
    /* public $nama; //variable global (didalam class)
    public $kelas;
    public $jenis;

    //constructor  
 
    public function __construct($nama = "", $kelas = "", $jenis = "")
    {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->jenis = $jenis;
 
    } */

    public function __construct(public $nama = "", public $kelas = "", public $jenis = "")

    {
        
    }

    public function display():void
    {
        echo "Nama : " .$this-> nama . "<br><br>";
        echo "Kelas : " .$this-> kelas . "<br><br>";
        echo "Jurusan : " .$this-> jenis;
    }
}

//inisialisasi objek
$jurusan1 = new Jurusan("Alvina" , "XII", "RPL");

echo $jurusan1-> display();

?>