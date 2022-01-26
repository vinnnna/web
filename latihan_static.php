<?php

class Bapak
{
    public static string $judul = "<i>class</i> Bapak";

    public static function getJudul():string
    {
    return static::$judul;  //self -> memanggil nilai dari class sendiri
    }

    public static function showClass():static
    {
        return new static;
    }
}

class Anak extends Bapak
{
    public static string $judul = "<i>class</i> Anak";

}


echo Bapak::getJudul() . "<br>";
echo var_dump(Bapak::showClass());
echo "<hr>";
echo Anak::getJudul() . "<br>";
echo var_dump(Anak::showClass());