<?php

    class Rental
    {
        public $harga;
        public $diskon;
        public $jam;

        public function __construct($harga = 5000, $diskon = 5, $jam = 0)
        {
            $this->harga = $harga;
            $this->diskon = $diskon;
            $this->jam = $jam;
        }

        function Diskon_Lima(){
            $hasil=$this->harga * $this->jam * 5/100;
            return($this->harga * $this->jam - $hasil);
        }

        function Diskon_LimaBelas(){
            $hasil=$this->harga * $this->jam * 15/100;
            return($this->harga * $this->jam - $hasil);
        }
    }

    $objek=new Rental;
    $objek->harga=5000;
    $objek->jam=4;

    if ($objek->jam>=5 AND $objek->jam<=10)
    {   
        echo "Jam Rental: " .$objek->jam ."<br>";
        echo "Harga Biasa: " .$objek->harga * $objek->jam ."<br>";
        echo "Harga Akhir: " .number_format($objek->Diskon_Lima()) ."<br>Diskon 5%";
    } 
    
    elseif ($objek->jam>=11 AND $objek->jam<=24)
    {
        echo "Jam Rental: " .$objek->jam ."<br>";
        echo "Harga Biasa: " .$objek->harga * $objek->jam ."<br>";
        echo "Harga Akhir: " .number_format($objek->Diskon_LimaBelas()) ."<br>Diskon 15%";
    } 
    
    elseif ($objek->jam<=5 AND $objek->jam>=1)
    {
        echo "Jam Rental: " .$objek->jam ."<br>";
        echo "Harga: " .$objek->harga ."<br>Jam rental tidak mencapai untuk diskon";
    }
    
    /* if ($objek->diskon==5){
        echo "Harga Akhir: " .number_format($objek->Cek_Harga());
    } else if ($objek->diskon==10){
        echo "Harga Akhir: " .number_format($objek->Cek_Harga());
    } else {
        echo "Harga Akhir: " .$harga;
    } */