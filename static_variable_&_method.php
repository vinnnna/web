<?php


/* jika menggunakan static, kita tidak perlu menginisialisasikan static mengakses dengan nilai tetap */

class CthStatic
{
    public static $nama = ["Tasya", "Kelmi", "Surya", "Kelvin"]; // [.....] = array */

    public $index = 1; 

    public static function all()
    {
        $index = 1;
        
        foreach(self::$nama as $na)                              
        {                                                  
            echo self::$index++ ."." .$na . "<br>";
        }
    }

public function display()
    {
        echo self::all();
    }


}

class SubStatic extends CthStatic
{

}

echo "<br>";

$obj2 = new SubStatic();

echo $obj2->display();

?>
