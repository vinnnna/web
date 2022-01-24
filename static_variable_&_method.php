<?php


/* jika menggunakan static, kita tidak perlu menginisialisasikan 
static mengakses dengan nilai tetap */

class CthStatic
{
    public static $nama = "nama variable";

    /* public $index = 1;
    public $nama = ["Tasya", "Kelmi", "Surya", "Kelvin"];    // [.....] = array */

    public static function all()
    {
        echo "Ini contoh function static";
    }


}

$obj = new CthStatic();

echo CthStatic::$nama; //keyword static -> :: 

echo "<br>";
echo CthStatic::all();

?>