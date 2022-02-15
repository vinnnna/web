<?php

trait serviceGreeting
{
    //Syarat trait:
    // 1. bisa memiliki variable member
    // 2. memiliki contain body
    
    public string $nama;

    public function sayHello(string $nama):void
    {

    }
}

class A
{
    //deklarasi saja
    use serviceGreeting;

    public function sayHello($nama)
    {
        echo "Halo" . $nama;
    }

}

//insialisasi class object
$user1 = new A();
$user1->sayHello(nama: "ha");