<?php

class CariArray
{
    public static $names = ["Adventy", "Alvina", "Angel", "Kelvin", "Khellmy", "Ricardo", "Sefryanto",
                            "Stenly", "Steven", "Suryanto", "Sukarta", "Tasya"];

    public bool $search = false;

    public function getAllName():CariArray
    {
        echo "<b>Seluruh Nama:</b><br>";
        $index = 1;
        foreach(self::$names as $nm)
        {
            echo $index++ . ". " . $nm . "<br>";
        }
        return $this;
    }   

    public function getOneName($searchName)
    {
        echo "<hr>Nama yang dicari: [<i>" . $searchName . "</i>]";
        $index = 0;
            for($index = 0; $index < count(static::$names); $index++)
            
            if($searchName == static::$names[$index])
            {
                $this->search = true;

                echo "<br> Nama [<i>" . $searchName . "</i>] ada di array pada index: " . ($index+1);
            }

        if ($this->search == false) {
            echo "<br> Nama [<i>" . $searchName . "</i>] tidak ada di array <br>";
        }
    }
}

    $cariArray = new CariArray();
    echo $cariArray->getAllName()->getOneName(searchName: "Alvina");